import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const destDir = path.join(__dirname, '../public/build/assets');
const assetsDir = path.join(__dirname, '../public/assets');

fs.mkdirSync(destDir, { recursive: true });

const girlSrc = path.join(assetsDir, 'girl.jpg');
if (fs.existsSync(girlSrc)) {
  fs.copyFileSync(girlSrc, path.join(destDir, 'girl.jpg'));
  console.log('Copied girl.jpg to build/assets');
}

// New CV: ZainabAli-Curriculum Vitae.pdf (copied as Zainab-CV.pdf for clean URLs)
const cvCandidates = ['ZainabAli-Curriculum Vitae.pdf', 'Zainab-CV.pdf'];
let cvCopied = false;
for (const name of cvCandidates) {
  const cvSrc = path.join(assetsDir, name);
  if (fs.existsSync(cvSrc)) {
    fs.copyFileSync(cvSrc, path.join(destDir, 'Zainab-CV.pdf'));
    console.log(`Copied ${name} to build/assets/Zainab-CV.pdf`);
    cvCopied = true;
    break;
  }
}
if (!cvCopied) console.warn('No CV PDF found in public/assets');

const assessmentSrc = path.join(assetsDir, 'assement.png');
if (fs.existsSync(assessmentSrc)) {
  fs.copyFileSync(assessmentSrc, path.join(destDir, 'assement.png'));
  console.log('Copied assement.png to build/assets');
}

const restaurantSrc = path.join(assetsDir, 'resturant.png');
if (fs.existsSync(restaurantSrc)) {
  fs.copyFileSync(restaurantSrc, path.join(destDir, 'resturant.png'));
  console.log('Copied resturant.png to build/assets');
}

const findupnowSrc = path.join(assetsDir, 'findupnow.png');
if (fs.existsSync(findupnowSrc)) {
  fs.copyFileSync(findupnowSrc, path.join(destDir, 'findupnow.png'));
  console.log('Copied findupnow.png to build/assets');
}
