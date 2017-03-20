<?php
	add_theme_support( 'nav-menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  register_nav_menus(array('main' => 'Main Nav', 'primary_mobile' => 'Navigation Mobile','primary_footer' => 'Footer' ));
	}

	
?>