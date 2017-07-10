const webpack = require('webpack');
const merge = require('webpack-merge');
const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const baseConfig = require('./base.config.js');

module.exports = merge(baseConfig, {
  devtool: 'eval-source-map',

  module: {

    rules: [
			{
				test: /\.(scss|css)$/,
				use: ExtractTextPlugin.extract({
					fallback: 'style-loader',
					use: [
						{ loader: 'css-loader', options: { sourceMap: true } },
						{ loader: 'sass-loader', options: { sourceMap: true } }
					],
					fallback: 'style-loader'
				})
			}
    ]

  },

	plugins: [
		new ExtractTextPlugin('app.bundle.css'),

		new BrowserSyncPlugin(
		{
			open: false,
			logFileChanges: false,
			port: 3000,
			ui: { port: 3100 },
			proxy: 'localhost:80',
			files: [
				{
					match: [
						path.join(__dirname, '../../assets/main.bundle.css'),
						path.join(__dirname, '../../assets/main.bundle.js'),
						path.join(__dirname, '../../**/*.php'),
						path.join(__dirname, '../../**/*.html')
					],
					fn: function(event, file) {
						if (event === "change") {
							const bs = require('browser-sync').get('bs-webpack-plugin');
							bs.reload();
						}
					}
				}
			]
		},
		{
			reload: true
		})
	]

});