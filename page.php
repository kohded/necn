<?php
/*
    Template NECN: Page
*/
?>
<?php get_header(); ?>

		<!-- start page content -->

<div id="content-page" class="content">

    		<!-- start breadcrumbs -->
    <div id="breadcrumbs">
			<?php bcn_display(); ?>
    </div>
            <!-- end breadcrumbs -->
            
    	<!-- start sidebar -->
    
        <div id="right-widgets">
			<?php get_sidebar('page-sidebar'); ?>
		</div>
        
	</div>
        <!-- end sidebar -->

	</div>
		<!-- end page content -->
        
<?php get_footer(); ?>