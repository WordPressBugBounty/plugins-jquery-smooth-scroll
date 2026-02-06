<?php
/**
 * Uninstall Plugin
 *
 * @package Jamify_Jquery_Smooth_Scroll
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Delete options.
delete_option( 'jamify_jquery_smooth_scroll_image' );
delete_option( 'jss_scroll_to_top_image' ); // Clean up old option if it exists.
