const mix = require('laravel-mix');

mix.js('frontend/src/index.js', 'public/js/app.js')
   .sass('resources/sass/app.scss', 'public/css')
   