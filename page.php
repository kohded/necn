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
  <?php $page_excerpts = array('post_type' => 'page','numberposts' => -1,'post_status' => null,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order'); $child_pages = get_posts($page_excerpts);  ?>
  <?php foreach ($child_pages as $post) : setup_postdata($post); // get child page titles and excerpts ?>
  <article id="article-post-<?php the_ID(); ?>" class="article-post">
    <h2><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      &raquo;</a></h2>
    <?php the_excerpt(); ?>
    <p class="more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a></p>
  </article>
  <?php endforeach; ?>
  <?php endwhile; ?>
  <?php endif; // ?>
  <!-- end loop -->
  
  <div class="main-content-social-media">
    <h3>Stay Connected</h3>
    <?php do_action('crafty-social-link-buttons'); ?>
  </div>
  <!--closing div for main-content-social-media--> 
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
