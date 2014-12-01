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
        display_metaslider_by_slug(); //functions.php
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
        <h3>Stay Connected</h3>
	    <?php do_action('crafty-social-link-buttons'); ?>
    </div><!--closing div for main-content-social-media-->
</main>

<?php get_sidebar(); ?>


<?php get_footer(); ?>