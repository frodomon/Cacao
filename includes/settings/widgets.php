<?php
	add_action('widgets_init','header_widgets_init');
 
	function header_widgets_init(){
    $args = array(
    'name'          => 'Header Widget Zone',
    'id'            => 'header-widget',
    'description'   => '',
    'before_widget' => '<div class="header-widget col-sm-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>' );
    register_sidebar($args);
	}
?>