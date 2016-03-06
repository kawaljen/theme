<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MadeInShoreditch
 */

get_header(); ?>
	<?php get_sidebar(); ?>
	<div id="primary" class="content-area single">
		<main id="main" class="site-main" role="main">

		<?php 	if ( wp_is_mobile() ) {
				if( function_exists('the_ad') ) the_ad_placement('responsive-mobileonly-top');}

			else{
				if( function_exists('the_ad') )the_ad_placement('responsive-desktoponly-top');}
		?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php //the_post_navigation(); ?>
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('postFooter') ) : ?>
			<?php endif; ?>

			<?php //-------------------------------- Taboola-----------------------------------------?>
			<div id="taboola-below-article-thumbnails" ></div>
			<script type="text/javascript">
			  window._taboola = window._taboola || [];
			  _taboola.push({
				mode: 'thumbs-2r',
				container: 'taboola-below-article-thumbnails',
				placement: 'Below Article Thumbnails',
				target_type: 'mix'
			  });
			</script>
			
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					echo '<div class="relatedposts"><h2>Comments</h2>';
					comments_template();
					echo '</div>';
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
		
				
		<?php
		// get related posts
		//$get_related = get_theme_option('related_on'); if($get_related == 'Enable'):
		get_template_part( 'template-parts/content-related' );
		//endif
		?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
