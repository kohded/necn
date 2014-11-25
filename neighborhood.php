<?php
/*
Template Name: Neighborhood 
*/
?>

<?php get_header(); ?>

    <!-- breadcrumbs -->
    <div id="breadcrumbs">
        <?php bcn_display(); ?>
    </div>
    <!-- end breadcrumbs -->
    
    <!-- slider -->
    <div id="slider-home">
    <?php

        echo do_shortcode("[metaslider id=334]");

    ?>
    </div>
    <!-- end front-page slider -->
    
<!-- start loop -->
<!--start content -->
<main class="main-content-left" role="main">
	<h1>Neighborhood Info</h1>
	
	<h2>Hub Locations</h2>
	<p>Several neighborhoods in Seattle have formed "Neighborhood Emergency Hub Locations", where neighbors can get reliable information
	and assitance in the case of a disaster. Click on your neighborhood below to find out what is happening.  If your neighborhood is not
	organized, perhaps you can help it get prepared.</p>
	&nbsp;
	<p>Findout more at <a href="http://seattle.gov/emergency" target="_blank">Seattle.gov/emergency</a></p>
	&nbsp;
	<ul>
	<li>Ballard</li>	
	<li>Broadview</li>	
	<li>Capitol Hill</li>
	<li>Central District</li>	
	<li>Crown Hill</li>	
	<li>Fremont</li>
	<li>Greenwood</li>	
	<li>Interbay</li>	
	<li>Lake City</li>
	<li>Magnolia</li>	
	<li>Maple Leaf</li>	
	<li>North East Seattle</li>
	<li>Queen Anne</li>	
	<li>Rainier Beach</li>	
	<li>Shilshole Bay</li>
	<li>Wallingford</li>
	<li>Wedgewood</li>
	<li>West Seattle</li>
	</ul>
	
	
	
	
	
	
    <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="article-post">
		<h2 id="post-<?php the_ID(); ?>" class="post-title">
		</h2>
                <?php the_content() ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- end loop -->
    <?php wp_link_pages(); ?>
 
    <div class="main-content-social-media">
        <h3>Stay Connected</h3>
        <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
    </div>
    <!--closing div for main-content-social-media-->	
</main>
<!-- end content -->

<!-- remove sub nav on all neighborhood pages -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>