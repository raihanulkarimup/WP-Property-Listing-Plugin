<?php 
/*
Plugin Name: WP Property for sale
Plugin URI: https://github.com/raihanulkarimup/WP-Property-Listing-Plugin
Description: WP Property for sale Plugin
Version: 1.0.0
Author: Raihanul Karim
Author URI: https://github.com/raihanulkarimup
Text Domain: wpfs
*/

// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if

// Let's Initialize Everything
if ( file_exists( plugin_dir_path( __FILE__ ) . 'core-init.php' ) ) {
require_once( plugin_dir_path( __FILE__ ) . 'core-init.php' );
}
