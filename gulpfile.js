var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix
        .sass('app.scss')
        .coffee('module.coffee')
        .phpUnit();

    mix.styles([
        'vendor/normalize.css',
        'libs/bootstrap.min.css',
        'libs/select2.min.css',
        'app.css'
    ], 'public/output/final.css', 'public/css');

    mix.scripts([
        'libs/jquery.min.js',
        'libs/bootstrap.min.js',
        'libs/select2.min.js',
        'module.js'
    ], 'public/output/final.js', 'public/js');

    mix.version('output/final.css');
});
