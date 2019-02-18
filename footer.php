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
<?php if ( has_nav_menu( 'social-media' ) ) {
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


			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cj_webportfolio' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'cj_webportfolio' ), 'WordPress' );
				?>
			</a>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cj_webportfolio' ), 'cj_webportfolio','');
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
