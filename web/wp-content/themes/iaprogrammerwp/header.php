<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iaprogrammerwp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<style>
	  /* Make the image fully responsive */
	  .carousel-inner img {
	      width: 100%;
	      height: 300px;
	  }
	  </style>
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<link rel="profile" href="https://gmpg.org/xfn/11">	   
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/bootstrap.bundle.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/bootstrap.bundle.js.map'; ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/bootstrap.bundle.min.map'?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/bootstrap.bundle.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/bootstrap.bundle.min.js.map' ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/bootstrap.js' ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/bootstrap.js.map' ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/customizer.js' ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/navigation.js' ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url').'/js/skip-link-focus-fix.js' ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap-grid.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap-grid.css.map'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap-grid.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap-grid.min.css.map'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap-reboot.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap-reboot.css.map'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap-reboot.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap-reboot.min.css.map'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap.css.map'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url').'/layouts/bootstrap.min.css.map'; ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'iaprogrammerwp' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$iaprogrammerwp_description = get_bloginfo( 'description', 'display' );
			if ( $iaprogrammerwp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $iaprogrammerwp_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div> .site-branding

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'iaprogrammerwp' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav> #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
