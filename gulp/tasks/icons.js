'use strict';

var config      = require('../config');
var changed     = require('gulp-changed');
var gulp        = require('gulp');
var gulpif      = require('gulp-if');
var browserSync = require('browser-sync');
var icons				= require('gulp-iconfont');

gulp.task('icons', function() {

  return gulp.src(config.icons.src)
    .pipe(icons({
      fontName: 'icons',
      formats: ['svg','woff','tff'],
      normalize: true
    }))
    .pipe(changed(config.icons.dest)) // Ignore unchanged files
    .pipe(gulp.dest(config.icons.dest))
    .pipe(gulpif(browserSync.active, browserSync.reload({ stream: true, once: true })));

});
