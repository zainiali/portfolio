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

const cvSrc = path.join(assetsDir, 'Zainab-CV.pdf');
if (fs.existsSync(cvSrc)) {
  fs.copyFileSync(cvSrc, path.join(destDir, 'Zainab-CV.pdf'));
  console.log('Copied Zainab-CV.pdf to build/assets');
}
