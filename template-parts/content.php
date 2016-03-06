<?php
/**
/*<?php post_class(); ?>
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MadeInShoreditch
 */
?>


<?php
if(!isset($ClassName) || $ClassName == 'ras'){
	// get the class name
	if ( $wp_query->current_post == 4 || $wp_query->current_post == 9 ) {
		$ClassName = 'full-col';	
	}

	else {
		$ClassName = 'two-col';
		if ( $wp_query->current_post == 2 || $wp_query->current_post == 5 || $wp_query->current_post == 7 || $wp_query->current_post == 10) {
			$ClassName .= ' borderright';	
		}
		if ( $wp_query->current_post == 2 || $wp_query->current_post == 3 ) {
			$ClassName .= ' first';	
		}
	}
}
?>

<?php
//---------------------------------------------------------- C A T E G O R I E -----------------------------------------------------------------------
// Get the category parent's name 
// $output is edited in the post thumb's div
if(!isset($forceCategname) && $forceCategname == false){
	$cat =  getParentCategory();
	$categname = sprintf(
		esc_html_x( '%s', 'post category', 'madeinshoreditch' ),
		'<a href="' . esc_url( $cat['url'] ) . '">' . esc_html( $cat['categname'] ) . '</a>'
	);
	
}
?>

<article id="post-<?php the_ID(); ?>"  class="grid-article full-mobile <?echo $ClassName; ?>" >
	<div class="holder">
		<header class="entry-header grid-article-info">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<a class="author" href="<?php //echo get_the_author_link();?>">by <?php echo get_the_author(); ?></a>

		</header><!-- .entry-header -->
		<?php if((!isset($SocialCount) || $SocialCount) && ! wp_is_mobile() && (!isset($topInfos) || $topInfos)):?>


			<div class="grid-article-info share-compt"><?php echo do_shortcode('[mashshare shares="true" buttons="false"]'); ?></div>


		<?php endif;?>
		<?php if(wp_is_mobile() || (!isset($topInfos) || $topInfos)):?>
			<div class="grid-article-info category"><?php echo $categname; ?></div>
		<?php endif;?>
		<div class="entry-content">
		
			<?php 
				$size = 'full';
				echo sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) );
				echo '<div class="img-post" style="background-image:url('.
								mis_get_featured_post_image('random',$size,get_the_title(),get_the_title(),true, true).	
							')"></div></a>';
			?>
			
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
