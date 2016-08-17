module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			},
			build: {
				src: 'src/js/scripts.css',
				dest: 'js/scripts.min.css'
			}
		},
		cssmin: {
			minify: {
				src: 'src/css/style.css',
				dest: 'css/style.min.css'
			}
		}
	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-uglify');
	// Load the plugin that provides the "cssmin" task.
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	// Uglify task
	grunt.registerTask('test', ['uglify']);
	// CSSMin task
	grunt.registerTask('test', ['cssmin']);
	// Default task(s).
	grunt.registerTask('default', ['uglify', 'cssmin']);

};
