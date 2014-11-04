<?php
/*
    Template NECN: Single
*/
?>

<?php get_header(); ?>

<div class="main-content-left">
	<?php if (have_posts()) :  ?>
	<?php while(have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<p><small>Posted by <?php the_author(); ?> </small></p>
		<?php the_content(); ?>
		<p>Listed in: <?php the_category(", ") ?></p>
		<ul class="post-nav">
			<?php previous_post_link("<li>%link</li>", "&lt; Previous"); ?>
			<?php next_post_link("<li>%link</li>", "Next &gt;"); ?>
		</ul>
		<?php comments_template(); ?>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer();?>