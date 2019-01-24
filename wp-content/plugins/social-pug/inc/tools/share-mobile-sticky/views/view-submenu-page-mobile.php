<?php dpsp_admin_header(); ?>

<form method="post" action="options.php">
	<div class="dpsp-page-wrapper dpsp-page-mobile wrap">

		<?php
		 	$dpsp_location_mobile = get_option( 'dpsp_location_mobile', 'not_set' );
			settings_fields( 'dpsp_location_mobile' );
		?>


		<!-- Page Title -->
		<h1 class="dpsp-page-title">
			<?php _e('Configure Mobile Sharing Buttons', 'social-pug'); ?>

			<input type="hidden" name="dpsp_buttons_location" value="dpsp_location_mobile" />
			<input type="hidden" name="dpsp_location_mobile[active]" value="<?php echo ( isset( $dpsp_location_mobile["active"] ) ? 1 : '' ); ?>" <?php echo ( !isset( $dpsp_location_mobile["active"] ) ? 'disabled' : '' ); ?> />
		</h1>


		<!-- Networks Selectable and Sortable Panels -->
		<div id="dpsp-social-platforms-wrapper" class="dpsp-section">
			<h3 class="dpsp-section-title"><?php _e( 'Social Networks', 'social-pug' ); ?><a id="dpsp-select-networks" class="add-new-h2" href="#">Select networks</a></h3>

			<?php 
				$available_networks = dpsp_get_networks();
				echo dpsp_output_selectable_networks( $available_networks, ( ! empty( $dpsp_location_mobile['networks'] ) ? $dpsp_location_mobile['networks'] : array() ) ); 
			?>

			<div id="dpsp-sortable-networks-empty" <?php echo ( empty( $dpsp_location_mobile['networks'] ) ? 'class="active" style="display: block;"' : 'style="display: none;"' ); ?>>
				<p><?php _e( 'Select which social networks to display', 'social-pug' ); ?></p>
			</div>

			<?php echo dpsp_output_sortable_networks( ( ! empty( $dpsp_location_mobile['networks'] ) ? $dpsp_location_mobile['networks'] : array() ), 'dpsp_location_mobile' ); ?>

		</div>


		<!-- General Display Settings -->
		<div class="dpsp-section">
			<h3 class="dpsp-section-title"><?php _e( 'Display Settings', 'social-pug' ); ?></h3>

			<?php dpsp_settings_field( 'text', 'dpsp_location_mobile[display][screen_size]', ( isset( $dpsp_location_mobile['display']['screen_size']) ? $dpsp_location_mobile['display']['screen_size'] : '' ), __( 'Mobile screen width (pixels)', 'social-pug' ), '', __( 'For screen widths smaller than this value ( in pixels ) the Mobile Sticky will be displayed on screen.', 'social-pug' ) ); ?>

			<?php dpsp_settings_field( 'select', 'dpsp_location_mobile[display][column_count]', ( isset($dpsp_location_mobile['display']['column_count']) ? $dpsp_location_mobile['display']['column_count'] : '' ), __( 'Number of columns', 'social-pug' ), array( '1' => __( '1 column', 'social-pug' ), '2' => __( '2 columns', 'social-pug' ), '3' => __( '3 columns', 'social-pug' ), '4' => __( '4 columns', 'social-pug' ), '5' => __( '5 columns', 'social-pug' ), '6' => __( '6 columns', 'social-pug' ) ) ); ?>

			<?php dpsp_settings_field( 'select', 'dpsp_location_mobile[display][intro_animation]', ( isset( $dpsp_location_mobile['display']['intro_animation']) ? $dpsp_location_mobile['display']['intro_animation'] : '' ), __( 'Intro Animation', 'social-pug' ), array( '-1' => __( 'No Animation', 'social-pug' ), '1' => __( 'Fade In', 'social-pug' ), '2' => __( 'Slide In', 'social-pug' ) ) ); ?>

			<?php dpsp_settings_field( 'checkbox', 'dpsp_location_mobile[display][show_after_scrolling]', ( isset( $dpsp_location_mobile['display']['show_after_scrolling']) ? $dpsp_location_mobile['display']['show_after_scrolling'] : '' ), __( 'Show after user scrolls', 'social-pug' ), array('yes') ); ?>

			<?php dpsp_settings_field( 'text', 'dpsp_location_mobile[display][scroll_distance]', ( isset( $dpsp_location_mobile['display']['scroll_distance']) ? $dpsp_location_mobile['display']['scroll_distance'] : '' ), __( 'Scroll distance (%)', 'social-pug' ), '30', __( 'The distance in percentage (%) of the total page height the user has to scroll before the buttons will appear.', 'social-pug' ) ); ?>

		</div>


		<!-- Share Counts -->
		<div class="dpsp-section">
			<h3 class="dpsp-section-title"><?php _e( 'Buttons Share Counts', 'social-pug' ); ?></h3>

			<?php dpsp_settings_field( 'checkbox', 'dpsp_location_mobile[display][show_count]', ( isset( $dpsp_location_mobile['display']['show_count']) ? $dpsp_location_mobile['display']['show_count'] : '' ), __( 'Show share count', 'social-pug' ), array('yes'), __( 'Display the share count for each social network.', 'social-pug' ) ); ?>

			<?php dpsp_settings_field( 'checkbox', 'dpsp_location_mobile[display][count_round]', ( isset( $dpsp_location_mobile['display']['count_round']) ? $dpsp_location_mobile['display']['count_round'] : '' ), __( 'Share count round', 'social-pug' ), array('yes'), __( 'If the share count for each network is bigger than 1000 it will be rounded to one decimal ( eg. 1267 will show as 1.2k ).', 'social-pug' ) ); ?>

			<?php dpsp_settings_field( 'text', 'dpsp_location_mobile[display][minimum_count]', ( isset( $dpsp_location_mobile['display']['minimum_count']) ? $dpsp_location_mobile['display']['minimum_count'] : '' ), __( 'Minimum share count', 'social-pug' ), '', __( 'Display share counts only if the total share count is higher than this value.', 'social-pug' ) ); ?>

		</div>


		<!-- Custom Colors Settings -->
		<div class="dpsp-section">
			<h3 class="dpsp-section-title"><?php _e( 'Buttons Custom Colors', 'social-pug' ); ?></h3>

			<?php dpsp_settings_field( 'color-picker', 'dpsp_location_mobile[display][custom_color]', ( isset( $dpsp_location_mobile['display']['custom_color']) ? $dpsp_location_mobile['display']['custom_color'] : '' ), __( 'Buttons color', 'social-pug' ), '' ); ?>
			<?php dpsp_settings_field( 'color-picker', 'dpsp_location_mobile[display][custom_hover_color]', ( isset( $dpsp_location_mobile['display']['custom_hover_color']) ? $dpsp_location_mobile['display']['custom_hover_color'] : '' ), __( 'Buttons hover color', 'social-pug' ), '' ); ?>

		</div>
		

		<!-- Post Type Display Settings -->
		<div class="dpsp-section">
			<h3 class="dpsp-section-title"><?php _e( 'Post Type Display Settings', 'social-pug' ); ?></h3>

			<?php dpsp_settings_field( 'checkbox', 'dpsp_location_mobile[post_type_display][]', ( isset( $dpsp_location_mobile['post_type_display']) ? $dpsp_location_mobile['post_type_display'] : array() ), '', dpsp_get_post_types() ); ?>
		</div>


		<!-- Save Changes Button -->
		<input type="hidden" name="action" value="update" />
		<p class="submit"><input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>

	</div>
</form>