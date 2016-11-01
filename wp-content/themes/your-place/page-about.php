<?php
/**
 * The template for displaying the about page.
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

				<div class="about-text">
					<?php the_content(); ?>
				</div>

			<?php endwhile; // End of the loop.?>

				<div class="entry-content-about">

					<ul class="our-team">
						<?php query_posts('post_type=our_team&order=ASC&posts_per_page=-1'); ?>
							<?php while ( have_posts() ) : the_post(); 
	    						$image = get_field("image");
	    						$name = get_field("name");
	    						$size = "medium";
	    					?>
							
							<li class="our-team-images">
								<?php if($image) : 
									echo wp_get_attachment_image($image, $size);
								endif; ?>
								<p><?php echo $name; ?></p>
							</li>

							<?php endwhile; ?>
						<?php wp_reset_query(); ?>

					</ul>

				</div><!-- .entry-content -->

			<div class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="Logo Big" />
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
