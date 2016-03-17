'use strict';

var config      = require('../config');
var changed     = require('gulp-changed');
var gulp        = require('gulp');
var gulpif      = require('gulp-if');
var imagemin    = require('gulp-imagemin');
var browserSync = require('browser-sync');

gulp.task('screenshots', function() {

  return gulp.src(config.images.ssSrc)
    .pipe(changed(config.images.ssDest)) // Ignore unchanged files
    .pipe(gulpif(global.isProd, imagemin())) // Optimize
    .pipe(gulp.dest(config.images.ssDest))
    .pipe(gulpif(browserSync.active, browserSync.reload({ stream: true, once: true })));

});