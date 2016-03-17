'use strict';

var gulp        = require('gulp');
var runSequence = require('run-sequence');

gulp.task('build', ['clean'], function(cb) {

  global.isProd = false;

  runSequence(['scripts'],['styles', 'images', 'screenshots', 'iconsfull', 'icons'], cb);

});