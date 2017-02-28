<?php
/*
Plugin Name: Secure Login Messages
Description: Prevents specific login error messages to be displayed when a user enters an incorrect username, password or email address.
Version: 1.0.0
Author: UCF Web Communications
License: GPL3
*/
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! function_exists( 'sln_init' ) ) {
	function sln_init() {
		require_once 'includes/sln-common.php';
	}

	add_action( 'plugins_loaded', 'sln_init' );
}

?>
