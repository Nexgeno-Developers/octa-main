/**
 * Creates the optimised WebP variants the home page slider looks for:
 *   img/slider_images/<name>-800.webp   (phones, <= 800px wide)
 *   img/slider_images/<name>-1200.webp  (everything else)
 *
 * views/default/index.php uses a variant only when the file exists, so skipping this script is safe -
 * the original image is served instead. Run it again after uploading new slider images (img/ is not in git).
 *
 * Usage:  npm i sharp   (once, anywhere)   then   NODE_PATH=<where sharp is>/node_modules node tools/build-slider-variants.js
 */
const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

sharp.cache(false);
const dir = path.resolve(__dirname, '..', 'img', 'slider_images');
const variantRe = /-(800|1200)\.webp$/i;

(async () => {
	let made = 0;
	for (const file of fs.readdirSync(dir)) {
		if (!/\.(jpe?g|jfif|png|webp)$/i.test(file) || variantRe.test(file)) {
			continue;
		}
		const src = path.join(dir, file);
		const base = src.replace(/\.[^.]+$/, '');
		for (const width of [800, 1200]) {
			const out = `${base}-${width}.webp`;
			if (fs.existsSync(out) && fs.statSync(out).mtimeMs >= fs.statSync(src).mtimeMs) {
				continue;
			}
			try {
				await sharp(fs.readFileSync(src)).resize({ width, withoutEnlargement: true }).webp({ quality: 74, effort: 5 }).toFile(out);
				made++;
			} catch (e) {
				console.warn('skipped', file, e.message);
				break;
			}
		}
	}
	console.log('variants written:', made);
})();
