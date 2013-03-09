module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		recess: {
    		production: {
				options: {
					compile: true,
					compress: true
				},
				files: {
					'css/styles.min.css': 'less/*.less'
				}
        	},
        	development: {
				options: {
					compile: true,
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

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-recess');

	grunt.registerTask('default', ['recess']);
};