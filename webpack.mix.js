const mix = require('laravel-mix');
require('laravel-mix-postcss-config');
require('vue')
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .vue({ version: 2 })
    .extract(['vue'])
    .postCss('resources/css/app.css', 'public/css', [
      require('tailwindcss'),
      require('autoprefixer')
    ]);
