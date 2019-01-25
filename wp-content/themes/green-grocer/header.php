<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

		<?php // icons & favicons ?>

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/library/images/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/safari-pinned-tab.svg" color="#3e8d6b">
		<meta name="msapplication-TileColor" content="#3e8d6b">
		<meta name="theme-color" content="#ffffff">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header Fixed" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="" class="cf top-nav">
					<div class="wrap">
						<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						<?php // if you'd like to use the site description you can un-comment it below ?>
						<?php // bloginfo('description'); ?>
						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
								'container' => false,                           // remove nav container
								'container_class' => 'menu cf',                 // class of container (should you choose to use it)
								'menu' => __( 'Constant Navigation', 'bonestheme' ),  // nav name
								'menu_class' => 'nav constant-nav cf',               // adding custom nav class
								'theme_location' => 'constant-nav',                 // where it's located in the theme
								'before' => '',                                 // before the menu
								'after' => '',                                  // after the menu
								'link_before' => '<span class="soc-icon"></span><span class="link-txt">',                            // before each link
								'link_after' => '</span>',                             // after each link
								'depth' => 0,                                   // limit the depth of the nav
								'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
						</nav>
					</div>
				</div>

				<div class="cf bottom-nav">
					<div class="wrap">
						<div class="menu-button"><span class="fa fa-bars"></span><span hidden>Menu</span></div>
						<div id="logo" class="brand-logo" itemscope itemtype="http://schema.org/Organization">
							<a href="<?php echo home_url(); ?>" rel="nofollow">
								<span hidden><?php bloginfo('name'); ?></span>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/dhf-logo.png">
							</a>
						</div>
						<nav class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
								'container' => false,                           // remove nav container
								'container_class' => 'menu cf',                 // class of container (should you choose to use it)
								'menu' => __( 'Primary Navigation', 'bonestheme' ),  // nav name
								'items_wrap' => '<ul class="nav primary-nav cf">%3$s</ul>', // adding information
								'theme_location' => 'main-nav',                 // where it's located in the theme
								'before' => '',                                 // before the menu
								'after' => '',                                  // after the menu
								'link_before' => '',                            // before each link
								'link_after' => '',                             // after each link
								'depth' => 0,                                   // limit the depth of the nav
								'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
						</nav>
					</div>
				</div>

			</header>


