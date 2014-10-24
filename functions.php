<?php

register_nav_menu("main_menu", "Main Menu");

$mainMenu =  array (
	"theme_location" => "main_menu",
	"container" => "nav",
	"container_class" => "",
	"container_id" => "main_menu"
);

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	register_sidebar( array(
		'id'            => 'primary',
		'name'          => __( 'Primary Sidebar' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'id'            => 'content',
		'name'          => __( 'Content Sidebar' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'id'            => 'footer',
		'name'          => __( 'Footer Bar' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
?>