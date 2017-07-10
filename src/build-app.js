/**
 * Require Browsersync along with webpack and middleware for it
 */
var browserSync = require('browser-sync').create();
var webpack = require('webpack');
var webpackDevMiddleware = require('webpack-dev-middleware');
var stripAnsi = require('strip-ansi');
var path = require('path');

/**
 * Require ./webpack.config.js and make a bundler from it
 */
var webpackConfig = require('./webpack.config');

webpackConfig["plugins"].push(
  new webpack.LoaderOptionsPlugin({
    debug: true
  })
);
var bundler = webpack(webpackConfig);

/**
 * Reload all devices when bundle is complete
 * or send a fullscreen error message to the browser instead
 */
bundler.plugin('done', function (stats) {
  if (stats.hasErrors() || stats.hasWarnings()) {
    return browserSync.sockets.emit('fullscreen:message', {
      title: "Webpack Error:",
      body: stripAnsi(stats.toString()),
      timeout: 100000
    });
  }
  browserSync.reload();
});

/**
 * Run Browsersync and use middleware for Hot Module Replacement
 */
browserSync.init({
  open: false,
  logFileChanges: false,
  port: 3000,
  ui: { port: 3100 },
  proxy: 'localhost:80',
  middleware: [
    webpackDevMiddleware(bundler, {
      publicPath: webpackConfig.output.publicPath,
      stats: {
        colors: true
      }
    })
  ],
  plugins: ['bs-fullscreen-message'],
  files: [
    path.join(__dirname, '../assets/main.bundle.css'),
    path.join(__dirname, '../assets/main.bundle.js'),
    path.join(__dirname, '../**/*.php'),
    path.join(__dirname, '../**/*.html')
  ]
});