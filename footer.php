</div><!--content closing div-->
<footer>

	<!--start footer class content div-->
	<div class="content">
		<div class="footer-nav">
			<?php display_multisite_global_menu(); ?>
		</div>

        <?php get_sidebar("footer"); ?>
	<p><small>Copyright &#169; 2014, Neighborhood Emergency Communications Network | All Rights Reserved</small></p>
	</div>
	<!--end footer class content div-->

</footer>
<?php wp_footer(); ?>
<script>
	//selects show menu link and on clikc runs a function = 
	jQuery(".show-menu").on("click", function() {
		var $this = jQuery(this);
		//this finds the menu inside the parent container and slides it up or down
		// the parentis only for the mobile and will not show on desk top
		$this.closest(".primary-mobile-nav").find(".menu").slideToggle();
	})
</script>
</body>
</html>