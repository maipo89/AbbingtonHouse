<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title(''); ?></title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<!-- <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png"> -->
		<meta name="theme-color" content="#121212">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>

	<?php // drop Google Analytics Here ?>
	<?php // end analytics ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<header class="header">

			<div class="hamburger">
				<div class="hamburger__container">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
			<svg class="chevron-left" width="14" height="23" viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13.2686 0.45044C12.6565 -0.150147 11.6697 -0.150147 11.0577 0.45044L0.677855 10.6359C0.190715 11.1139 0.190715 11.8861 0.677855 12.3641L11.0577 22.5496C11.6697 23.1501 12.6565 23.1501 13.2686 22.5496C13.8806 21.949 13.8806 20.9807 13.2686 20.3801L4.22524 11.4939L13.281 2.60765C13.8806 2.01932 13.8806 1.03877 13.2686 0.45044Z" fill="#87846A"/>
			</svg>
			<a href="<?php echo get_home_url(); ?>" class="link-logo">
				<img width="400" height="101" alt="logo" class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/build_assets/images/AbbingtonHouse-logo.png' ); ?>" />
			</a>
			<nav id="navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php $arrow_svg = '<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_2247_68125)"><path d="M0.293765 3.7379C-0.097922 4.13706 -0.097922 4.78061 0.293765 5.17977L6.93645 11.9492C7.2482 12.2669 7.7518 12.2669 8.06355 11.9492L14.7062 5.17977C15.0979 4.7806 15.0979 4.13706 14.7062 3.7379C14.3145 3.33873 13.6831 3.33873 13.2914 3.7379L7.496 9.63572L1.70064 3.72975C1.31695 3.33874 0.677458 3.33873 0.293765 3.7379Z" fill="#87846A"/></g><defs><clipPath id="clip0_2247_68125"><rect width="15" height="15" fill="white" transform="translate(0 15) rotate(-90)"/></clipPath></defs></svg>'; ?>
				<?php wp_nav_menu(array(
							'container' => false,                           // remove nav container
							'container_class' => 'menu cf',                 // class of container (should you choose to use it)
							'menu' => __( 'Main Menu', 'bonestheme' ),  // nav name
							'menu_class' => 'nav top-nav cf accordion-menu',               
																			// adding custom nav class
							'theme_location' => 'main-nav',                 // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => $arrow_svg,                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             
																			// after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => ''                             // fallback function (if there is one)
				)); ?>

			</nav>

			<a class="header__button" href="tel:0123456789">
			<p>Give us a call</p>
			<p>0123456789</p>
			</a>

			<a href="tel:0123456789" class="header__call-icon">
				<svg width="25" height="25" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M21 16.5852C21 16.8537 20.9503 17.2042 20.8509 17.6367C20.7514 18.0692 20.647 18.4098 20.5376 18.6584C20.3288 19.1555 19.7223 19.6825 18.718 20.2393C17.7834 20.7464 16.8587 21 15.9439 21C15.6754 21 15.4119 20.9826 15.1534 20.9478C14.8949 20.913 14.609 20.8509 14.2958 20.7614C13.9826 20.6719 13.7489 20.5998 13.5948 20.5451C13.4407 20.4904 13.1648 20.3885 12.767 20.2393C12.3693 20.0902 12.1257 20.0007 12.0362 19.9709C11.0618 19.6229 10.1918 19.2102 9.42614 18.733C8.16335 17.9474 6.85085 16.8736 5.48864 15.5114C4.12642 14.1491 3.05256 12.8366 2.26705 11.5739C1.78977 10.8082 1.37713 9.93821 1.02912 8.96378C0.99929 8.87429 0.909801 8.63068 0.760653 8.23295C0.611506 7.83523 0.509588 7.5593 0.454901 7.40518C0.400213 7.25107 0.328125 7.0174 0.238636 6.70419C0.149148 6.39098 0.0870028 6.10511 0.0522017 5.84659C0.0174006 5.58807 0 5.32457 0 5.05611C0 4.14134 0.253551 3.21662 0.760653 2.28196C1.31747 1.2777 1.84446 0.671165 2.34162 0.462358C2.5902 0.352983 2.93075 0.24858 3.36328 0.149148C3.79581 0.0497159 4.14631 0 4.41477 0C4.55398 0 4.65838 0.0149148 4.72798 0.0447443C4.90696 0.104403 5.17045 0.482244 5.51847 1.17827C5.62784 1.36719 5.77699 1.63565 5.96591 1.98366C6.15483 2.33168 6.32884 2.64737 6.48793 2.93075C6.64702 3.21413 6.80114 3.48011 6.95028 3.72869C6.98011 3.76847 7.06712 3.89276 7.21129 4.10156C7.35547 4.31037 7.46236 4.48686 7.53196 4.63104C7.60156 4.77521 7.63636 4.9169 7.63636 5.05611C7.63636 5.25497 7.49467 5.50355 7.21129 5.80185C6.92791 6.10014 6.61967 6.37358 6.28658 6.62216C5.95348 6.87074 5.64524 7.13423 5.36186 7.41264C5.07848 7.69105 4.93679 7.91974 4.93679 8.09872C4.93679 8.18821 4.96165 8.30007 5.01136 8.4343C5.06108 8.56854 5.10334 8.67045 5.13814 8.74006C5.17294 8.80966 5.24254 8.92898 5.34695 9.09801C5.45135 9.26705 5.50852 9.36151 5.51847 9.38139C6.27415 10.7436 7.1392 11.9119 8.11364 12.8864C9.08807 13.8608 10.2564 14.7259 11.6186 15.4815C11.6385 15.4915 11.733 15.5487 11.902 15.6531C12.071 15.7575 12.1903 15.8271 12.2599 15.8619C12.3295 15.8967 12.4315 15.9389 12.5657 15.9886C12.6999 16.0384 12.8118 16.0632 12.9013 16.0632C13.0803 16.0632 13.3089 15.9215 13.5874 15.6381C13.8658 15.3548 14.1293 15.0465 14.3778 14.7134C14.6264 14.3803 14.8999 14.0721 15.1982 13.7887C15.4964 13.5053 15.745 13.3636 15.9439 13.3636C16.0831 13.3636 16.2248 13.3984 16.369 13.468C16.5131 13.5376 16.6896 13.6445 16.8984 13.7887C17.1072 13.9329 17.2315 14.0199 17.2713 14.0497C17.5199 14.1989 17.7859 14.353 18.0692 14.5121C18.3526 14.6712 18.6683 14.8452 19.0163 15.0341C19.3643 15.223 19.6328 15.3722 19.8217 15.4815C20.5178 15.8295 20.8956 16.093 20.9553 16.272C20.9851 16.3416 21 16.446 21 16.5852Z" fill="#87846A"/>
				</svg>
				<p>0123456789</p>
			</a>

			<a href="<?php echo get_home_url(); ?>" class="link-logo-mobile">
				<img width="400" height="101" alt="logo" class="logo" src="<?php echo esc_url( get_template_directory_uri() . '/build_assets/images/AbbingtonHouse-logo.png' ); ?>" />
			</a>

		</header>
