module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			},
			build: {
				src: 'src/js/scripts.js',
				dest: 'js/scripts.min.js'
			}
		},
		cssmin: {
			minify: {
				src: 'src/css/style.css',
				dest: 'css/style.min.css'
			}
		},
		watch: {
			uglify: {
				files: 'src/js/scripts.js',
				tasks: ['uglify']
			},
			cssmin: {
				files: 'src/css/style.css',
				tasks: ['cssmin']
			}
        }
	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-uglify');
	// Load the plugin that provides the "cssmin" task.
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	// Load the plugin that provides the "watch" task.
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Uglify task
	grunt.registerTask('scripts', ['uglify']);
	// CSSMin task
	grunt.registerTask('styles', ['cssmin']);
	// Default task(s).
	grunt.registerTask('default', ['uglify', 'cssmin', 'watch']);

};
