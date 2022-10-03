const path = require("path");
const TerserPlugin = require('terser-webpack-plugin');
const UnminifiedWebpackPlugin = require('unminified-webpack-plugin');

module.exports = {
  plugins: [
    new UnminifiedWebpackPlugin() // create minified and unminified versions of JS files
  ],
  optimization: {
    minimizer: [new TerserPlugin({
      extractComments: false, // remove LICENCE files
    })],
  },
  devtool: "source-map", // Create seperate source-map files
  entry: {
    'accordion': "./src/scripts/accordion.js",
    'carousels': "./src/scripts/carousels.js",
    'classie': "./src/scripts/_classie.js",
    'events': "./src/scripts/events.js",
    'fancybox': "./src/scripts/fancybox-settings.js",
    'header': "./src/scripts/header.js",
    'modernizr': "./src/scripts/_modernizr-custom.js",
    'menu': "./src/scripts/menu.js",
    'menu-mobile': "./src/scripts/menu-mobile.js",
    'scroll-to-top': "./src/scripts/scroll-to-top.js",
    'search': "./src/scripts/search.js",
    'team': "./src/scripts/team.js",
    'waypoints': "./src/scripts/vendor/waypoints.js"
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: ["babel-loader"]
      }
    ]
  },
  output: {
    filename: "[name].min.js",
    path: path.resolve(__dirname, "dist/scripts")
  },
}
