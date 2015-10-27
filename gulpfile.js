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

elixir(function(mix) {
    mix.sass([
        'app.scss',
    ], 'public/css/all.css')
        .browserSync({
            proxy: 'localhost:8000',
        });

    mix.scripts([
        'vue-1.0.0-dev.js',
//        'vue-1.0.0-min.js',
        'custom.js',
    ]);

});
