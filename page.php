<?php
/*
    Template NECN: Page
*/
?>

<?php get_header(); ?>
 
<main class="main-content-left" role="main">
    <!-- breadcrumbs -->
    <div id="breadcrumbs">
        <?php bcn_display(); ?>
    </div>

    <!-- slider -->
    <?php
        echo do_shortcode("[metaslider id=241]");
    ?>

    <!-- start loop -->
    <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="article-post">
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; // ?>
    <!-- end loop -->
 
    <div class="main-content-social-media">
        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png">
        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png">
        <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png">
    </div><!--closing div for right_column_bottom_header-->	
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>