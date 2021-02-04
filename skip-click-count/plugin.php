<?php
/*
Plugin Name: Skip Click Count
Plugin URI: https://github.com/YOURLS/YOURLS/issues/2829
Description: A swtich to stop click count function
Version: 1.0
Author: Titan
Author URI: https://github.com/YOURLS/YOURLS/issues/2829
*/

yourls_add_filter( 'shunt_update_clicks', 'skip_click_count' );

function skip_click_count( $value ) {
	return true;
}
