# WP Starter Theme with Sass + Webpack
This theme is a starter theme for WordPress that utilises modern development workflows and tools, like SASS, Webpack, Babel, Browsersync and a CSS framework (Foundation 6 for Sites, optional).

## <del>Install via WordPress</del> <small>(not yet published on WordPress Themes)</small>
1. <del>In your admin panel, go to `Appearance -> Themes` and click the `Add New` button</del>
2. <del>Type in `WP Starter Theme with Sass + Webpack` in the search form and press the `Enter` key on your keyboard</del>
3. <del>Click on the `Activate` button to use your new theme right away</del>

## Install via Github
1. In Terminal/CMD, from the WordPress Themes folder `/wp-content/themes/`, run `git clone https://github.com/dominicfallows/WP-Starter-Theme-Sass-Webpack.git`
2. In your admin panel, go to `Appearance -> Themes` click `Activate` on the `WP Starter Theme with Sass + Webpack` theme

## Developing with the theme
1. Make sure you have [Node + NPM](https://nodejs.org/en/download/) and [Yarn Package Manager](https://yarnpkg.com/lang/en/docs/install/) installed globally
2. Open the `src` folder of the theme in your terminal/console
3. Run `yarn install`
4. Update the `$dev_hostname` value in `header.php` to your local development hostname
5. Run `yarn start` - to start the Webpack development scripts
6. Edit files in `src` and WP PHP files in the theme, the browser will reload (with browser-sync) as you make changes

## Production build of the theme
`yarn start` from above creates uncompressed (un-minified) development versions of the CSS and JS files. Before pushing your files to a production environment you should create production ready versions. To do this: 

1. Run `yarn build`
2. Comment out the `wp_enqueue_script` and `wp_enqueue_style` function lines under the *Development styles and scripts* comment in `functions/enqueue.php`
3. Un-comment the `wp_enqueue_script` and `wp_enqueue_style` function lines under the *Production styles and scripts* lines in `functions/enqueue.php`
4. You can further compress the production assets by commenting out the un-required Foundation components in `src/scss/app.scss` and un-required Font-Awesome (or the whole library) in `src/scss/vendor/font-awesome/scss/font-awesome.scss`

## CSS Framework
This starter theme uses [Foundation 6 for Sites](http://foundation.zurb.com/sites). You can easily swap this for a framework of your choice, to do this update the following:

1. `// Import Foundation` lines in `src/js/app.js`
2. `// Foundation` line in `src/scss/app.scss`

## License
[MIT](https://opensource.org/licenses/MIT)

## Copyright
WP Starter Theme with Sass + Webpack, Copyright 2017 Dominic Fallows, 
Distributed under the terms of the MIT license