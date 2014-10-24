<?php get_header(); ?>
	<!-- start page content -->
	<div id="content" class="content-area">
		<main id="main" class="page-<?php the_ID(); ?>" role="main">

			<!-- start breadcrumbs -->
			<div id="breadcrumbs">
				<?php bcn_display(); ?>
			</div>
			<!-- start loop -->
			<?php if (have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="page" id="post-<?php the_ID(); ?>">
						<h2 id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
							<?php the_title(); ?>
						</a></h2>
						<p class="postmetadata">
							<span class="">Posted on <?php the_time('F jS, Y') ?>
							</span> in <span class=""><?php the_category(', ') ?>
							</span> <span class=""><?php _e('By');?>
							<?php the_author_posts_link(); ?>
							</span> <span class="">with
							<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
							</span>
						</p>
						<?php the_excerpt('More &raquo;'); ?>
						<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
					</article>
				<?php endwhile; ?>
			<?php endif; // ?>
			<!-- end loop -->

			<!-- scroll older and newer post -->
			<nav class="post-nav">
				<p class="alignleft">
					<?php next_posts_link('&laquo; Older Posts') ?>
				</p>
				<p class="alignright">
					<?php previous_posts_link('Newer Posts &raquo;') ?>
				</p>
			</nav>
		</main><!-- #main -->

		<!-- start sidebar -->
		<?php get_sidebar('content'); ?>

	</div><!-- #content -->>
<?php get_footer(); ?>