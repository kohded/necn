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
  	
  	<h1>Neighborhood Emergency Communications Network</h1>
	&nbsp;
	<h2>NECN - Prepare!</h2>
             <p>Are you prepared for natural disasters, or other threats?  If a major earthquake hits Seattle, where will you and your family get drinking water and food?
	     How will you communicate with your spouse or your family members if all the local phone lines are down, including cell towers?  Do you have a emergency preparedness plan?</p>
	     &nbsp;
	     <p>City officials may not be able to help you in the case of a major natural disaster, terrorism attack or city, county or state wide emergency, so
	     the city is urging neighborhoods, families and individuals to be prepared to help themselves and each other.</p>
	     &nbsp;
	     <p>This website is created to help prepare you, your family, and your neighborhood for a disaster.  Find out what your
	     neighborhood is doing to be prepared, and how you can help!</p>
             &nbsp;
  
        <!-- start posts -->            
            	
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?> 	   
		<article class="article-post">

			<h2 id="post-<?php the_ID(); ?>" class="post-title">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
             </h2>
             <?php the_excerpt('More &raquo;'); ?><a href="<?php the_permalink() ?>">Read More &raquo;</a> 

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
