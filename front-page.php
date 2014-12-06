<?php
/*
    Template NECN: Front Page
*/
?>
<?php get_header(); ?>

    <!-- start front-page slider -->
	<?php
		display_metaslider_by_slug(); //functions.php
	?>
    <!-- end front-page slider -->

	<!-- start content -->
	<div class="content-area">
        <!-- start posts -->            
            	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(''); ?>
	<?php endwhile; endif; ?>
	<!-- end this loop -->
	
	<!-- start second loop show latest 3 posts-->
	<?php rewind_posts(); //stop the first loop ?>
	<?php query_posts('showposts=3'); //show latest 3 posts ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="article-post">

             <h2 id="post-<?php the_ID(); ?>" class="post-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
             </h2>

             <?php the_excerpt(); ?><a href="<?php the_permalink() ?>">Read More &raquo;</a> 
             <p><small>Posted by <?php the_author(); ?> in <?php the_category(', ') ?></small></p>

   		 </article>
	<?php endwhile; ?>
        <?php endif; ?>
        <!-- end second loop of posts -->
        <?php wp_link_pages(); ?>
             
    </div>


    <!-- start right page sidebar -->
    <?php get_sidebar(); ?>
    <!-- end right page sidebar -->


<?php get_footer(); ?>
