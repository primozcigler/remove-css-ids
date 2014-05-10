=== Plugin Name ===
Contributors: cyman
Tags: enqueue, css, attributes, id, mod_pagespeed, pagespeed, link
Requires at least: 3.8
Tested up to: 3.9
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP plugin that removes the ID attributes from the <link> tags for the CSS files. Used mostly together with mod_pagespeed.

== Description ==

This simple plugin hooks to the `wp_enqueue_scripts` and removed the `id='<handle of the css file>-css'` attribute. Most of the time you don't need these IDs anyway.

I am using the [mod_pagespeed](https://developers.google.com/speed/pagespeed/module) module on my server and the `combine_css` filter doesn't work if the `<link>` tags have ID attributes. So based on [this blog post](https://blog.codecentric.de/en/2011/10/wordpress-and-mod_pagespeed-why-combine_css-does-not-work/) I created a very very simple (basically one-liner) plugin that removes the ID attribute using regex.

There is also a very simple unit test for it, created using wp-cli: `wp scaffod plugin ...`.

Enjoy the speedy sites! :)

== Installation ==

1. Unzip `remove-css-link-ids.zip` and upload unzipped folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= A question that someone might have? =

No questions asked yet.

== Changelog ==

= 1.0.0 =
* First release

== Upgrade Notice ==