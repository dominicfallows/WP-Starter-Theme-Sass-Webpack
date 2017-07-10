const webpack = require('webpack');
const merge = require('webpack-merge');
const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

const baseConfig = require('./base.config.js');

module.exports = merge(baseConfig, {
  output: {
		filename: 'app.bundle.min.js',
		path: path.join(__dirname, '../../assets')
	},

  module: {
    
		rules: [
			{
				test: /\.(scss|css)$/,
				use: ExtractTextPlugin.extract({
					fallback: 'style-loader',
					use: [
						{ loader: 'css-loader', options: { sourceMap: true, minimize: true } },
						{ loader: 'sass-loader', options: { sourceMap: true, minimize: true } }
					],
					fallback: 'style-loader'
				})
			}
    ]

  },

  plugins: [
    new ExtractTextPlugin('app.bundle.min.css'),
    
		// Minimize JS
    new UglifyJsPlugin({ sourceMap: true, compress: true }),

    // Minify CSS
    /*new webpack.LoaderOptionsPlugin({
      minimize: true,
    }),*/
  ],
});