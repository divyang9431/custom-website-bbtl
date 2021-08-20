<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'customtheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'customtheme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'customtheme' ), 'customtheme', '<a href="https://divyanghp.in">Divyang Patel</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.10.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/framework7.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.swipebox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fitvids.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/email.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/audio.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/my-app.js"></script>

</body>
</html>
