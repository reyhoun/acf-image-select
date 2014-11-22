<?php
/*
 * Plugin Name: Advanced Custom Fields: Image Select
 * Plugin URI: https://github.com/reyhoun/acf-image-select
 * Description: Image Select addon for Advanced Custom Fields.
 * Version: 0.1.0
 * Author: Reyhoun
 * Author URI: http://reyhoun.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/reyhoun/acf-typography
*/



// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-image_select', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_image_select( $version ) {
	
	include_once('acf-image_select-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_image_select');	




// 3. Include field type for ACF4
function register_fields_FIELD_NAME() {
	
	include_once('acf-image_select-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_image_select');	

?>