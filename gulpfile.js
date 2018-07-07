var gulp        = require('gulp');
var sass        = require('gulp-sass');
var cleanCSS    = require('gulp-clean-css');
var sourcemaps  = require('gulp-sourcemaps');
var rename      = require('gulp-rename');
var uglify      = require('gulp-uglify');
var imagemin    = require('gulp-imagemin');
var babel       = require('gulp-babel');
var header      = require('gulp-header-comment');
var concat      = require('gulp-concat');

var version = 'v1.3.1';

// Create sourcemaps and minify the scss
gulp.task('styles', function() {
  gulp.src('src/styles/bluePallet.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(rename({suffix : '-' + version + '.min'}))
    .pipe(header('Pallet [Blue] - CSS framework file ' + version + ' - Sam Smith (smithymx67) - License  MIT (https://github.com/smithymx67/Web-Framework/blob/master/LICENSE.txt)'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('build'));
});

// Copy HTML from src to build
gulp.task('html', function() {
  gulp.src('src/**/*.html')
    .pipe(gulp.dest('build'));
});

// Copy PHP from src to build
gulp.task('php', function() {
  gulp.src('src/docSite/**/*.php')
    .pipe(gulp.dest('build/docSite'));
});

// Optimize images
gulp.task('images', function() {
  gulp.src('src/docSite/images/**/*')
    //.pipe(imagemin())
    .pipe(gulp.dest('build/docSite/images'));
});

// Minify Javascript
gulp.task('scripts', function() {
  gulp.src('src/scripts/**/*.js')
    .pipe(sourcemaps.init())
    .pipe(babel({
			presets: ['env']
		}))
    .pipe(uglify())
    .pipe(concat('yellowPallet-' + version + '.min.js', {newLine: '\r\n'}))
    .pipe(header('Pallet [Yellow] - JS framework file ' + version + ' - Sam Smith (smithymx67) - License  MIT (https://github.com/smithymx67/Web-Framework/blob/master/LICENSE.txt)'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('build'));
});

// Watch task
gulp.task('watch', function() {
  gulp.watch('src/styles/**/*.scss', ['styles']);
  gulp.watch('src/docSite/**/*.html', ['html']);
  gulp.watch('src/docSite/**/*.php', ['php']);
  gulp.watch('src/docSite/images/**/*', ['images']);
  gulp.watch('src/scripts/**/*.js', ['scripts']);
});

// Build task
gulp.task( 'build', ['styles', 'html', 'php', 'images', 'scripts'] );

// Default task
gulp.task('default', function() {
  // Default tasks here
});
