<?php
/*
    Template NECN: Front Page
*/
?>
<?php get_header(); ?>

		
    		<!-- start front-page slider -->
    <div id="slider-home">
<?php 
    echo do_shortcode("[metaslider id=334]"); 
?>    </div>
    		<!-- end front-page slider -->        
<!-- start content -->
	<div class="content-area">		
  	<p>
  		Neighboorhood Emergency Communications Network 
             
                SEO keyword rich summary goes

here. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac

turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.

Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
  	
  
        <!-- start posts -->            
            	
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?> 	   
		<article class="article-post">

			<h2 id="post-<?php the_ID(); ?>" class="post-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
             </h2>
             <?php the_excerpt('More &raquo;'); ?><a href="<?php the_permalink() ?>">Read More &raquo;</a> 
            

			 
             <?php the_content(); ?>

   		 </article>
	<?php endwhile; ?>
        <?php endif; ?>
        <!-- end posts -->
        <?php wp_link_pages(); ?>
             
    </div>

  
    <?php get_sidebar(); ?>
    
    

    <!-- start right page sidebar -->
    <?php get_sidebar(); ?>
    <!-- end right page sidebar -->


<?php get_footer(); ?>
