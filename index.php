<?php
/*
    Template NECN: Index
*/
?>

<?php get_header(); ?>

<main class="main-content-left" role="main">
    <!-- breadcrumbs -->
    <div id="breadcrumbs">
        <?php bcn_display(); ?>
    </div>

    <!-- start loop -->
    <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="article-post">
                <h2 id="post-<?php the_ID(); ?>" class="post-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>
                <!-- start post metadata -->
                <p class="post-metadata">  
                    <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
                    <span class="cat"><?php the_category(', ') ?></span>
                    <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
                    <span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
                </p>
                <?php // the_content('More &raquo;'); ?>
                <?php the_excerpt('More &raquo;'); ?>
                <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- end loop -->

    <!-- next and previous post link -->
    <nav class="post-nav">
        <p class="post-nav-next"><?php next_posts_link('&laquo; Older Posts') ?></p>
        <p class="post-nav-previous"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
    </nav>
</main>

<?php get_sidebar('content'); ?>

<?php get_footer(); ?>