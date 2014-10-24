<?php get_header(); ?>
	<!-- start page content -->
	<div id="content" class="content-area">
		<main id="main" class="page-<?php the_ID(); ?>" role="main">

			<!-- start breadcrumbs -->
			<div id="breadcrumbs">
				<?php bcn_display(); ?>
			</div>
			<?php
			echo do_shortcode("[metaslider id=337]");
			?>
			<!-- start loop -->
			<?php if (have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="page" id="post-<?php the_ID(); ?>">
						<?php the_content(); ?>
					</article>
					<?php
					// if comments open or exist, get comments template
//					if ( comments_open() || get_comments_number() ) :
//						comments_template();
//					endif;
					?>
				<?php endwhile; ?>
			<?php endif; // ?>
			<!-- end loop -->

		</main><!-- #main -->

		<!-- start sidebar -->
		<?php get_sidebar('content'); ?>

	</div><!-- #content -->>
<?php get_footer(); ?>