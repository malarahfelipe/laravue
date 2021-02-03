const mix = require('laravel-mix');
require('laravel-mix-tailwind');
require('laravel-mix-postcss-config');
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

mix.ts('resources/js/app.ts', 'public/js')
  .webpackConfig({
    module: {
      rules: [
        {
          test: /\.tsx?$/,
          loader: "ts-loader",
          options: { appendTsSuffixTo: [/\.vue$/] },
          exclude: /node_modules/,
        }
      ]
    },
    resolve: {
      extensions: ["*", ".js", ".jsx", ".vue", ".vue.ts", ".ts", ".tsx"]
    }
  })
  .sass('resources/sass/app.scss', 'public/css')
  .vue({ version: 2 })
  .postCss('resources/css/app.css', 'public/css')
  .tailwind('./tailwind.config.js');
