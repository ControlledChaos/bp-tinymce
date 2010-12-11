<?
/*
Plugin Name: BP-TinyMCE
Plugin URI: http://teleogistic.net
Description: Puts TinyMCE on BP pages
Version: 0.3
Requires at least: BP 1.1
Author: Boone Gorges
Author URI: http://teleogistic.net
Network: true
*/

function bptmce_loader() {
	require_once( dirname(__FILE__) . '/bp-tinymce.php' );
}
add_action( 'bp_loaded', 'bptmce_loader' );

?>