<?php
  function dohko_scripts() {
		wp_enqueue_script( 'js-tether', JAVASCRIPTS .'/tether.js',array(), '1.0.0', true);
		wp_enqueue_script( 'js-font-awesome', JAVASCRIPTS .'/bootstrap.min.js',array(), '1.0.0', true);
		wp_enqueue_script( 'script-jquery', JAVASCRIPTS .'/jquery-3.1.1.min.js', array(), '3.1.1', true );
		wp_enqueue_script( 'scripts', JAVASCRIPTS .'/scripts.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'dohko_scripts' );
?>