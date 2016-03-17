'use strict';

var config      = require('../config');
var changed     = require('gulp-changed');
var gulp        = require('gulp');
var gulpif      = require('gulp-if');
var concat      = require('gulp-concat');
var browserSync = require('browser-sync');

gulp.task('scripts', function() {

  return gulp.src(config.scripts.src)
    .pipe(changed(config.scripts.dest)) // Ignore unchanged files
    .pipe(concat('custom.js'))
    .pipe(gulp.dest(config.scripts.dest))
    .pipe(gulpif(browserSync.active, browserSync.reload({ stream: true, once: true })));

});