'use strict';

var config        = require('../config');
var gulp          = require('gulp');
var browserSync   = require('browser-sync');
var reload        = browserSync.reload;

gulp.task('watch', ['browserSync'], function() {

  // Scripts are automatically watched and rebundled by Watchify inside Browserify task
  gulp.watch(config.styles.src,  	['styles']);
  gulp.watch(config.images.src,  	['images']);
  gulp.watch(config.icons.src,   	['icons']);
  gulp.watch(config.views.watch).on("change", reload);
  gulp.watch(config.scripts.src, 	['scripts']);

});