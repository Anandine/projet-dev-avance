var path = require('path');
//webpack est en 3 parties : entrée, sortie et loader

module.exports = {
	entry: {
		'app': ['./es6/app.js']
	},
	output: {
		path: path.resolve(__dirname, "web/js"), //dirname = chemin du répertoir actuel, constante de node; ici on lui rajoute web/js, c'est le répertoire de destination
		filename: '[name].js' //notre fichier
	},
	module: {
		loaders: [
			{ 
				test: /\.js$/, 
				exclude: /node_modules/, 
				loader: "babel-loader",
				options: {
					presets: ["es2015"]
				}
			}
		]
	}
};