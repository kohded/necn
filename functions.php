<?php

function display_multisite_global_menu() {
	//function for getting a global menu
	//that caching plugin really was ridiculous, wasn't it?
	if (is_multisite() && !is_main_site()) {
		switch_to_blog(1); //should send us to the main site temporarily
	}
	wp_nav_menu( array (
		"theme_location" => "global_menu",
		"container" => ""
	) );
	//get the nav menu from the main site context
	if (is_multisite() && ms_is_switched()) {
		restore_current_blog(); //revert to the network site if we switched it above
	}
}

function register_dashboard_menus() {
	register_nav_menus(
		array (
			'global_menu' => 'Global Menu'
		)
	);
}
add_action( 'init', 'register_dashboard_menus' );


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
    
// Create Page Excerpts for SEO
add_post_type_support( 'page', 'excerpt' );
//    
    
// Get My Title Tag for SEO - also line #8 header.php
function get_my_title_tag() {
    
    global $post;
    
    if ( is_home() || is_archive() || is_front_page()) {  // for the Blog (Home) Page, Blog (Archives) Pages or the site�s Front Page
    
        bloginfo('description'); // retrieve the site tagline
    
    } 
    
    elseif ( is_page() || is_single() ) { // for your site�s Pages or Postings
    
        the_title(); // retrieve the page or posting title 
    
    } 
    
    if ( $post->post_parent ) { // for your site�s Parent Pages
    
        echo ' | '; // separator with spaces
        echo get_the_title($post->post_parent);  // retrieve the parent page title
        
    }

    echo ' | '; // separator with spaces
    bloginfo('name'); // retrieve the site name
    echo ' | '; // separator with spaces
    echo 'Seattle, WA'; // write in the location
    
}


/**
 * MetaSlider plugin shortcode slug
 * Filter the shortcode attributes.
 * If the ID parameter is not an integer, assume it is a slug.
 * Convert the slug to an ID and return the attributes.
 */
function metaslider_shortcode_slug( $atts ) {

	if ( isset( $atts['id'] ) && ! is_int( $atts['id'] ) ) {

		$slider = get_page_by_path( $atts['id'], OBJECT, 'ml-slider' );

		if ( $slider ) {
			$atts['id'] = $slider->ID;
		}

	}

	return $atts;

}
add_filter('shortcode_atts_metaslider', 'metaslider_shortcode_slug', 10, 3);

/**
 * Ensure the post_name (slug) is updated when a slideshow title
 * is updated.
 */
function metaslider_update_slug_on_save( $data , $postarr ) {

	if ( isset( $postarr['post_type'] ) && $postarr['post_type'] == 'ml-slider' ) {

		$data[ 'post_name' ] = sanitize_title( $postarr[ 'post_title' ] );

	}

	return $data;
}
add_filter( 'wp_insert_post_data' , 'metaslider_update_slug_on_save' , 10, 2 );

// Displays the slider based on the page and slug
// In the slider dashboard, slider should be named Front Page, Page, Default.
function display_metaslider_by_slug() {
	if ( is_front_page() ) {
		echo do_shortcode("[metaslider id=front-page]");
	}
	elseif ( is_page() ) {
		echo do_shortcode("[metaslider id=page]");
	}
	else {
		echo do_shortcode("[metaslider id=default]");
	}
}