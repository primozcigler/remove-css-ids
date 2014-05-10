<?php
/*
Plugin Name: Remove CSS link IDs
Version: 1.0.1
Description: WP plugin that removes the ID attributes from the <link> tags for the CSS files. Used mostly together with mod_pagespeed.
Author: Primoz Cigler
Author URI: http://twitter.com/primozcigler
Plugin URI: http://www.proteusnet.com/blog
License: GPL v2
*/

/**
 * Filter added to remove the ID with the
 *
 * @see https://blog.codecentric.de/en/2011/10/wordpress-and-mod_pagespeed-why-combine_css-does-not-work/
 */

function remove_style_tag_id( $link ) {
	return preg_replace( "/\sid=('|\").+?('|\")/", '', $link );
}
add_filter( 'style_loader_tag', 'remove_style_tag_id' );