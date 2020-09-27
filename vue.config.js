const webpack = require('webpack');

module.exports = {
  configureWebpack: {
    plugins: [
      new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
      })
    ]
  }
}

// Below commented code works same as above but has a issue:
// This Works unless you don't use webpack v4 (v4 throws an error for some reason) check url below:
// https://stackoverflow.com/a/49627947/1292050
// module.exports = {
//   chainWebpack: config => {
//     config
//       .plugin('provide')
//       .use(webpack.ProvidePlugin, [{
//         $: 'jquery',
//         jquery: 'jquery',
//         jQuery: 'jquery',
//         'window.jQuery': 'jquery',
//         Popper: ['popper.js', 'default'],
//       }]);
//   },
// };