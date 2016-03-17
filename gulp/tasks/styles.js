'use strict';

var config        = require('../config');
var gulp          = require('gulp');
var sass          = require('gulp-sass');
var gulpif        = require('gulp-if');
var handleErrors  = require('../util/handleErrors');
var browserSync   = require('browser-sync');
var autoprefixer  = require('gulp-autoprefixer');
var sourceMaps    = require('gulp-sourcemaps');
var rename        = require('gulp-rename');

var condition     = config.cssFileName;

gulp.task('styles', function () {

  return gulp.src(config.styles.src)
  	.pipe(sourceMaps.init())
    .pipe(sass({
      sourceComments: global.isProd ? 'none' : 'map',
      sourceMap: 'sass',
      outputStyle: global.isProd ? 'compressed' : 'nested'
    }).on('error', handleErrors))
    .pipe(sourceMaps.write())
    .pipe(autoprefixer("last 2 versions", "> 1%", "ie 8"))
    .pipe(gulpif(condition, rename(condition), rename({dirname: '/', prefix: config.cssPrefix}))) // renmame files w/ custom_ prefix
    .pipe(gulp.dest(config.styles.dest))
    .pipe(gulpif(browserSync.active, browserSync.reload({ stream: true })));

});