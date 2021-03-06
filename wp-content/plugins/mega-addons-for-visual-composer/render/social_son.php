<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_social_vc_son extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'style' 	=> 		'default',
			'margin'	=>		'10px',
			'icon'		=>		'',
			'text'		=>		'icontext',
			'width'		=>		'40px',
			'height'	=>		'40px',
			'size'		=>		'20px',
			'radius'	=>		'',
			'url'		=>		'#0',
			'target'	=>		'',
			'clr'		=>		'',
			'bgclr'		=>		'',
			'hoverclr'	=>		'',
			'hoverbg'	=>		'',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content, true);
		wp_enqueue_style( 'social-icons-css', plugins_url( '../css/socialicons.css' , __FILE__ ));
		ob_start(); ?>
		<?php if ($style == 'default') { ?>
			<div id="mega-social-btn" style="margin: 0 <?php echo $margin; ?>;">
				<a href="<?php echo $url; ?>" target="<?php echo $target; ?>" style="font-size: <?php echo $size; ?>; border-radius: <?php echo $radius; ?>; color: <?php echo $clr; ?>; background: <?php echo $bgclr; ?>; width: <?php echo $width; ?>; height: <?php echo $height; ?>; line-height: <?php echo $height; ?>;" data-onhovercolor="<?php echo $hoverclr; ?>" data-onhoverbg="<?php echo $hoverbg; ?>" data-onleavebg="<?php echo $bgclr; ?>" data-onleavecolor="<?php echo $clr; ?>">
					<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
				</a>
			</div>
		<?php }

		if ($style == 'effect1') { ?>
			<!-- Mega Social Icons Style 1 -->
		    <div class="mega-social-icons" style="margin: 0 <?php echo $margin; ?>;">
				<a href="<?php echo $url ?>" target="<?php echo $target; ?>" class="icon-button" style="font-size: <?php echo $size; ?>; width: <?php echo $width ?>; height: <?php echo $width; ?>; line-height: <?php echo $width; ?>; border-radius: <?php echo $radius; ?>; background-color: <?php echo $bgclr; ?>;">
					<i class="<?php echo $icon; ?>" aria-hidden="true" style="color: <?php echo $clr ?>; width: <?php echo $width ?>; height: <?php echo $height; ?>; line-height: <?php echo $height; ?>;" data-onhovercolor="<?php echo $hoverclr; ?>" data-onleavecolor="<?php echo $clr; ?>"></i>
					<span style="border-radius: <?php echo $radius; ?>; background-color: <?php echo $hoverbg; ?>; width: <?php echo $width ?>; height: <?php echo $height; ?>;"></span>
				</a>
			</div>
		<?php }

		if ($style == 'effect2') { ?>
			<div class="mega-social-icons2" style="margin: 0 <?php echo $margin; ?>;">
				<a href="<?php echo $url ?>" target="<?php echo $target; ?>" class="icoRss" style="font-size: <?php echo $size; ?>; border-radius: <?php echo $radius; ?>; color: <?php echo $clr; ?>; background: <?php echo $bgclr; ?>; width: <?php echo $width; ?>; height: <?php echo $height; ?>; line-height: <?php echo $height; ?>;" data-onhovercolor="<?php echo $hoverclr; ?>" data-onhoverbg="<?php echo $hoverbg; ?>" data-onleavebg="<?php echo $bgclr; ?>" data-onleavecolor="<?php echo $clr; ?>">
					<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
				</a>
			</div>
		<?php }

		if ($style == 'effect3') { ?>
			<div id="mega-social-icons3" style="margin: 0 <?php echo $margin; ?>;">
				<div class="social-buttons">
					<a class="social-button" href="<?php echo $url ?>" target="<?php echo $target; ?>" style="font-size: <?php echo $size; ?>; color: <?php echo $clr; ?>; background: <?php echo $bgclr; ?>; width: <?php echo $width ?>; height: <?php echo $height; ?>; line-height: <?php echo $height-4; ?>px;" data-onhovercolor="<?php echo $hoverclr; ?>" data-onleavecolor="<?php echo $clr; ?>">
						<span style="background: <?php echo $hoverbg; ?>"></span>
						<i class="<?php echo $icon; ?>"></i>
					</a>
				</div>
			</div>
		<?php }

		if ($style == 'effect4') { ?>
			<a class="social-button" href="<?php echo $url ?>" target="<?php echo $target; ?>">			
				<div id="dualbtn" style="border-radius: <?php echo $radius; ?>; width: <?php echo $width ?>; font-size: <?php echo $size ?>; background: <?php echo $bgclr; ?>; margin: 0 <?php echo $margin; ?>;">
			    	<div class="btnicon" style="height: <?php echo $height-12; ?>px; line-height: <?php echo $height-12; ?>px;">
			    		<i class="<?php echo $icon; ?>" style="color: <?php echo $clr; ?>;"></i>
			    	</div>
			    	<div class="btntext" style="height: <?php echo $height-12; ?>px; line-height: <?php echo $height-12; ?>px;">
			    		<span style="color: <?php echo $clr; ?>;"><?php echo $text; ?></span>
			    	</div>
			    	<div class="clearfix"></div>
			    </div>
			</a>	
		<?php }

		if ($style == 'effect5') { ?>
			<div id="mega-social-btn" class="text-shadow" style="margin: 0 <?php echo $margin; ?>;">
				<a href="<?php echo $url; ?>" target="<?php echo $target; ?>" style="font-size: <?php echo $size; ?>; border-radius: <?php echo $radius; ?>; color: <?php echo $clr; ?>; background: <?php echo $bgclr; ?>; width: <?php echo $width; ?>; height: <?php echo $height; ?>; line-height: <?php echo $height; ?>;" data-onhovercolor="<?php echo $hoverclr; ?>" data-onhoverbg="<?php echo $hoverbg; ?>" data-onleavebg="<?php echo $bgclr; ?>" data-onleavecolor="<?php echo $clr; ?>">
					<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
				</a>
			</div>
		<?php }

		return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "social_vc_son",
	"name" 			=> __( 'Icon Setting', 'socialicon' ),
	"as_child" 		=> array('only' => 'social_vc_father'),
	"content_element" => true,
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('choose style', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/social.png',
	'params' => array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Social Effects', 'socialicon' ),
			"param_name" 	=> 	"style",
			"description" 	=> 	__( 'choose style', 'socialicon' ),
			"group" 		=> 'General',
			"value" 		=> 	array(
				"Defaul" 			=> 	"default",
				"Glow" 				=> 	"effect1",
				"Rotate X" 			=> 	"effect2",
				"Slide" 			=> 	"effect3",
				"Icon & Text" 		=> 	"effect4",
				"Shadow" 			=> 	"effect5",
			)
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Margin', 'socialicon' ),
			"param_name" 	=> 	"margin",
			"description" 	=> 	__( 'space between two social icons eg 10px', 'socialicon' ),
			"group" 		=> 'General',
			'value' 		=> __( "10px", 'socialicon' ),
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Width', 'socialicon' ),
			"param_name" 	=> 	"width",
			"description" 	=> 	__( 'social icon width in pixel', 'socialicon' ),
			"group" 		=> 'General',
			'value' 		=> __( "40px", 'socialicon' ),
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Height', 'socialicon' ),
			"param_name" 	=> 	"height",
			"description" 	=> 	__( 'social icon height in pixel', 'socialicon' ),
			"group" 		=> 'General',
			'value' 		=> __( "40px", 'socialicon' ),
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Social URL', 'socialicon' ),
			"param_name" 	=> 	"url",
			"description" 	=> 	__( 'write social url', 'socialicon' ),
			"group" 		=> 'General',
			'value' 		=> __( "#0", 'socialicon' ),
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Move to Next Tab', 'socialicon' ),
			"param_name" 	=> 	"target",
			"description" 	=> 	__( 'write _blank to open link in new tab', 'socialicon' ),
			"group" 		=> 'General',
		),
		array(
			"type" 			=> 	"iconpicker",
			"heading" 		=> 	__( 'Social Icon', 'socialicon' ),
			"param_name" 	=> 	"icon",
			"description" 	=> 	__( 'choose social icon', 'socialicon' ),
			"group" 		=> 'Font Icon',
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Icon Name', 'socialicon' ),
			"param_name" 	=> 	"text",
			"description" 	=> 	__( 'It will show with icon', 'socialicon' ),
			"dependency" => array('element' => "style", 'value' => 'effect4'),
			"group" 		=> 'Font Icon',
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font size', 'socialicon' ),
			"param_name" 	=> 	"size",
			"description" 	=> 	__( 'icon font size in pixel', 'socialicon' ),
			"group" 		=> 'Font Icon',
			'value' 		=> __( "20px", 'socialicon' ),
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Border Radius', 'socialicon' ),
			"param_name" 	=> 	"radius",
			"description" 	=> 	__( 'border radius from edges eg, 5px or 50%', 'socialicon' ),
			"group" 		=> 'Font Icon',
			'value' 		=> __( "0px", 'socialicon' ),
		),

		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Icon Color', 'socialicon' ),
			"param_name" 	=> 	"clr",
			"group" 		=> 'Color',
		),

		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Color', 'socialicon' ),
			"param_name" 	=> 	"bgclr",
			"group" 		=> 'Color',
		),

		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Hover Icon Color', 'socialicon' ),
			"param_name" 	=> 	"hoverclr",
			"group" 		=> 'Color',
		),

		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Hover Background Color', 'socialicon' ),
			"param_name" 	=> 	"hoverbg",
			"group" 		=> 'Color',
		),
	),
) );
