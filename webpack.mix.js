// Require the dependencies
require('dotenv').config()
const mix = require('webpack-mix').mix;
//const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

// Enable browser auto refresh at localhost:3000 and link it with valet domain name
/*mix.browserSync({
    proxy: process.env.APP_MIX_URL,
});*/

mix.autoload({
   jquery: ['$', 'window.jQuery'],
});

// Set the dist folder path
mix.setPublicPath('dist');

// Set the resources folder path
//mix.setResourceRoot('src/');

// Set the styles src and sit folder path
mix.sass('src/styles/app.scss', 'dist');

// Set the scripts src and sit folder path
mix.js('src/scripts/app.js', 'dist');

// Enable the source maps
mix.sourceMaps(true, 'cheap-source-map');

/*mix.webpackConfig(webpack => {
    return {
        plugins: [
            new SVGSpritemapPlugin({
                prefix: '',
            }),
        ],
    };
});*/
