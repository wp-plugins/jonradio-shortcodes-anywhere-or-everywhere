<?php

/*	Exit if .php file accessed directly
*/
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

$settings = get_option( 'jr_saoe_settings' );
global $jr_saoe_filters;
foreach ( $jr_saoe_filters as $one_filter ) {
	if ( !isset( $one_filter['disabled'] ) ) {
		if ( $settings[ $one_filter['filter'] ] ) {
			if ( isset( $one_filter['functions'] ) ) {
				foreach ( $one_filter['functions'] as $function ) {
					add_filter( $one_filter['filter'], $function );
				}
			} else {
				add_filter( $one_filter['filter'], 'do_shortcode' );
			}
		}
	}
}

?>