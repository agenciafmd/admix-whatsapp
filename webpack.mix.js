const mix = require('laravel-mix');
let frontendImports = require('./src/resources/js/frontend-imports');

mix
   .sass('src/resources/sass/whatsapp-chat.scss', 'src/assets/css')
   .babel(frontendImports, 'src/assets/js/whatsapp-chat.js')
   .copy('src/resources/images/**', 'src/assets/images');

