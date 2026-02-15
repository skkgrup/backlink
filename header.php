header php <?php /** * The header for our theme. * * Displays all of the <head> section and everything up till <div id="content"> * * @package ThemeGrill * @subpackage ColorNews * @since ColorNews 1.0 */ ?><!DOCTYPE html> <html <?php language_attributes(); ?>> <head> <meta charset="<?php bloginfo( 'charset' ); ?>"> <meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="profile" href="https://gmpg.org/xfn/11"> <?php wp_head(); ?> </head> <body <?php body_class(); ?>> <?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?> <?php do_action( 'colornews_before' ); ?> <div id="page" class="hfeed site"> <?php do_action( 'colornews_before_header' ); ?> <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'colornews' ); ?></a> <header id="masthead" class="site-header" role="banner"> <div class="top-header-wrapper clearfix"> <div class="tg-container"> <div class="tg-inner-wrap"> <?php if ( get_theme_mod( 'colornews_header_top_menu_display', 0 ) == 1 ) { ?> <?php if ( get_theme_mod( 'colornews_header_top_menu_category_display', 0 ) == 1 ) { ?> <div class="category-toogle-wrap"> <div class="category-toggle-block"> <span class="toggle-bar"></span> <span class="toggle-bar"></span> <span class="toggle-bar"></span> </div> <?php wp_nav_menu( array( 'theme_location' => 'category', 'menu_id' => '', 'container_class' => 'category-menu menu hide', 'fallback_cb' => false, 'items_wrap' => '<ul>%3$s</ul>', ) ); ?> </div><!-- .category-toogle-wrap end --> <?php } ?> <div class="top-menu-wrap"> <?php colornews_date_display(); ?> </div> <?php colornews_social_menu(); ?> <?php } ?> </div><!-- .tg-inner-wrap end --> </div><!-- .tg-container end --> <?php if ( get_theme_mod( 'colornews_header_image_position', 'position_two' ) == 'position_one' ) { colornews_render_header_image(); } ?> </div><!-- .top-header-wrapper end --> <?php if ( ( get_theme_mod( 'colornews_header_logo_placement', 'header_text_only' ) == 'show_both' ) ) { $show_both_class = 'show-both'; } else { $show_both_class = ''; } ?> <div class="middle-header-wrapper <?php echo $show_both_class; ?> clearfix"> <div class="tg-container"> <div class="tg-inner-wrap"> <?php if ( ( get_theme_mod( 'colornews_header_logo_placement', 'header_text_only' ) == 'show_both' || get_theme_mod( 'colornews_header_logo_placement', 'header_text_only' ) == 'header_logo_only' ) ) { ?> <div class="logo"> <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo( $blog_id = 0 ) ) { colornews_the_custom_logo(); } ?> </div><!-- #logo --> <?php } $screen_reader = ''; if ( get_theme_mod( 'colornews_header_logo_placement', 'header_text_only' ) == 'header_logo_only' || ( get_theme_mod( 'colornews_header_logo_placement', 'header_text_only' ) == 'disable' ) ) { $screen_reader = 'screen-reader-text'; } ?> <div id="header-text" class="<?php echo $screen_reader; ?>"> <?php if ( is_front_page() || is_home() ) : ?> <h1 id="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> </h1><!-- #site-title --> <?php else : ?> <h3 id="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> </h3><!-- #site-title --> <?php endif; ?> <?php $description = get_bloginfo( 'description', 'display' ); if ( $description || is_customize_preview() ) : ?> <p id="site-description"><?php echo $description; ?></p> <?php endif; ?><!-- #site-description --> </div><!-- #header-text --> <div class="header-advertise"> <?php if ( is_active_sidebar( 'colornews_header_sidebar' ) ) { // Calling the header sidebar if it exists. if ( ! dynamic_sidebar( 'colornews_header_sidebar' ) ): endif; } ?> </div><!-- .header-advertise end --> </div><!-- .tg-inner-wrap end --> </div><!-- .tg-container end --> </div><!-- .middle-header-wrapper end --> <?php if ( get_theme_mod( 'colornews_header_image_position', 'position_two' ) == 'position_two' ) { colornews_render_header_image(); } ?> <div class="bottom-header-wrapper clearfix"> <div class="bottom-arrow-wrap"> <div class="tg-container"> <div class="tg-inner-wrap"> <?php if ( get_theme_mod( 'colornews_home_icon_display', 0 ) == 1 ) { ?> <div class="home-icon"> <a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i></a> </div><!-- .home-icon end --> <?php } ?> <nav id="site-navigation" class="main-navigation clearfix" role="navigation"> <div class="menu-toggle hide"><?php _e( 'Menu', 'colornews' ); ?></div> <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'nav', 'container' => false, ) ); ?> </nav><!-- .nav end --> <?php if ( ( get_theme_mod( 'colornews_search_icon_in_menu', 0 ) == 1 ) || ( get_theme_mod( 'colornews_random_post_in_menu', 0 ) == 1 ) ) { ?> <div class="share-search-wrap"> <div class="home-search"> <?php if ( get_theme_mod( 'colornews_search_icon_in_menu', 0 ) == 1 ) { ?> <div class="search-icon"> <i class="fa fa-search"></i> </div> <div class="search-box"> <div class="close"><?php _e( '&times;', 'colornews' ); ?></div> <?php get_search_form(); ?> </div> <?php } ?> <?php if ( get_theme_mod( 'colornews_random_post_in_menu', 0 ) == 1 ) { colornews_random_post(); } ?> </div> <!-- home-search-end --> </div> <?php } ?> </div><!-- #tg-inner-wrap --> </div><!-- #tg-container --> </div><!-- #bottom-arrow-wrap --> </div><!-- #bottom-header-wrapper --> <?php if ( get_theme_mod( 'colornews_header_image_position', 'position_two' ) == 'position_three' ) { colornews_render_header_image(); } ?> <?php if ( get_theme_mod( 'colornews_breaking_news', 0 ) == 1 ) { colornews_breaking_news(); } ?> </header><!-- #masthead --> <?php do_action( 'colornews_after_header' ); ?> <?php do_action( 'colornews_before_main' ); ?><?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	 <link rel="profile" href="https://gmpg.org/xfn/11"> 
	 <?php
} 
?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NF85TJ3W');</script>
<!-- End Google Tag Manager -->
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1CV3JYN3N7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1CV3JYN3N7');
</script>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NF85TJ3W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
