<?php

function display_multisite_global_menu() {
	//function for getting a global menu
	//that caching plugin really was ridiculous, wasn't it?
	if (is_multisite() && !is_main_site()) {
		switch_to_blog(1); //should send us to the main site temporarily
	}
	wp_nav_menu("global_menu"); //get the nav menu from the main site context
	if (is_multisite() && ms_is_switched()) {
		restore_current_blog(); //revert to the network site if we switched it above
	}
}

register_nav_menu("footer_menu", "Footer Menu");

$footerMenu = array (
	"theme_location" => "footer_menu",
	"container" => "nav",
	"container_class" => "",
	"container_id" => "footer_menu"
);


register_nav_menu("global_menu", "Global Menu");

$globalMenu =  array (
	"theme_location" => "global_menu",
	"container" => "nav",
	"container_class" => "",
	"container_id" => "global_menu"
);



add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	register_sidebar( array(
		'id'            => 'primary',
		'name'          => __( 'Primary Sidebar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'id'            => 'content',
		'name'          => __( 'Content Sidebar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	}
    
//    Numbered pagination for posts
    if ( ! function_exists( 'numbered_pagination' ) ) :
    function numbered_pagination() 
    {
        global $wp_query;
        $max = 999999; // max number

        echo paginate_links( array(
            'base'      => str_replace( $max, '%#%', esc_url( get_pagenum_link( $max ) ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var('paged') ),
            'total'     => $wp_query->max_num_pages
        ) );
    }
    endif;
    
// Get My Title Tag for SEO - also line #8 header.php
function get_my_title_tag() {
    
    global $post;
    
    if ( is_home() || is_archive() || is_front_page()) {  // for the Blog (Home) Page, Blog (Archives) Pages or the site’s Front Page
    
        bloginfo('description'); // retrieve the site tagline
    
    } 
    
    elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings
    
        the_title(); // retrieve the page or posting title 
    
    } 
    
    if ( $post->post_parent ) { // for your site’s Parent Pages
    
        echo ' | '; // separator with spaces
        echo get_the_title($post->post_parent);  // retrieve the parent page title
        
    }

    echo ' | '; // separator with spaces
    bloginfo('name'); // retrieve the site name
    echo ' | '; // separator with spaces
    echo 'Seattle, WA'; // write in the location
    
}    
    
