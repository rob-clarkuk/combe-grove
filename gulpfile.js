let themeFolder = './';

let sassConf = {
	outputStyle: 'expanded',
	includePaths: [
	]
};

const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass')(require('node-sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const minifyCSS = require('gulp-minify-css');
const autoprefixer = require('autoprefixer');

// utilities
const watch = require('gulp-watch');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

// bug fix gulp 4 does not update mtime on files need this to update files 
// manually for now. 
const touch = require('gulp-touch-cmd');

// scripts
const webpack = require('webpack')
const webpackConfig = require('./webpack.common.js')

/* app
------------------------------------------------------------------------------*/

let app = {};

/* js
------------------------------------------------------------------------------*/

/* js
------------------------------------------------------------------------------*/
app.js = {}

app.js.main = function () {
  return new Promise((resolve, reject) => {
    webpack(webpackConfig, (err, stats) => {
      if (err) {
        return reject(err)
      }
      if (stats.hasErrors()) {
        return reject(new Error(stats.compilation.errors.join('\n')))
      }
      resolve()
    })
  })
}
app.js.main.displayName = 'app:js:main'

app.js.all = gulp.series(gulp.parallel(app.js.main))

/* css
------------------------------------------------------------------------------*/
app.css = {};

// normal output with map
app.css.normal = function(){
	return gulp.src(themeFolder + 'src/styles/main.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({
		  includePaths: ['node_modules']
		},sassConf).on('error', sass.logError))
		.pipe(postcss([autoprefixer()]))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(themeFolder + 'dist/styles/'))
		.pipe(touch());
};
app.css.normal.displayName = 'app:css:normal';

// min version of normal
app.css.min = function(){
	return gulp.src(themeFolder + 'src/styles/main.scss')
		.pipe(sass({
		  includePaths: ['node_modules']
		},sassConf).on('error', sass.logError))
		.pipe(postcss([cssnano()]))
		.pipe(concat('main.min.css'))
		.pipe(gulp.dest(themeFolder + 'dist/styles/'))
		.pipe(touch());
};
app.css.min.displayName = 'app:css:min';

// all css tasks
app.css.all = gulp.series(app.css.normal, app.css.min);

// watch
app.watch = function(){
	gulp.watch(themeFolder + 'src/styles/**/*.scss', app.css.all);
	gulp.watch(themeFolder + 'src/scripts/**/*.js', app.js.all);
};
app.watch.displayName = 'app:watch';

app.all = gulp.series(gulp.parallel(app.watch));

/* exports
------------------------------------------------------------------------------*/

module.exports = {
	app: app.all,
	js: app.js.all,
	css: app.css.all,
	watch: app.watch,
	default: app.all
};