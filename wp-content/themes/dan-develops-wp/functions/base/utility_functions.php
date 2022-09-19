<?php

/**
 * Add pretty print utility function
 */
if( !function_exists( 'print_r2' ) ) {
	function print_r2($val) {
		echo '<pre>';
		echo '<pre>' . print_r($val) . '</pre>';
		exit();
	}
}

/**
 * Make it easy to target types of user
 */
if( !function_exists( 'user_has_role' ) ) {

	function user_has_role( $roles, $user_id = null ) {

		$roles = is_array( $roles ) ? $roles : array( $roles );

		$user = is_numeric( $user_id ) ? get_userdata( $user_id ) : wp_get_current_user();

		if( empty( $user ) )
			return false;

		return !empty( array_intersect( $roles, $user->roles ) );
	}
}

/**
 * Check if WooCommerce is activated
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}