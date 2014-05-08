<?php
/*
Plugin Name: Remove CSS link IDs
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: remove-css-ids
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