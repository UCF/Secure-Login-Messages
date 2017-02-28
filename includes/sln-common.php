<?php
if ( ! function_exists( 'slm_prevent_login_messages' ) ) {
	/**
	 * Removes the error message inficating invalid username, email and password.
	 * @param $objUser WP_User|WP_Error
	 * @return WP_Error|WP_User|null
	 **/
	function sln_prevent_login_messages( $objUser ) {
		if ( is_wp_error( $objUser ) ) {
			if (
				   isset( $objUser->errors['incorrect_password'] )
				|| isset( $objUser->errors['invalid_username'] )
				|| isset( $objUser->errors['invalid_email'] )
			) {
				$objUser = null;
			}
		}

		return $objUser;
	}

	add_filter( 'authenticate', 'sln_prevent_login_messages', 99, 1 );
}
?>
