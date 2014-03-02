# Foundation for Vanilla

[![GitHub version](https://badge.fury.io/gh/kasperisager%2Fvanilla-foundation.png)](http://badge.fury.io/gh/kasperisager%2Fvanilla-foundation) [![Dependency Status](https://gemnasium.com/kasperisager/vanilla-foundation.png)](https://gemnasium.com/kasperisager/vanilla-foundation)

## Getting started

To get started using Foundation for Vanilla, either:

* [__Download the latest release__](https://github.com/kasperisager/vanilla-foundation/releases)
* Clone the repository directly into your Vanilla `themes` directory:

```sh
$ git clone kasperisager/vanilla-foundation foundation
```

## Compiling assets

Foundation for Vanilla was scaffolded using [Ninja](https://github.com/kasperisager/vanilla-ninja). For instructions on how to install the development dependencies and front-end components, please refer to the [Ninja documentation](https://github.com/kasperisager/vanilla-ninja#getting-started). Once you've got everything set up, use the following tasks to re-compile the theme assets:

#### Build - `gulp`
Runs the default Gulp task which will compile all theme assets. Sass stylesheets will be compiled to [`design/style.css`](design/style.css) and Javascripts will be concatenated and output to [`js/custom.js`](js/custom.js).

#### Watch - `gulp watch`
Starts an instance of [tiny-lr](https://github.com/mklabs/tiny-lr) (a tiny LiveReload server) that watches the compiled assets for changes and pushes these to your Vanilla installation automatically whenever they change.

## [Issue tracking](https://github.com/kasperisager/vanilla-foundation/issues)

If you come across any bugs or if you have a feature request, please file an issue using the GitHub Issue tracker. Foundation for Vanilla won't be supported through http://vanillaforums.org so please stick to using GitHub for inquiries about bugs and feature requests. Thanks!

[__File a new issue or feature request__](https://github.com/kasperisager/vanilla-foundation/issues/new)

---

Copyright 2014 © [Kasper Kronborg Isager](http://kasperisager.github.io). Licensed under the terms of the [MIT License](LICENSE.md)
