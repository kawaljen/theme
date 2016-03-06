<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MadeInShoreditch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header top">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php madeinshoreditch_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
<!--
<div class="post-socials">
			<div class="post-like part">
				<span class="button">
<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo esc_url( get_permalink() ); ?>&layout=button_count&show_faces=false&width=180&action=like&colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:180px; height:60px;"></iframe>
				</span>
				<span class="button">
					<a class="twitter-share-button"
  href="<?php //echo esc_url( get_permalink() ); ?>">
Tweet</a>
				</span>
			</div>			
			<div class="post-follow part">
				<span class="button title">
					FOLLOW US
				</span>
				<span class="button">
<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/MadeinShoreditch&layout=button_count&show_faces=false&width=180&action=like&colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:180px; height:60px;"></iframe>
				</span>
				<span class="button">
					<a href="https://twitter.com/MadeiShoreditch" class="twitter-follow-button" data-show-count="false">Follow @MadeiShoreditch</a>
				</span>
				<span class="button">
					<span class="ig-follow" data-id="5479dee" data-handle="igfbdotcom" data-count="true" data-size="small" data-username="true"></span>
				</span>
			</div>
		</div>
-->
	</div><!-- .entry-content -->


</article><!-- #post-## -->

