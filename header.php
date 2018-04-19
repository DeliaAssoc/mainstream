<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mainstream_Corp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Slick.js added here due to conflict with responsive menu -->
	<script  async='async' src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<style>.slider, .product-slider {/* stops slides from stacking breifly on page load */ display: none;}</style>
	<?php wp_head(); ?>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'msc' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="aux-header">
			<div class="constrain lg">
				Manufactured in the USA
			</div>
		</div>

		<div class="mid-header">
			<div class="constrain lg flexxed">
				<div class="site-branding">
					<div class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_theme_mod( 'theme_logo' ); ?>" alt="">
						</a>
					</div>
					
				</div><!-- .site-branding -->
				<div class="motto-search">
					<?php
						$msc_description = get_bloginfo( 'description', 'display' );
						if ( $msc_description || is_customize_preview() ) : ?>
						<div class="site-description"><?php echo $msc_description; /* WPCS: xss ok. */ ?></div>
					<?php endif; ?>
					<a href="#" class="search"><i class="fas fa-search"></i></a>
					<!-- <?php get_search_form(); ?> -->
				</div>
			</div>
		</div>

		<div class="bottom-header">
			<div class="constrain lg">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
