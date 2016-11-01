<?php
/**
 * The template for displaying the contact page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Your_Place
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="contact-text">
					<?php the_content(); ?>
				</div>

				<div class="entry-content">
					
					<section class="contact-details">
						<h2>Address</h2>
						<p>236 Wellington Street</p>
						<p>Great Grimsby</p>
						<p>North East Lincolnshire</p>
						<p>DN32 7JP</p>
						<h2>Telephone</h2>
						<p>01472 322 557</p>
						<h2>Opening Hours</h2>
						<p>Monday - Friday: 10.00am to 12.00pm & 2.00pm to 4.00pm</p>
					</section>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d592.3652242806975!2d-0.06662751689853785!3d53.56739049351001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x608c6d9dd7ce7159!2sYour+Place!5e0!3m2!1sen!2sus!4v1476709897079" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop.?>
			<div class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="Logo Big" />
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();