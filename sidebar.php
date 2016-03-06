<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MadeInShoreditch
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">

	<?php //if( function_exists('the_ad') )the_ad_placement('sidebartop'); ?>
	
<!--
<h3><span>Connect</span><span class="tiret"></span></h3>
	<div class="mycustomLikeButton">
<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.madeinshoreditch.co.uk&layout=button_count&show_faces=false&width=200&action=like&colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:200px; height:60px;"></iframe>
	</div>

	<a href="https://twitter.com/MadeiShoreditch" class="twitter-follow-button" data-show-count="false">Follow @MadeiShoreditch</a>
	<span class="ig-follow" data-id="5479dee" data-handle="igfbdotcom" data-count="true" data-size="small" data-username="true"></span>>
-->
	
	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

