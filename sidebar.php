<?php
/**
 * Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage necn
 * @version 1.0
 */
?>
<!--begin sidebar -->
<aside class="main-content-right">
	
<?php // if is not either the 'not found' or 'search' pages or the 'page-neighborhood template page'
	if ( !( is_404() ||  is_search() || is_page_template('page-neighborhood.php')) ) {
?>
	<!-- begin Sub Pages-->
<?php
	if ($post->post_parent) { // if has a post parent
	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0" );
	$parentname = get_the_title($post->post_parent);
		} else { // if does not have a post parent
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0" );
$parentname = get_the_title($post->ID);
}
	if ($children) { // if has children ?>
	
		<div id="sub-navigation" class="widget-area">
		<h3 id="sub-navigation-title"><?php echo $parentname; ?> </h3>
			<ul id="sub-navigation-items">
				<?php echo $children; ?>
			</ul>
		</div>
	

        <?php }}

?>
<!-- End Sub Pages -->

	<?php
		if ( is_active_sidebar( 'content' ) ) :
	?>
	
	<div class="content-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'content' ); ?>
	</div>
	<!-- end content-sidebar -->
	
	<?php
		endif;
	?>

	<?php
		if ( is_active_sidebar( 'primary' ) ) :
	?>
	<div class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'primary' ); ?>
	</div>
	<!-- end primary-sidebar -->
	
	<?php
		endif;
	?>
</aside>

<!-- end sidebar-->

