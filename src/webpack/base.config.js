const webpack = require('webpack');
const path = require('path');

module.exports = {
	entry: path.join(__dirname, '../js/app.js'),

	output: {
		filename: 'app.bundle.js',
		path: path.join(__dirname, '../../assets')
	},

	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: 'babel-loader',

				// Options to configure babel with
        query: {
          plugins: ['transform-runtime'],
          presets: ['es2015', 'stage-0'],
        }
			},
			// the url-loader uses DataUrls.
      // the file-loader emits files.
      {
        test: /\.woff2?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
        // Limiting the size of the woff fonts breaks font-awesome ONLY for the extract text plugin
        // loader: "url?limit=10000"
        use: "url-loader"
      },
      {
        test: /\.(ttf|eot|svg)(\?[\s\S]+)?$/,
        use: 'file-loader'
      },
		]
	},

	plugins: [
		new webpack.EnvironmentPlugin([
      'NODE_ENV'
    ])
	]
};
