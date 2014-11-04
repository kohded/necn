<?php

register_nav_menu("footer_menu", "Footer Menu");

$footerMenu = array (
	"theme_location" => "footer_menu",
	"container" => "nav",
	"container_class" => "",
	"container_id" => "footer_menu"
);
	

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

<<<<<<< HEAD

=======
//		register_sidebar ( array(
//		'id'			=>'ballard',
//		'name'		=>__( 'Content Ballard' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//		register_sidebar ( array(
//		'id'			=>'broadview',
//		'name'		=>__( 'Content Broadview' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//		register_sidebar ( array(
//		'id'			=>'capital_hill',
//		'name'		=>__( 'Content Capital Hill' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>'
//		));
//		register_sidebar ( array(
//		'id'			=>'central_district',
//		'name'		=>__( 'Content Central District' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//		register_sidebar ( array(
//		'id'			=>'crown_hill',
//		'name'		=>__( 'Content Crown Hill' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//			register_sidebar ( array(
//		'id'			=>'fremont',
//		'name'		=>__( 'Content Fremont' ),
//		'before_widget'=> '<aside id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//			register_sidebar ( array(
//		'id'			=>'greenwood',
//		'name'		=>__( 'Content Greenwood' ),
//		'before_widget'=> '<aside id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//			register_sidebar ( array(
//		'id'			=>'interbay',
//		'name'		=>__( 'Content Interbay' ),
//		'before_widget'=> '<aside id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//			register_sidebar ( array(
//		'id'			=>'lake_city',
//		'name'		=>__( 'Content Lake City' ),
//		'before_widget'=> '<aside id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//			register_sidebar ( array(
//		'id'			=>'magnolia',
//		'name'		=>__( 'Content Magnolia' ),
//		'before_widget'=> '<aside id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//			register_sidebar ( array(
//		'id'			=>'maple_leaf',
//		'name'		=>__( 'Content Maple Leaf' ),
//		'before_widget'=> '<aside id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//			register_sidebar ( array(
//		'id'			=>'ne_seattle',
//		'name'		=>__( 'Content NE_seattle' ),
//		'before_widget'=> '<aside id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//				register_sidebar ( array(
//		'id'			=>'queen_anne',
//		'name'		=>__( 'Content Queen Anne' ),
//		'before_widget'=> '<aside id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</aside>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//				register_sidebar ( array(
//		'id'			=>'rainier_beach',
//		'name'		=>__( 'Content Rainier Beach' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//				register_sidebar ( array(
//		'id'			=>'seattle',
//		'name'		=>__( 'Content Seattle' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//				register_sidebar ( array(
//		'id'			=>'shilshole_bay',
//		'name'		=>__( 'Content Shilshole_bay' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//				register_sidebar ( array(
//		'id'			=>'wallingford',
//		'name'		=>__( 'Content Wallingford' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//				register_sidebar ( array(
//		'id'			=>'wedgewood',
//		'name'		=>__( 'Content Wedgewood' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
//				register_sidebar ( array(
//		'id'			=>'west_seattle',
//		'name'		=>__( 'Content West Seattle' ),
//		'before_widget'=> '<div id="%1$s" class="widget %2$s"> ',
//		'after_widget' => '</div>',
//		'before_title' => '<h3 class="widget-title">',
//		'after_title' => '</h3>',
//		));
>>>>>>> FETCH_HEAD
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
?>