<?php 
	/*
	 * Function that creates the sub-menu item and page for the mobile sticky location of the share buttons
	 *
	 * @return void
	 *
	 */
	function dpsp_register_mobile_subpage() {

		add_submenu_page( 'dpsp-social-pug', __('Mobile Sticky', 'social-pug'), __('Mobile Sticky', 'social-pug'), 'manage_options', 'dpsp-mobile', 'dpsp_mobile_subpage' );

	}
	add_action( 'admin_menu', 'dpsp_register_mobile_subpage', 20 );


	/*
	 * Function that adds content to the mobile sticky icons subpage
	 *
	 * @return string
	 *
	 */
	function dpsp_mobile_subpage() {

		include_once 'views/view-submenu-page-mobile.php';

	}


	function dpsp_mobile_register_settings() {

		register_setting( 'dpsp_location_mobile', 'dpsp_location_mobile', 'dpsp_mobile_settings_sanitize' );

	}
	add_action( 'admin_init', 'dpsp_mobile_register_settings' );


	/*
	 * Filter and sanitize settings
	 *
	 * @param array $new_settings
	 *
	 */
	function dpsp_mobile_settings_sanitize( $new_settings ) {

		// Save default values even if values do not exist
		if( !isset( $new_settings['networks'] ) )
			$new_settings['networks'] = array();
		
		if( !isset( $new_settings['button_style'] ) )
			$new_settings['button_style'] = 1;

		// Add default screen size to display the buttons
		if( empty( $new_settings['display']['screen_size'] ) )
			$new_settings['display']['screen_size'] = '720';

		// Remove "px", "pixels" or "pixel" if found
		$new_settings['display']['screen_size'] = str_replace( "px", '', $new_settings['display']['screen_size'] );
		$new_settings['display']['screen_size'] = str_replace( "pixels", '', $new_settings['display']['screen_size'] );
		$new_settings['display']['screen_size'] = str_replace( "pixel", '', $new_settings['display']['screen_size'] );
		$new_settings['display']['screen_size'] = trim( $new_settings['display']['screen_size'] );

		$new_settings = dpsp_array_strip_script_tags( $new_settings );

		return $new_settings;

	}