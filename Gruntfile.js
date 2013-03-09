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
		},
		watch: {
			less: {
				files: ['less/*.less'],
				tasks: ['default']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['less']);
};