# Foundation for Vanilla

[![Release](http://img.shields.io/github/release/codesequence/vanilla-foundation.svg)](https://github.com/codesequence/vanilla-foundation/releases) [![Dependency Status](https://gemnasium.com/valeryan/vanilla-foundation.svg)](https://gemnasium.com/valeryan/vanilla-foundation)

## Getting started

To get started using Foundation for Vanilla, either:

* [__Download the latest release__](https://github.com/codesequence/vanilla-foundation/releases)
* Clone the repository directly into your Vanilla `themes` directory:

```sh
$ git clone codesequence/vanilla-foundation foundation
```

## Compiling assets

Run `npm install` to get started.

#### Build - `gulp build`
Runs the default Gulp task which will compile all theme assets.
* Javascripts will be concatenated and output to (js/custom.js).
* Sass stylesheets will be compiled to (design/custom.css).
*Sass theme-option stylesheets will be prefixed with `custom_` and compiled to (design/custom_themeoptionname.css).
* Images are optimized and placed in (app/images).
* Theme screenshots are optimized and place in (design/imagename.png).
* Icons are compiled to (app/icons).


#### Watch - `gulp`
Starts the build process and then uses browserync to watch and update the browser on changes.
To use the watch process you will need to update your (`gulp/config.js`) `projectUrl` to be the url used by homestead to access the vanilla instance.

#### Theme Options
The actual theme is contained in theme options that must be set through the admin dashboard.

## [Issue tracking](https://github.com/codesequence/vanilla-foundation/issues)

If you come across any bugs or if you have a feature request, please file an issue using the GitHub Issue tracker. Foundation for Vanilla won't be supported through http://vanillaforums.org so please stick to using GitHub for inquiries about bugs and feature requests. Thanks!

[__File a new issue or feature request__](https://github.com/codesequence/vanilla-foundation/issues/new)

---
Copyright 2014 © [CodeSequence](https://github.com/codesequence). Licensed under the terms of the [MIT License](LICENSE.md)
Original developed by [Kasper Kronborg Isager](http://kasperisager.github.io)

