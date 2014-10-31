<?php
/*
    Template NECN: Front Page
*/
?>
<?php get_header(); ?>

		
    		<!-- start front-page slider -->
    <div id="slider-home">
<?php 
    echo do_shortcode("[metaslider id=262]"); 
?>    </div>
    		<!-- end front-page slider -->        
<!-- start content -->
	<div class="content-area">		
  	<h3>
  		Neighboorhood Emergency Communications Network 
        </h3>       
                <p>SEO keyword rich summary goes

here. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac

turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.

Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
  	
  
        <!-- start posts -->            
            	
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?> 	   
		<article class="article-post">
			 
             <?php the_content(); ?>
   		 </article>
	<?php endwhile; ?>
        <?php endif; ?>
        <!-- end posts -->
        <?php wp_link_pages(); ?>
             
    </div>

    <!-- start right page sidebar -->
    <?php get_sidebar(); ?>
    <!-- end right page sidebar -->

<?php get_footer(); ?>
