<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cj_webportfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

<?php if ( has_nav_menu( 'social-media' ) ) { //user puts in links in the menu and this will parse the social sites and add an icon with the provided link
              	wp_nav_menu(
              		array(
              			'theme_location'  => 'social-media',
              			'container'       => 'site-info',
              			'container_id'    => 'menu-social-media',
              			'container_class' => 'menu',
              			'menu_id'         => 'menu-social-media-items',
              			'menu_class'      => 'menu-items',
              			'depth'           => 1,
						'fallback_cb'     => '',
						'link_before'     => '<span class="screen-reader-text">',
						'link_after'      => '</span>',
              		)
              	);
			  } ?>
			  <div id="footer-bio">
				  Theme by iosepa.io
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
