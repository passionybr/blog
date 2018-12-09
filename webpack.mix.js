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
let mix = require('laravel-mix');

const jsPath = 'public/js/';
const cssPath = 'public/css/';

const jsFiles = [jsPath+'jquery.min.js', jsPath+'bootstrap.min.js', jsPath+'custom.js'];
const cssFiles = [cssPath+'styles.css', cssPath+'app.css'];

mix.combine(jsFiles,jsPath+'alljs.js');
mix.styles(cssFiles,cssPath+'allcss.css');

mix.minify(jsPath+'alljs.js');
mix.minify(cssPath+'allcss.css');
if(mix.inProduction()){
    mix.version(jsPath+'alljs.min.js');
}
