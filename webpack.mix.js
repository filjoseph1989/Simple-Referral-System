const mix = require('laravel-mix');

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
mix.js('resources/js/app.js', 'public/js');

mix.postCss('resources/sass/app.css', 'public/css', [
    require('postcss-import'),
    require('autoprefixer'),
    require('postcss-nested'),
    require('tailwindcss'),
]);

if (mix.inProduction()) {
    mix.sourceMaps().version();
}