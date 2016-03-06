<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MadeInShoreditch
 */

get_header(); ?>
<?php if( function_exists('the_ad') )the_ad_placement('aftermegamenu'); ?>
		
	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">-->
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					//the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php 
				$topInfos = true;
			    if( $wp_query->current_post < 2 ){
					$topInfos = false;
				} ?>		
			
			
				<?php if( $wp_query->current_post == 2 ): ?>
					<div id="primary" class="content-area">
							<main id="main" class="site-main" role="main">
				<?php endif ?>
				<?php
					
				// get the add
				if ( $wp_query->current_post == 7 && ! wp_is_mobile()) {
					echo ' <div class="clear"></div>';
					if( function_exists('the_ad') )the_ad_placement('ingrid');
				}
				if ( ($wp_query->current_post == 3 || $wp_query->current_post == 6 || $wp_query->current_post == 9 || $wp_query->current_post == 12)&&  wp_is_mobile()) {
					echo ' <div class="clear"></div>';
					if( function_exists('the_ad') )the_ad_placement('ingrid');
				}
				?>
				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					include (TEMPLATEPATH . '/template-parts/content.php');
					$ClassName = 'ras';
				?>

			<?php endwhile; ?>
			<?php
				$categories = get_the_category();
				$category_id = $categories[0]->slug;				
			?>
			<?php echo do_shortcode('[ajax_load_more post_type="post" category="'.$category_id.'" offset="12" button_label="More Posts" posts_per_page="10"]');?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
