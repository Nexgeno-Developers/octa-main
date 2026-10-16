/**
 * Builds css/phone-home.css for the phone version of the home page: every stylesheet the page loads late, concatenated in
 * cascade order and stripped of rules whose class/id/tag names are not used by the page's HTML or by any script.
 * (css/critical-mobile.css, built by build-critical-css.js, still covers the first paint.)
 *
 * The layout falls back to the original separate stylesheets when this file is missing or stale (hash header), so it can
 * never break the page. Rebuild after changing any of the source CSS files.
 *
 * Usage (needs Node + Chrome + `npm i penthouse puppeteer-core purgecss lightningcss`):
 *   CHROME_PATH="C:/Program Files/Google/Chrome/Application/chrome.exe" SITE_URL="http://localhost/octa-main/" \
 *   NODE_PATH=<scratch>/node_modules node tools/build-phone-css.js
 */
const fs = require('fs');
const path = require('path');
const crypto = require('crypto');
const puppeteer = require('puppeteer-core');
const { PurgeCSS } = require('purgecss');

const root = path.resolve(__dirname, '..');
const url = process.env.SITE_URL || 'http://localhost/octa-main/';
const chrome = process.env.CHROME_PATH || 'C:/Program Files/Google/Chrome/Application/chrome.exe';
// same order as the late stylesheets in layouts/main.php (see LateAssets): local files only
const sources = [
	'css/style.css', 'css/main_css_mega_mnu.css', 'css/hover.css', 'css/bootstrap.min.css', 'css/stye_mega_menu.css', 'css/demo.css',
	'lib/owlcarousel/assets/owl.carousel.min.css', 'lib/lightbox/css/lightbox.min.css', 'css/jquery-ui.css', 'css/intlTelInput.css', 'css/jquery.fancybox.css',
];
const phoneUA = 'Mozilla/5.0 (Linux; Android 11; moto g power (2022)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0 Mobile Safari/537.36';

// browsers silently skip a few typos in the site CSS that strict parsers reject (stray "}", "@ supports", empty selectors):
// lightningcss re-parses with error recovery, dropping only the broken rules, before PurgeCSS looks at the file
function sanitize(css, file) {
	const lightningcss = require('lightningcss');
	css = css.replace(/@\s+supports/g, '@supports');
	return lightningcss.transform({ filename: file, code: Buffer.from(css), minify: false, errorRecovery: true }).code.toString();
}

// the combined file lives in css/, so relative url() references of files from other folders (lib/...) must be re-based
function rebaseUrls(css, file) {
	const dir = path.posix.dirname(file);
	return css.replace(/url\(\s*(['"]?)([^'")]+)\1\s*\)/g, (m, q, u) => {
		if (/^(data:|https?:|\/|#)/i.test(u)) { return m; }
		const resolved = path.posix.normalize(path.posix.join(dir, u));
		return 'url(' + q + path.posix.relative('css', resolved) + q + ')';
	});
}

function walk(dir, ext, out = []) {
	for (const f of fs.readdirSync(dir, { withFileTypes: true })) {
		const p = path.join(dir, f.name);
		if (f.isDirectory()) { walk(p, ext, out); } else if (f.name.endsWith(ext)) { out.push(p); }
	}
	return out;
}

(async () => {
	const browser = await puppeteer.launch({ executablePath: chrome, headless: 'new', args: ['--no-sandbox'] });
	let html;
	try {
		const page = await browser.newPage();
		await page.emulate({ viewport: { width: 412, height: 823, isMobile: true, hasTouch: true, deviceScaleFactor: 1 }, userAgent: phoneUA });
		await page.goto(url, { waitUntil: 'load' });
		await new Promise(r => setTimeout(r, 4000));
		html = await page.content();
	} finally { await browser.close(); }

	// words used by every script (state classes toggled at run time live in JS)
	const jsFiles = [...walk(path.join(root, 'js'), '.js'), ...walk(path.join(root, 'lib'), '.js')];
	const jsText = jsFiles.map(f => fs.readFileSync(f, 'utf8')).join('\n');

	// purge file by file (keeps cascade order); a file postcss cannot parse is kept untouched
	let out = '';
	let before = 0;
	for (const f of sources) {
		const css = rebaseUrls(sanitize(fs.readFileSync(path.join(root, f), 'utf8'), f), f);
		before += css.length;
		try {
			const result = await new PurgeCSS().purge({
				content: [{ raw: html, extension: 'html' }, { raw: jsText, extension: 'js' }],
				css: [{ raw: css }],
				fontFace: true,
				keyframes: true,
				variables: true,
				safelist: { standard: [/^(in|show|active|open|current|collapse|collapsing|fade|disabled|hide|hidden|modal-open|is-|has-|owl-|hc-|nav-|fancybox|lb-|lightbox|ui-|wow|animated|slick|iti|intl|flag|country)/], greedy: [/modal/, /carousel/, /owl/, /hc-/, /fancybox/, /ui-/, /iti-/, /intl-/] },
			});
			out += result[0].css + String.fromCharCode(10);
			console.log(f, css.length, '->', result[0].css.length);
		} catch (e) {
			console.log(f, 'NOT purged:', e.reason || e.message);
			out += css + String.fromCharCode(10);
		}
	}
	const minified = require('lightningcss').transform({ filename: 'phone-home.css', code: Buffer.from(out), minify: true, errorRecovery: true }).code.toString();
	const hash = crypto.createHash('md5').update(sources.map(f => crypto.createHash('md5').update(fs.readFileSync(path.join(root, f))).digest('hex')).join('')).digest('hex');
	fs.writeFileSync(path.join(root, 'css/phone-home.css'), '/*src:' + hash + '*/' + minified);
	console.log('css/phone-home.css:', minified.length, 'bytes (from', before + ')');
})().catch(e => { console.error(e); process.exit(1); });
