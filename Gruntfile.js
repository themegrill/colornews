/* jshint node:true */
module.exports = function ( grunt ) {
	'use strict';

	grunt.initConfig( {

		// Setting folder templates.
		dirs : {
			js  : 'js',
			css : 'css'
		},

		// JavaScript linting with JSHint.
		jshint : {
			options : {
				jshintrc : '.jshintrc'
			},
			all     : [
				'Gruntfile.js',
				'<%= dirs.js %>/*.js',
				'!<%= dirs.js %>/*.min.js',
				'!<%= dirs.js %>/fitvids/jquery.fitvids.js',
				'!<%= dirs.js %>/jquery.bxslider/jquery.bxslider.js',
				'!<%= dirs.js %>/magnific-popup/jquery.magnific-popup.js',
				'!<%= dirs.js %>/sticky/jquery.sticky.js',
				'!<%= dirs.js %>/tickerme/tickerme.js',
				'!<%= dirs.js %>/html5shiv.js'
			]
		},

		// Generate POT files.
		makepot : {
			dist : {
				options : {
					type        : 'wp-theme',
					domainPath  : 'languages',
					potFilename : 'colornews.pot',
					potHeaders  : {
						'report-msgid-bugs-to' : 'themegrill@gmail.com',
						'language-team'        : 'LANGUAGE <EMAIL@ADDRESS>'
					}
				}
			}
		},

		// Check textdomain errors.
		checktextdomain : {
			options : {
				text_domain : 'colornews',
				keywords    : [
					'__:1,2d',
					'_e:1,2d',
					'_x:1,2c,3d',
					'esc_html__:1,2d',
					'esc_html_e:1,2d',
					'esc_html_x:1,2c,3d',
					'esc_attr__:1,2d',
					'esc_attr_e:1,2d',
					'esc_attr_x:1,2c,3d',
					'_ex:1,2c,3d',
					'_n:1,2,4d',
					'_nx:1,2,4c,5d',
					'_n_noop:1,2,3d',
					'_nx_noop:1,2,3c,4d'
				]
			},
			files   : {
				src    : [
					'**/*.php',
					'!node_modules/**'
				],
				expand : true
			}
		},

		// Generate all RTL .css files
		rtlcss: {
			generate: {
				expand: true,
				src: ['./style.css'],
				dest:'./',
				ext: '-rtl.css'
			}
		},

		// Compress files and folders.
		compress : {
			options : {
				archive : 'dist/colornews.zip'
			},
			files   : {
				src    : [
					'**',
					'!.*',
					'!*.md',
					'!*.zip',
					'!.*/**',
					'!Gruntfile.js',
					'!package.json',
					'!node_modules/**'
				],
				dest   : 'colornews',
				expand : true
			}
		}
	} );

	// Load NPM tasks to be used here
	grunt.loadNpmTasks( 'grunt-wp-i18n' );
	grunt.loadNpmTasks( 'grunt-checktextdomain' );
	grunt.loadNpmTasks( 'grunt-contrib-compress' );
	grunt.loadNpmTasks( 'grunt-contrib-jshint' );
	grunt.loadNpmTasks( 'grunt-rtlcss' );

	// Register tasks
	grunt.registerTask( 'default', [
		'jshint'
	] );

	grunt.registerTask( 'dev', [
		'default',
		'makepot'
	] );

	grunt.registerTask( 'css', [
		'rtlcss'
	] );

	grunt.registerTask( 'zip', [
		'dev',
		'compress'
	] );
};
