module.exports = function( grunt ) {

	'use strict';
	
	grunt.initConfig({
	
		// compile .scss/.sass to .css using Compass
		compass: {
			dist: {
				options: {
					cssDir: 'web/app/themes/royco/css',
					sassDir: 'web/app/themes/royco/sass',
					imagesDir: 'web/app/themes/royco/img',
					javascriptsDir: 'web/app/themes/royco/js',
					force: true
				}
			}
		},
		
		open: {
            server: {
                path: 'http://clientname.wordpress.dev'
            }
        },
	
		// generate application cache manifest
		manifest:{dest: ''},
	
		// default watch configuration
		watch: {
			compass: {
				files: [
					'web/app/themes/royco/sass/*.{scss,sass}',
					'web/app/themes/royco/sass/**/**.{scss,sass}'
				],
				tasks:['compass', 'reload']
			},
			livereload: {
				options: { livereload: true },
				files: [
					'web/app/themes/royco/*.php',
					'web/app/themes/royco/css/*.css',
					'web/app/themes/royco/js/*.js',
					'web/app/themes/royco/img/*'
				]
			}
		},
	
		// Live reload Configuration
		reload: {
			liveReload: {port: 35728},
			proxy: {
				host: "localhost",
				port: 35729
			}
		}
	
	});
	
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-open');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks("grunt-reload");
	
	grunt.registerTask('default', ['compass','open','watch','reload']);

};
