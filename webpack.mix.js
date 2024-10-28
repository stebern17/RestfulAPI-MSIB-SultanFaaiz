const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css') // Change to .css() if you're not using SASS
   .version(); // Optional for versioning
