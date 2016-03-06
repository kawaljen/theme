
<article id="post-<?php the_ID(); ?>"  class="grid-article full-mobile video-item" >
	<div class="holder">
		<header class="entry-header grid-article-info">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<a class="author" href="<?php //echo get_the_author_link();?>">by <?php echo get_the_author(); ?></a>

		</header><!-- .entry-header -->

		<div class="grid-article-info share-compt"><?php echo do_shortcode('[mashshare shares="true" buttons="false"]'); ?></div>

		<div class="grid-article-info category"><?php echo $categname; ?></div>
		
			<?php 
				$size = 'full';
				echo '<div class="entry-content"><div class="img-post" style="background-image:url('.
								mis_get_featured_post_image('random',$size,get_the_title(),get_the_title(),true, true).	
							')"></div></div>';
			?>
			
	</div><!-- .entry-content -->
</article><!-- #post-## -->
