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
mix.js('resources/js/checkout.js', 'public/js');

let option = [
    require('postcss-import'),
    require('autoprefixer'),
    require('postcss-nested'),
    require('tailwindcss'),
];

mix.postCss('resources/sass/app.css', 'public/css', option);
mix.postCss('resources/sass/login.css', 'public/css', option);
mix.postCss('resources/sass/registration.css', 'public/css', option);
mix.postCss('resources/sass/home.css', 'public/css', option);

if (mix.inProduction()) {
    mix.sourceMaps().version();
}
