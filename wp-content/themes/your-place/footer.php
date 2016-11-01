<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Your_Place
 */

?>

			</div><!-- #content -->
		</div><!-- .main-page -->
	</div><!-- .main-content-area full -->


	<div class="footer-area full">
		<div class="main-page">
			<footer id="colophon" class="site-footer inner" role="contentinfo">
				<div class="site-info">
	
					<p>Your Place Grimsby <br> Company Number: 05321038 <br> Charity Number: 1110927</p>
					<span><?php printf( esc_html__( 'Website Development & Design by %s' ), '<a href="http://jt-digitalmedia.com" rel="designer" target="_blank">JTDigitalMedia</a>' ); ?></span>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- .main-page -->
	</div><!-- .footer-area full -->


<?php wp_footer(); ?>

</body>
</html>
