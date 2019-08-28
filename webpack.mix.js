const mix = require('laravel-mix');

mix
    .setPublicPath('public/build')
    .setResourceRoot('/build/')
    .sass('resources/sass/app.scss', 'css')
    .js('resources/js/app.js', 'js')
    .version();
