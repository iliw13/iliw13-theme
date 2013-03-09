module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		less: {
			production: {
				options: {
					compress: true
				},
				files: {
					'css/styles.min.css': 'less/*.less'
				}
			},
			development: {
				options: {
					compress: false
				},
				files: {
					'css/styles.css': 'less/*.less'
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');

	grunt.registerTask('default', ['less']);
};