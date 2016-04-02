# Sanmyaku: A theme for Vanilla Forums

[![Release](http://img.shields.io/github/release/codesequence/sanmyaku.svg)](https://github.com/codesequence/sanmyaku/releases) [![Dependency Status](https://gemnasium.com/CodeSequence/sanmyaku.svg)](https://gemnasium.com/CodeSequence/sanmyaku)

## Getting started

To get started using Sanmyaku for Vanilla, either:

* [__Download the latest release__](https://github.com/codesequence/sanmyaku/releases)
* Clone the repository directly into your Vanilla `themes` directory:

```sh
$ git clone https://github.com/CodeSequence/sanmyaku.git
```
## prerequisites
You will need to following tools globally installed to build this theme:

* node  ~v5.5.0
* npm   ~3.3.12
* bower ~1.4.1

## Compiling assets

Run `npm install` to get started.

#### Build - `gulp build`
Runs the default Gulp task which will compile all theme assets.
* JavaScripts will be concatenated and output to (js/custom.js).
* Sass stylesheets will be compiled to (design/custom.css).
* Sass theme-option stylesheets will be prefixed with `custom_` and compiled to (design/custom_themeoptionname.css).
* Images are optimized and placed in (app/images).
* Theme screenshots are optimized and place in (design/imagename.png).
* Icons are compiled to (app/icons).


#### Watch - `gulp`
Starts the build process and then uses browserync to watch and update the browser on changes.
To use the watch process you will need to update your (`gulp/config.js`) `projectUrl` to be the url used for development.

#### Theme Options
The theme comes pre-configured with a light and dark theme. Light will is the default and dark can be set under theme options in the admin panel.

#### Mobile Theme
Sanmyaku is built to be responsive to set this theme as your mobile theme you will need to manually edit the vanilla forums `conf/config.php`
Update or add `$Configuration['Garden']['MobileTheme'] = 'sanmyaku';`.

## [Issue tracking](https://github.com/codesequence/sanmyaku/issues)

If you come across any bugs or if you have a feature request, please file an issue using the GitHub Issue tracker. the Sanmyaku theme won't be supported through http://vanillaforums.org so please stick to using GitHub for inquiries about bugs and feature requests. Thanks!

[__File a new issue or feature request__](https://github.com/codesequence/sanmyaku/issues/new)

---
Copyright 2016 © [CodeSequence](https://github.com/codesequence). Licensed under the terms of the [MIT License](LICENSE.md)

Based on the original Foundation theme developed by [Kasper Kronborg Isager](http://kasperisager.github.io)

