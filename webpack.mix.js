// webpack.mix.js
let mix = require('laravel-mix');
require('laravel-mix-polyfill');


mix.options({
    processCssUrls: false
})
    .webpackConfig({
        stats: "normal"
    })
    .js('src/js/app.js', 'js')
    .sass('src/scss/app.scss', 'css')
    .polyfill({
        enabled: true,
        useBuiltIns: "usage",
        targets: "firefox 50, IE 11"
    })
    .setPublicPath('dist');
