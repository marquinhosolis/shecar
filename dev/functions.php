<?php
	//add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' );
		//set_post_thumbnail_size( 150, 150, true ); 
		
		add_image_size( 'blog-home', 375, 165, array('center','center') ); 
		add_image_size( 'blog-big', 560, 265, array('center','center') ); 
	}

	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

	function wpdocs_custom_excerpt_length( $length ) {
		return 15;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

	function new_excerpt_more( $more ) {
		return ' ...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

?>