<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MadeInShoreditch
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
				Copyright 2015. Made In Shoreditch
		</div><!-- .site-info -->
		<div class="menu-social">
<!--
			<div class="menu-social-item menu-mail">
				<a class="icon-mail" href="mailto:<?php echo get_bloginfo('admin_email'); ?>"></a>
			</div>
-->
			<div class="menu-social-item menu-inst">
				<a class="icon-instagram" href="https://instagram.com/madeishoreditch/" target="_blank"></a>
			</div>
			<div class="menu-social-item menu-twitter">
				<a class="icon-twitter" href="https://twitter.com/MadeiShoreditch" target="_blank"></a>
			</div>
			<div class="menu-social-item menu-facebook">
				<a class="icon-facebook2" href="https://www.facebook.com/MadeinShoreditch" target="_blank"></a>
			</div>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>
<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({flush: true});
</script>
</body>
</html>
