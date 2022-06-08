const mix = require('laravel-mix');
let frontendImports = require('./src/resources/js/frontend-imports');

mix
   .sass('src/resources/sass/whatsapp-chat.scss', 'public/css')
   .babel(frontendImports, 'public/js/whatsapp-chat.js')
   .copy('src/resources/images/**', 'public/images');

