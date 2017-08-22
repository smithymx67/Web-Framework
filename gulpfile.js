var gulp        = require('gulp');
var sass        = require('gulp-sass');
var cleanCSS    = require('gulp-clean-css');
var sourcemaps  = require('gulp-sourcemaps');
var rename      = require('gulp-rename');
var uglify      = require('gulp-uglify');
var imagemin    = require('gulp-imagemin');

// Create sourcemaps and minify the scss
gulp.task('styles', function() {
  gulp.src('src/styles/lib.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(rename({suffix : '.min'}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('build'));
});

// Copy HTML from src to build
gulp.task('html', function() {
  gulp.src('src/**/*.html')
    .pipe(gulp.dest('build'));
});

// Optimize images
gulp.task('images', function() {
  gulp.src('src/docSite/img/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('build'));
});

// Minify Javascript
gulp.task('scripts', function() {
  gulp.src('src/scripts/lib.js')
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(rename({suffix : '.min'}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('build'));
});

// Watch task
gulp.task('watch', function() {
  gulp.watch('src/styles/**/*.scss', ['styles']);
  gulp.watch('src/docSite/**/*.html', ['html']);
  gulp.watch('src/docSite/img/**/*', ['images']);
  gulp.watch('src/scripts/**/*.js', ['scripts']);
});

// Default task
gulp.task('default', function() {
  // Default tasks here
});