<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and <header>
 *
 * @package Horizon_Theme
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="navbar-default main-navigation" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<?php if ( horizon_get_theme_mod( 'logo' ) ) : ?>
					<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img class="customizer-logo" src="<?php echo esc_attr( horizon_get_theme_mod( 'logo' ) ); ?>" alt="<?php _e('Site Logo', 'horizon-theme'); ?>">
					</a>
				<?php endif; ?>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
				<span class="sr-only"><?php _e( 'Toggle navigation', 'horizon-theme' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-main-navigation navbar-right">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'depth'          => 2,
							'container'      => false,
							'menu_class'     => 'nav navbar-nav',
							'fallback_cb'    => 'Horizon_Theme_Nav_Walker::fallback',
							'walker'         => new Horizon_Theme_Nav_Walker()
						)
					);
				?>
			</div><!-- .navbar-collapse -->
		</div><!-- .container -->
	</header><!-- .main-navigation -->

