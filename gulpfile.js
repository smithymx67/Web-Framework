var gulp        = require('gulp');
var sass        = require('gulp-sass');
var cleanCSS    = require('gulp-clean-css');
var sourcemaps  = require('gulp-sourcemaps');
var rename      = require('gulp-rename');
var uglify      = require('gulp-uglify');
var del         = require('del');
var babel       = require('gulp-babel');
var header      = require('gulp-header-comment');
var concat      = require('gulp-concat');

var version = 'v1.3.2';

// Create sourcemaps and minify the styles
gulp.task('styles', function() {
    return gulp.src('src/styles/bluePallet.scss')
      .pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(cleanCSS())
      .pipe(rename({suffix: '.min'}))
      .pipe(header('Pallet [Blue] - CSS framework file ' + version + ' - Sam Smith (smithymx67) - License  MIT (https://github.com/smithymx67/Web-Framework/blob/master/LICENSE.txt)'))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest('build/styles'));
  }
);

// Minify Javascript
gulp.task('scripts', function() {
    return gulp.src('src/scripts/**/*.js')
      .pipe(sourcemaps.init())
      .pipe(babel({
        presets: ['@babel/preset-env']
      }))
      .pipe(uglify())
      .pipe(concat('yellowPallet-' + version + '.min.js', {newLine: '\r\n'}))
      .pipe(header('Pallet [Yellow] - JS framework file ' + version + ' - Sam Smith (smithymx67) - License  MIT (https://github.com/smithymx67/Web-Framework/blob/master/LICENSE.txt)'))
      .pipe(rename({suffix: '.min'}))
      .pipe(sourcemaps.write('.'))
      .pipe(gulp.dest('build/scripts'));
  }
);

// Copy images
gulp.task('images', function() {
    return gulp.src('src/docSite/images/**/*')
      .pipe(gulp.dest('build/docSite/images'));
  }
);

// Copy PHP from src to build
gulp.task('php-docSite', function() {
    return gulp.src('src/docSite/**/*.php')
      .pipe(gulp.dest('build/docSite'));
  }
);

// Copy PHP from src to build
gulp.task('php-purplePallet', function() {
    return gulp.src('src/php/**/*.php')
      .pipe(gulp.dest('build/PurplePallet'));
  }
);

// Copy htaccess from src to build
gulp.task('htaccess', function () {
    return gulp.src('src/**/.htaccess')
      .pipe(gulp.dest('build'));
  }
);

// Delete all files in the build directory
gulp.task('clean', function() {
  return del(['build/**', '!build']);
});

// Watch task
gulp.task('watch', function() {
    gulp.watch('src/styles/bluePallet.scss', gulp.series('styles'));
    gulp.watch('src/scripts/**/*.js', gulp.series('scripts'));
    gulp.watch('src/docSite/images/**/*', gulp.series('images'));
    gulp.watch('src/docSite/**/*.php', gulp.series('php-docSite'));
    gulp.watch('src/php/**/*.php', gulp.series('php-purplePallet'));
    gulp.watch('src/**/.htaccess', gulp.series('htaccess'));
  }
);

// Build task
gulp.task('build', gulp.series([
  'clean',
  'styles',
  'scripts',
  'images',
  'php-docSite',
  'php-purplePallet',
  'htaccess'
]));

// Default task
gulp.task('default', gulp.series('build'));