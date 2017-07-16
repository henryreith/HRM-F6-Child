<?php


function remove_parent_stylesheet() {
    
    wp_deregister_style('parent-styles');
	wp_dequeue_style('parent-styles');

}
add_action( 'wp_enqueue_scripts', 'remove_parent_stylesheet', 101 );

function hrm_f6_child_enqueue_styles() {
    // wp_enqueue_style( 'parent-style-css', get_template_directory_uri() . '/assets/css/master.css' );
    // wp_enqueue_style('parent-style-css');

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/child.css', false, null);
    wp_enqueue_style('child-style');

}
add_action( 'wp_enqueue_scripts', 'hrm_f6_child_enqueue_styles', 102 );