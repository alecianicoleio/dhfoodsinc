<?php

	/**
	 * Add the share mobile sticky tool to the toolkit array
	 *
	 * @param array $tools
	 * 
	 * @return array
	 *
	 */
	function dpsp_tool_share_mobile_sticky( $tools = array() ) {

		$tools['share_mobile'] = array(
			'name' 		 		 => __( 'Mobile Sticky', 'social-pug' ),
			'type'				 => 'share_tool',
			'activation_setting' => 'dpsp_location_mobile[active]',
			'img'		 		 => 'assets/img/tool-mobile.png',
			'admin_page' 		 => 'admin.php?page=dpsp-mobile'
		);

		return $tools;

	}
	add_filter( 'dpsp_get_tools', 'dpsp_tool_share_mobile_sticky', 20 );


	/**
	 * Include files for this tool
	 *
	 */
	function dpsp_tool_share_mobile_sticky_include_files() {

		if( ! dpsp_is_tool_active( 'share_mobile' ) )
			return;

		if( file_exists( DPSP_PLUGIN_DIR . '/inc/tools/share-mobile-sticky/submenu-page-mobile.php' ) )
			include( DPSP_PLUGIN_DIR . '/inc/tools/share-mobile-sticky/submenu-page-mobile.php' );

		if( file_exists( DPSP_PLUGIN_DIR . '/inc/tools/share-mobile-sticky/functions-frontend.php' ) )
			include( DPSP_PLUGIN_DIR . '/inc/tools/share-mobile-sticky/functions-frontend.php' );

	}
	add_action( 'init', 'dpsp_tool_share_mobile_sticky_include_files' );