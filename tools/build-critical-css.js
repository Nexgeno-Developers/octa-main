/**
 * Builds css/critical-mobile.css: the above-the-fold CSS for phones, which main.php inlines in <head>
 * while the full stylesheets load without blocking rendering.
 *
 * The layout automatically ignores this file when any source stylesheet changed since it was built (hash header), so a
 * stale file can never break the page - it only stops being used until this script is run again.
 *
 * Usage (needs Node + Chrome; install the helpers once outside the web root, e.g. in a scratch folder):
 *   npm i penthouse puppeteer-core            (set PUPPETEER_SKIP_DOWNLOAD=1)
 *   CHROME_PATH="C:/Program Files/Google/Chrome/Application/chrome.exe" \
 *   SITE_URL="http://localhost/octa-main/" NODE_PATH=<scratch>/node_modules node tools/build-critical-css.js
 */
const fs = require('fs');
const crypto = require('crypto');
const path = require('path');
const penthouse = require('penthouse');
const puppeteer = require('puppeteer-core');

const root = path.resolve(__dirname, '..');
const url = process.env.SITE_URL || 'http://localhost/octa-main/';
const chrome = process.env.CHROME_PATH || 'C:/Program Files/Google/Chrome/Application/chrome.exe';
// same cascade order as the stylesheets in layouts/main.php (header layout rules live in stye_mega_menu.css / demo.css)
const sources = ['css/style.css', 'css/main_css_mega_mnu.css', 'css/hover.css', 'css/bootstrap.min.css', 'css/stye_mega_menu.css', 'css/demo.css'];
const phoneUA = 'Mozilla/5.0 (Linux; Android 11; moto g power (2022)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0 Mobile Safari/537.36';

(async () => {
	const css = sources.map(f => fs.readFileSync(path.join(root, f), 'utf8')).join('\n');
	const browser = await puppeteer.launch({ executablePath: chrome, headless: 'new', args: ['--no-sandbox'] });
	try {
		const critical = await penthouse({
			url,
			cssString: css,
			width: 412,
			height: 900,
			userAgent: phoneUA,
			blockJSRequests: false,
			timeout: 60000,
			renderWaitTime: 1500,
			keepLargerMediaQueries: false,
			forceInclude: [/^\.carousel/, /^\.item/, /^\.slide-image/, /^\.sr-only/, /^\.glyphicon/, /^\.fade/, /^\.in$/, /^\.hc-/, /^\.toggle/, /^\.arrow_icon/, /^\.openBtn/, /^\.overlay/],
			puppeteer: { getBrowser: () => browser },
		});
		// the layout compares this hash with the current stylesheets and ignores the file when they have changed
		const hash = crypto.createHash('md5').update(sources.map(f => crypto.createHash('md5').update(fs.readFileSync(path.join(root, f))).digest('hex')).join('')).digest('hex');
		fs.writeFileSync(path.join(root, 'css/critical-mobile.css'), '/*src:' + hash + '*/' + critical);
		console.log('css/critical-mobile.css written:', critical.length, 'bytes');
	} finally {
		await browser.close();
	}
})().catch(e => { console.error(e); process.exit(1); });
