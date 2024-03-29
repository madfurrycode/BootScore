<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootScore
 */

?>

	</div><!-- #content -->
	<div class="footer-widgets-container">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-4">
	        <?php dynamic_sidebar( 'bootscore-footer-widget-one' ); ?>
	      </div>
	      <div class="col-lg-4">
	        <?php dynamic_sidebar( 'bootscore-footer-widget-two' ); ?>
	      </div>
	      <div class="col-lg-4">
	        <?php dynamic_sidebar( 'bootscore-footer-widget-three' ); ?>
	      </div>
	    </div>
	  </div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info text-white">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bootscore' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'bootscore' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'bootscore' ), 'bootscore', '<a href="https://github.com/madfurrycode">Tristan Elliott</a>' );
					?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
