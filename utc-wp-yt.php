<?php
/**
* Plugin Name: UTC WP YouTube filter
* Plugin URI: https://github.com/UTCWeb/utc-wp-yt
* Description: Custom WP plugin to limit YouTube embed video recommendations, branding & controls
* Version: 1.0
* Author: Bridget Hornsby
* Author URI: http://www.utc.edu/
**/


add_filter( 'embed_oembed_html', function( $cache, $url, $attr, $post_ID ) {
	
	// Modify youtube params
	if ( strstr( $cache, 'youtube.com/embed/' ) ) {
		$cache = str_replace( '?feature=oembed', '?rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0', $cache );
	}
	
	// Return oEmbed html
	return $cache;

}, 10, 4 );


?>
