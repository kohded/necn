</div><!--content closing div-->
<footer>
	<!--start footer class content div-->
	<div class="content">
     <div class="footer-nav">
					<?php wp_nav_menu($footerMenu);?>
				</div>

        <?php get_sidebar("footer"); ?>
	<p><small>Copyright &#169; 2014, Neighborhood Emergency Communications Network | All Rights Reserved</small></p>
	</div>
	<!--end footer class content div-->
</footer>
<?php wp_footer(); ?>
</body>
</html>