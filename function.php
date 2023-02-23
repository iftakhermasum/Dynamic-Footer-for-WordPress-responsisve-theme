<?php

// Use this code into your functions.php file

add_action( 'widgets_init', 'register_my_sidebars' );

function register_my_sidebars() {	
	register_sidebar(
		array(
			'id'            => 'fwidget-1',
			'name'          => __( 'Footer first widget'),
			'description'   => __( 'This is Footer first widget.'),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);	
	register_sidebar(
		array(
			'id'            => 'fwidget-2',
			'name'          => __( 'Footer second widget'),
			'description'   => __( 'This is Footer second widget.'),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);	
	register_sidebar(
		array(
			'id'            => 'fwidget-3',
			'name'          => __( 'Footer third widget'),
			'description'   => __( 'This is Footer third widget.'),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);
	register_sidebar(
		array(
			'id'            => 'fwidget-4',
			'name'          => __( 'Footer fourght widget'),
			'description'   => __( 'This is Footer fourght widget.'),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);
}