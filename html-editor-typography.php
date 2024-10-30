<?php
/*
Plugin Name: HTML Editor Type
Description: Improves the HTML editor with the lovely narrow monospaced M+ font.
Version: 1.0.2
Author: Matt Wiebe
Author URI: http://somadesign.ca/
*/

class SD_HTML_Editor_Type {

	public static function init() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'maybe_enqueue' ) );
	}

	public static function maybe_enqueue( $hook_suffix ) {
		// only post pages
		if ( ! in_array( $hook_suffix, array( 'post-new.php', 'post.php' ) ) ) {
			return;
		}

		wp_enqueue_style( 'sd-html-editor-type', plugins_url( 'css/admin.css', __FILE__ ), array(), '1.0.2' );
	}
}
add_action( 'admin_init', array( 'SD_HTML_Editor_Type', 'init' ) );