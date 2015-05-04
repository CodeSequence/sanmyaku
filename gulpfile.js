var gulp = require('gulp')
  , gutil = require('gulp-util')
  , sass = require('gulp-sass')
  , concat = require('gulp-concat')
  , uglify = require('gulp-uglify')
  , livereload = require('gulp-livereload');

gulp.task('sass', function () {
  gulp.src(['scss/**/*.scss', '!scss/**/_*.scss'])
    .pipe(sass({
      includePaths: ['bower_components/foundation/scss']
    })
      .on('error', gutil.log))
    .pipe(gulp.dest('design'))
    .pipe(livereload());
});

gulp.task('watch', function () {
  gulp.watch('scss/**/*.scss', ['sass']);
});

gulp.task('scripts', function () {
  gulp.src([
    'bower_components/foundation/js/foundation/foundation.js'
  , 'bower_components/foundation/js/foundation/foundation.dropdown.js'
  , 'bower_components/foundation/js/foundation/foundation.topbar.js'
  ])
    .pipe(uglify())
    .pipe(concat('custom.js'))
    .pipe(gulp.dest('js'));
});

gulp.task('default', ['sass', 'scripts']);
