[![Build Status](https://travis-ci.org/primozcigler/remove-css-ids.svg?branch=master)](https://travis-ci.org/primozcigler/remove-css-ids)

WP plugin that removes the ID attributes from the <link> tags for the CSS files. Used mostly together with mod_pagespeed.

## Description

#### [Link to WordPress.org site of the plugin](http://wordpress.org/plugins/remove-css-link-ids/).

This simple plugin hooks to the `wp_enqueue_scripts` and removed the `id='<handle of the css file>-css'` attribute. Most of the time you don't need these IDs anyway.

I am using the [mod_pagespeed](https://developers.google.com/speed/pagespeed/module) module on my server and the `combine_css` filter doesn't work if the `<link>` tags have ID attributes. So based on [this blog post](https://blog.codecentric.de/en/2011/10/wordpress-and-mod_pagespeed-why-combine_css-does-not-work/) I created a very very simple (basically one-liner) plugin that removes the ID attribute using regex.

There is also a very simple unit test for it, created using wp-cli: `wp scaffod plugin ...`.

Enjoy the speedy sites! :)

## Installation

1. Unzip `remove-css-link-ids.zip` and upload unzipped folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

## Issues / suggestions

Please fork this repository, make the changes and create a pull request.