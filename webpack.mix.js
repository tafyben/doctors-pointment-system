const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')  // Adjust path to your entry file
    .vue({ version: 2 })  // Specify Vue 2 compatibility
    .sass('resources/sass/app.scss', 'public/css');  // Optional: if using Sass

// To add any custom Webpack configuration, use mix.webpackConfig
mix.webpackConfig({
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js'  // Full build with template compiler
        }
    }
});
