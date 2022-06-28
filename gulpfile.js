let themeFolder = './';

let sassConf = {
	outputStyle: 'expanded',
	includePaths: [
	]
};

// utilities
const del = require('del');
const gulp = require("gulp");
const watch = require('gulp-watch');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

// bug fix gulp 4 does not update mtime on files need this to update files 
// manually for now. 
const touch = require('gulp-touch-cmd');

// styles
const sass = require('gulp-sass')(require('node-sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');

/* app
------------------------------------------------------------------------------*/

let app = {};

/* css
------------------------------------------------------------------------------*/
app.css = {};

// normal output with map
app.css.normal = function(){
	return gulp.src(themeFolder + 'src/styles/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({
		  includePaths: ['node_modules']
		},sassConf).on('error', sass.logError))
		.pipe(postcss([autoprefixer()]))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(themeFolder + 'dist/styles'))
		.pipe(touch());
};
app.css.normal.displayName = 'app:css:normal';

// min version of normal
app.css.min = function(){
	return gulp.src(themeFolder + 'src/styles/**/*.scss')
		.pipe(rename({suffix:'.min'}))
		.pipe(postcss([cssnano()]))
		.pipe(gulp.dest(themeFolder + 'dist/styles'))
		.pipe(touch());
};
app.css.min.displayName = 'app:css:min';

// all css tasks
app.css.all = gulp.series(app.css.normal, app.css.min);

/* exports
------------------------------------------------------------------------------*/

module.exports = {
	//app: app.all,
	css: app.css.all,
	/*js: app.js.all,
	watch: app.watch,
	clean: app.clean,
	default: app.all*/
};