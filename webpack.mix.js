const mix = require('laravel-mix');
const path = require('path');

mix.alias({
    ziggy: path.resolve('vendor/tightenco/ziggy/dist'), // or 'vendor/tightenco/ziggy/dist/vue' if you're using the Vue plugin
});

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
