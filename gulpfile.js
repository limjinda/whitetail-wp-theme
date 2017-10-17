const gulp = require('gulp');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const header = require('gulp-header');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const purify = require('gulp-purifycss');
const livereload = require('gulp-livereload');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const concatCSS = require('gulp-concat-css');
const runSequence = require('run-sequence');
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');

let banner = [
	'/*!',
	'Theme Name: whitetail',
	'Theme URI: https://www.jir4yu.me/2016/whitetail-free-wordpress-theme/',
	'Author: JindaTheme',
	'Author URI: http://www.jindatheme.com',
	'Description: a simple and minimal gallery WordPress theme from JindaTheme',
	'Version: 1.0',
	'License: GNU General Public License v2 or later',
	'License URI: http://www.gnu.org/licenses/gpl-2.0.html',
	'Tags: one-column, grid-layout, accessibility-ready, custom-menu, editor-style, featured-images, microformats, theme-options, threaded-comments, blog, photography, portfolio',
	'Text Domain: jindatheme',
	'*/',
	''
].join('\n');

gulp.task('pngs', () => {
	return gulp
		.src('./img/**/*.png')
		.pipe(imagemin())
		.pipe(gulp.dest('./img/'));
});

gulp.task('gifs', () => {
	return gulp
		.src('./img/**/*.gif')
		.pipe(
			imagemin({
				interlaced: true
			})
		)
		.pipe(gulp.dest('./img/'));
});

gulp.task('sass', () => {
	return gulp
		.src(['./scss/**/*.scss'])
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		.pipe(rename('style.css'))
		.pipe(gulp.dest('./'));
});

gulp.task('makeCSS', () => {
	return gulp
		.src(['./bower_components/basscss/css/basscss.css', './style.css'])
		.pipe(concatCSS('style.css'))
		.pipe(
			autoprefixer({
				browsers: ['last 2 versions']
			})
		)
		.pipe(
			cleanCSS({
				keepSpecialComments: 0
			})
		)
		.pipe(
			purify(['./**/*.php'], {
				minify: true,
				info: true
			})
		)
		.pipe(header(banner))
		.pipe(gulp.dest('./'))
		.pipe(livereload());
});

gulp.task('javascript', () => {
	return gulp
		.src([
			'./lib/modernizr.js',
			'./bower_components/trmix/dist/trmix.min.js',
			'./bower_components/matchHeight/jquery.matchHeight-min.js',
			'./bower_components/magnific-popup/dist/jquery.magnific-popup.js',
			'./js/main.js'
		])
		.pipe(
			concat('client.js', {
				newLine: ';'
			})
		)
		.pipe(
			uglify({
				preserveComments: 'license'
			})
		)
		.pipe(rename('client.min.js'))
		.pipe(gulp.dest('./js/lib/'))
		.pipe(livereload());
});

gulp.task('watch', () => {
	livereload.listen();
	gulp.watch(['./scss/**/*.scss'], () => runSequence('scss', 'makeCSS'));
	gulp.watch(['./js/main.js'], () => runSequence('javascript'));
});

gulp.task('default', ['pngs', 'gifs', 'javascript', 'watch']);
