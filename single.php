<?php
/*
    Template NECN: Single
*/
?>

<?php get_header(); ?>

<div class="main_content_left">
	<?php if (have_posts()) :  ?>
	 <?php while(have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<p><small>Posted
		<time datetime="<?php the_time('Y-m-d'); ?>"></time>
		by <?php the_author(); ?>,
		</small></p>
		<?php the_content(); ?>
		<p>Listed in: <?php the_category(", ") ?></p>
		<?php comments_template(); ?>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<div class="main_content_right">
<?php get_sidebar('content');?>
</div>
<?php get_footer();?>
