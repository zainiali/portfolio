const fs = require('fs');
const path = require('path');

const destDir = path.join(__dirname, '../public/build/assets');
const srcFile = path.join(__dirname, '../public/assets/girl.jpg');

fs.mkdirSync(destDir, { recursive: true });
if (fs.existsSync(srcFile)) {
  fs.copyFileSync(srcFile, path.join(destDir, 'girl.jpg'));
  console.log('Copied girl.jpg to build/assets');
}
