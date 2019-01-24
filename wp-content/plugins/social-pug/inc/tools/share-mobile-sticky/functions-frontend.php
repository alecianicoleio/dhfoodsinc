<?php

	// Check that the sidebar has been added only once
	global $dpsp_output_front_end_mobile_sticky;

	/*
	 * Function that displays the mobile sticky sharing buttons
	 *
	 */
	function dpsp_output_front_end_mobile_sticky() {

		if( ! dpsp_is_location_displayable( 'mobile' ) )
			return;

		// Check that the sidebar has been added only once
		global $dpsp_output_front_end_mobile_sticky;

		if( ! is_null( $dpsp_output_front_end_mobile_sticky ) )
			return;

		$dpsp_output_front_end_mobile_sticky = true;
		
		// Get saved settings
		$settings = get_option( 'dpsp_location_mobile', array() );

		// Classes for the wrapper
		$wrapper_classes = array();
		$wrapper_classes[] = 'dpsp-shape-rectangular';
		$wrapper_classes[] = ( isset( $settings['display']['column_count'] ) ? 'dpsp-column-' . $settings['display']['column_count'] : '' );
		$wrapper_classes[] = ( isset( $settings['display']['show_count'] ) ? 'dpsp-has-buttons-count' : '' );
		$wrapper_classes[] = ( empty( $settings['display']['show_after_scrolling'] ) ? 'opened' : '' );

		// Button styles
		$wrapper_classes[] = 'dpsp-button-style-1';

		// Set intro animation
		$wrapper_classes[] = ( !empty( $settings['display']['intro_animation'] ) && $settings['display']['intro_animation'] != '-1' ? 'dpsp-animation-' . esc_attr( $settings['display']['intro_animation'] ) : 'dpsp-no-animation' );

		$wrapper_classes = implode(' ', $wrapper_classes);

		// Set trigger extra data
		$trigger_data   = array();
		$trigger_data[] = 'data-trigger-scroll="' . ( isset( $settings['display']['show_after_scrolling'] ) ? ( !empty( $settings['display']['scroll_distance'] ) ? (int)str_replace( '%', '', trim( $settings['display']['scroll_distance'] ) ) : 0 ) : 'false' ) . '"';
		$trigger_data   = implode( ' ', array_filter( $trigger_data ) );

		$output = '<div id="dpsp-mobile-sticky" class="' . $wrapper_classes . '" ' . $trigger_data . '>';

			// Gets the social networks buttons
			if( isset( $settings['networks'] ) )
				$output .= dpsp_get_output_network_buttons( $settings, 'share', 'mobile' );


		$output .= '</div>';

		// Echo the final output
		echo apply_filters( 'dpsp_output_front_end_mobile_sticky', $output );

	}
	add_action( 'wp_footer', 'dpsp_output_front_end_mobile_sticky' );