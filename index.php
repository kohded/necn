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
                <ul class="post-metadata">

                    <li><small><span class="author">Posted by <?php the_author_posts_link(); ?> </span></small></li>
                    <li><small><span class="cat">about <?php the_category(', ') ?>  </span></small></li>
                    <li><small><span class="date">on <?php the_time('l, F jS, Y') ?>  </span></small></li>

                </ul>
                <?php // the_content('More &raquo;'); ?>
                <?php the_excerpt(); ?><a class="more" href="<?php the_permalink() ?>">Read More &raquo;</a>
                <?php // edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- end loop -->

    <!-- next and previous post link -->
    <nav class="post-nav">
        <?php numbered_pagination(); ?>
    </nav>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>