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
    <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="article-post">
		<h2 id="post-<?php the_ID(); ?>" class="post-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
                <?php the_excerpt('More &raquo;'); ?><a href="<?php the_permalink() ?>">Read More &raquo;</a>
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