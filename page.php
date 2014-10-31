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
</main>

<?php get_sidebar('content'); ?>

<?php get_footer(); ?>