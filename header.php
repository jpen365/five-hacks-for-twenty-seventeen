<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php if ( is_home() || has_post_thumbnail() && ( is_single() || ( is_home() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) ) : ?>
			<span class="has-header-image twentyseventeen-front-page home">
				<div id="page-header" class="custom-header">
					<div id="custom-header-media" class="custom-header-media" >
						<div id="wp-custom-header" class="wp-custom-header">
							<?php if ( is_home() && ! twentyseventeen_is_frontpage() ) {
								$page_for_posts = get_option( 'page_for_posts' );
								echo get_the_post_thumbnail( $page_for_posts );
							} else {
								the_post_thumbnail( 'twentyseventeen-featured-image' );
							} ?>
						</div>
					</div>
					<div class="site-branding">
						<div class="wrap">
							<div class="site-branding-text">
								<h1 class="site-title">
									<?php if ( is_home() && ! twentyseventeen_is_frontpage() ) {
										$page_for_posts = get_option( 'page_for_posts' );
										echo get_the_title( $page_for_posts );
									} else {
										the_title();;
									} ?>
								</h1>
							</div>
						</div>
					</div>
					<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
				</div>
			</span>
		<?php else : get_template_part( 'template-parts/header/header', 'image' ); endif;?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
