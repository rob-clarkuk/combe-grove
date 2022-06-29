/*
 * npm install gulp -g
 * cd into project directory
 * npm init
 * npm install eslint browser-sync gulp gulp-sass gulp-uglify gulp-concat gulp-autoprefixer gulp-notify gulp-sourcemaps gulp-imagemin gulp-rename gulp-changed gulp-svg-sprite gulp-svgmin --save-dev
 */

// Plugins
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var notify  = require('gulp-notify');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var rename = require('gulp-rename');
var eslint = require('gulp-eslint');
var changed = require('gulp-changed');
var svgSprite = require('gulp-svg-sprite');
var svgmin = require('gulp-svgmin');

var hostname = 'http://tallulah.beta';
var baseDir = '';

// Config
var config = {

	icons: {
		src:	baseDir + 'src/icons/**/*.svg',
		dest:	baseDir + 'dist/icons'
	},

	img: {
		src: 	[baseDir + 'src/images/*.{gif,jpg,jpeg,png,svg}', baseDir + 'src/images/**/*.{gif,jpg,jpeg,png,svg}'],
		dist: 	baseDir + 'dist/images'
	},

	styles: {
		src: 	baseDir + 'src/styles/**/*.scss',
		dist: 	baseDir + 'dist/styles'
	},

	scripts: {
		src:	[baseDir + 'src/scripts/vendor/*.js', baseDir + 'src/scripts/*.js'],
		dist:	baseDir + 'dist/scripts'
	},

	fonts: {
		src:	baseDir + 'src/fonts/**/*',
		dist:	baseDir + 'dist/fonts'
	},

	sass: {
		outputStyle: 'compressed'
	},

	autoprefixer: {
		browsers: ['> 0.5%']
	},

	browserSync: {
		notify: false,
		open: false,
		proxy: hostname
	},

	imagemin: {
		progressive: true
	},

	svgSprite: {
		shape:{
			id: {
				generator:'icon-%s'
			},
			transform: [
				{svgo: {
					plugins: [
						{removeStyleElement: true},
						{removeUselessStrokeAndFill: true},
						{removeAttrs: {attrs: 'fill'}}
					]
				}}
			]
		},
		mode: {
			symbol: {
				dest: '',
				sprite: 'sprite.svg'
			},
			srcsprite: {
				mode: 'css',
				dest:  '../../src/styles/sprites',
				prefix: '.svg--%s',
				mixin: '',
				common: '',
				bust: false,
				render: {
					scss: true
				}
			},
			distsprite: {
				mode: 'css',
				dest:  '../../dist/styles',
				prefix: '.svg--%s',
				mixin: '',
				common: '',
				bust: false
			}
		},
		svg: {
			xmlDeclaration: false,
			doctypeDeclaration: false
		}
	}
};

// Browser Sync
gulp.task('serve', function() {
	browserSync.init(config.browserSync);
	gulp.watch(config.styles.src, ['sass']);
	gulp.watch(baseDir + '*.{html, .php}').on('change', browserSync.reload);
});


/**
 * Generate SVG sprite
 */
gulp.task('sprite', function () {
    return gulp.src(config.icons.src)
        .pipe(svgSprite(config.svgSprite))
        .pipe(gulp.dest(config.icons.dest));
});

// Minify SVG icons
gulp.task('svgmin', ['sprite'], function () {
    return gulp.src(config.icons.src)
        .pipe(svgmin())
        .pipe(gulp.dest(config.icons.dest + '/svg'));
});

// Images
gulp.task('images', function() {
	return gulp.src(config.img.src)
		.pipe(changed(config.img.dist))
        .pipe(imagemin(config.imagemin))
		.pipe(gulp.dest(config.img.dist));
});

// SASS
gulp.task('sass', function() {
	return gulp.src(config.styles.src)
		.pipe(sourcemaps.init())
		.pipe(sass(config.sass).on('error', sass.logError))
		.on("error", notify.onError({
			message: 'Error: <%= error.message %>'
		}))
		.pipe(autoprefixer(config.autoprefixer))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(config.styles.dist))
		.pipe(browserSync.stream({match: '**/*.css'}));
});

// Lint JavaScript

/* eslint quotes: [“error”, “double”], curly: 2 */
gulp.task('lint', function() {
    return gulp.src(config.scripts.src)
        .pipe(eslint({
            configFile: 'eslint.json'
        }))
        .pipe(eslint.format());
});

// Scripts
gulp.task('scripts', function() {
	return gulp.src(config.scripts.src)
		.pipe(concat('main.js'))
		.pipe(gulp.dest(config.scripts.dist))
		.pipe(rename({suffix: '.min'}))
		.pipe(uglify())
		.on('error', function() {
			this.emit('end');
		})
		.on('error', notify.onError({
			title: 'Error',
			message: 'Failed to compile JS',
		}))
		.pipe(gulp.dest(config.scripts.dist));
});

// Copy fonts directory
gulp.task('fonts', function() {
	gulp.src(config.fonts.src)
		.pipe(gulp.dest(config.fonts.dist));
});

// Watch files for changes
gulp.task('watch', function() {
	gulp.watch(config.img.src, ['images']);
	gulp.watch(config.fonts.src, ['fonts']);
	gulp.watch(config.icons.src, ['sprite', 'svgmin']);
	gulp.watch(config.scripts.src, ['scripts', 'lint']);
});

// Default Task
gulp.task('default', ['serve', 'watch', 'scripts', 'lint', 'images', 'fonts', 'sprite', 'svgmin']);
