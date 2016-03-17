'use strict';

module.exports = {

  // Change the default gulp run-sequence for development or distrobution
  // OPTIONS: dev, prod
  'defaultgulp'   : 'dev',

  // Change where browsersync points (this is your homestead url for the project)
  'projectUrl'    : 'forum.app',

  // Change the console message
  'projectName'   : 'AGS-Universal Vanilla-Theme',


  'cssFileName'   : 'custom.css',
  'cssPrefix'     : 'custom_',

  'browserport'  : 3000,
  'uiport'       : 3001,
  'serverport'   : 3002,

  'styles': {
    'src' : [
      'app/scss/**/*.scss',
      '!app/scss/foundation/*.scss'
    ],
    'dest': 'design',
    'fndnSrc': 'app/vendor/bower_components/foundation/scss/**/*',
    'fndnDest': 'app/scss/foundation'
  },

  'scripts': {
    'src' : [
      'app/vendor/bower_components/foundation/js/foundation.min.js',
      'app/js/app.js'
    ],
    'dest': 'js'
  },

  'images': {
    'src'     : 'app/images/**/*',
    'dest'    : 'design/images',
    'ssSrc'   : 'app/screenshots/**/*',
    'ssDest'  : 'design',
    'iconSrc' : 'app/icons/**/*',
    'iconDest': 'design/images/icons'
  },

  'icons': {
    'src' : ['app/icons/**/*'],
    'dest': 'design/icons/'
  },

  'data': {
    'src' : ['app/data/**/*'],
    'dest': 'build/data'
  },

  'views': {
    'watch': [
      'views/**/*.html',
      'views/**/*.tpl'
    ],
    'src': 'app/views/**/*.html',
    'dest': 'app/templates'
  },

  'gzip': {
    'src': 'build/**/*.{html,xml,json,css,js,js.map}',
    'dest': 'build/',
    'options': {}
  },

  'dist': {
    'root'  : 'design'
  },

  'browserify': {
    'entries'   : ['./app/main.js', './app/vendor.js'],
    'bundleNames': ['main.js', 'vendor.js'],
    'sourcemap' : true
  }

};
