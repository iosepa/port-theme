<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cj_webportfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cj_webportfolio' ); ?></a>

		<header id='nav' class='topNav'>
			<div id="navDiv">

				<?php the_custom_logo(); ?>

				<h1 class="title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php echo get_bloginfo( 'name' ); ?></a>
				</h1>

				<nav id="menu-toggle" class="menu-toggle toggleBox">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</nav>

				<?php wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'		=> 'ul',
				) ); ?>

			</div> <!--navDiv-->
		</header><!-- #masthead -->

  		<div id="popout" class="notPopped">
			<?php wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'menuSide',
				'menu_class'	=> 'hover hoverUl',
			) ); ?>
		</div> <!--popout menu-->

		<div id="modal" onclick="menuToggle()"></div>
	<div id="content" class="site-content">
