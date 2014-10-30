<?php
/**
 * Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage necn
 * @version 1.0
 */
?>
<!--begin sidebar - Need separate sidebar.pgp file for each Hub or add here?-->
<aside class="sidebar">
	
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	
	<!-- Post ID and metadata; H2 tag, date, time, author -->
	<article class="page" id="post-<?php the_ID(); ?>">
	
	<h2 class="post-description"><?php echo esc_html( $description ); ?></h2>
		<p class="postmetadata">
			<span class="">Posted on
				<?php the_time('F jS, Y') ?>
			</span>
			<span class="">
				<?php _e('By');?>
				<?php the_author_posts_link(); ?>
			</span>
		</p>
	</article>
	
	<?php
		endif;
	?>

	<?php
		if ( is_active_sidebar( 'content' ) ) :
	?>
	
	<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'content' ); ?>
	</div>
	<!-- end content-sidebar -->
	
	<?php
		endif;
	?>

	<?php
		if ( is_active_sidebar( 'primary' ) ) :
	?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'primary' ); ?>
	</div>
	<!-- end primary-sidebar -->
	
	<?php
		endif;
	?>
</aside>
<!-- end sidebar-->
