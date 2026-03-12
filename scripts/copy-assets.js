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

const projectImages = ['findupnow.png', 'resturant.png', 'assement.png', 'executive.png'];
for (const name of projectImages) {
  const src = path.join(assetsDir, name);
  if (fs.existsSync(src)) {
    fs.copyFileSync(src, path.join(destDir, name));
    console.log(`Copied ${name} to build/assets`);
  }
}
