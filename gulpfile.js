var gulp = require('gulp'),
	concat = require('gulp-concat'),
	rename = require('gulp-rename'),
	header = require('gulp-header'),
	minifyCss = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	uglify = require('gulp-uglify');

var banner = ['/*!',
	'Theme Name: WhiteTail',
	'Theme URI: http://www.jindatheme.com',
	'Author: JindaTheme',
	'Author URI: http://www.jindatheme.com',
	'Description: a simple and minimal gallery WordPress theme from JindaTheme',
	'Version: 1.0',
	'License: GNU General Public License v2 or later',
	'License URI: http://www.gnu.org/licenses/gpl-2.0.html',
	'Tags: Simple, Clean, Responsive, Clear, Minimal, Blog, JindaTheme, WhiteTail',
	'Text Domain: jindatheme',
	'*/',
	''
].join('\n');

gulp.task('pngs', function() {
	return gulp.src('./img/**/*.png')
		.pipe(imagemin())
		.pipe(gulp.dest('./img/'));
})

gulp.task('gifs', function() {
	return gulp.src('./img/**/*.gif')
		.pipe(imagemin({
			interlaced: true
		}))
		.pipe(gulp.dest('./img/'));
})

gulp.task('client-css', function() {
	return gulp.src(['./bower_components/basscss/css/basscss.css', './style.css'])
		.pipe(concat('style.css', {
			// newLine: ';'
		}))
		.pipe(minifyCss({
			keepSpecialComments: 0
		}))
		.pipe(header(banner))
		.pipe(gulp.dest('./'))
})

gulp.task('client-js', function() {
	return gulp.src(['./lib/modernizr-2.8.3-respond-1.4.2.min.js', './lib/jquery-1.11.2.min.js', './bower_components/trmix/dist/trmix.min.js', './bower_components/matchHeight/jquery.matchHeight-min.js', './js/main.js'])
		.pipe(concat('client.js', {
			newLine: ';'
		}))
		.pipe(uglify({
			preserveComments: 'license'
		}))
		.pipe(rename('client.min.js'))
		.pipe(gulp.dest('./js/lib/'));
});

gulp.task('default', ['pngs', 'gifs', 'client-css', 'client-js']);