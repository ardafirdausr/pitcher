let path = require('path');
let mix = require('laravel-mix');

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

mix.scripts([    
    path.resolve(__dirname, 'node_modules/jquery/dist/jquery.min.js'),    
    path.resolve(__dirname, 'node_modules/semantic-ui/dist/semantic.min.js'),        
    path.resolve(__dirname, 'resources/assets/js/*.js'),    
    ], 'public/js/app.js')
   .sass('resources/assets/sass/app.scss', 'public/css/');


