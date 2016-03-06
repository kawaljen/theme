<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MadeInShoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta property='fb:app_id' content='607628485982757' />
<!--

-->
<meta name="keywords" content="shoreditch magazine, art in shoreditch, shoreditch nightlife, shoreditch fashion, shoreditch style, dining shoreditch, Tech City magazine" />

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/icon-style.css" type="text/css"/>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/stickyfill.js'></script>
<script type="text/javascript">
  window._taboola = window._taboola || [];
  _taboola.push({article:'auto'});
  !function (e, f, u) {
    e.async = 1;
    e.src = u;
    f.parentNode.insertBefore(e, f);
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  'http://cdn.taboola.com/libtrc/madeinshoreditch/loader.js');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7234621-8', 'auto');
  ga('send', 'pageview');
</script>
</head>

<body <?php body_class(); ?>>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script>(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src="//x.instagramfollowbutton.com/follow.js";s.parentNode.insertBefore(g,s);}(document,"script"));</script>


<div id="page" class="hfeed site">
<?php if( function_exists('the_ad') ) the_ad_placement('verytop'); ?>
<?php 	if ( wp_is_mobile() ) {
		if( function_exists('the_ad') ) the_ad_placement('responsive-mobileonly-beforeheader');}

	else{
		if( function_exists('the_ad') )the_ad_placement('responsive-desktoponly-beforeheader');}
?>
<div>

	<header id="masthead" class="site-header sticky <?php if ( !wp_is_mobile() ) { echo'triggerRespMenu';}?>" role="banner">
	
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="logo attached-to-menu">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="made in shoreditch"/>
				</a>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<div class="menu-social attached-to-menu hide-mobile">
				<div class="menu-social-item menu-search">
					<span class="icon-search"></span>
					<div id="menu-searchform">						
						<?php include (TEMPLATEPATH . '/searchform.php'); ?>
					</div>
				</div>
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

						
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">


