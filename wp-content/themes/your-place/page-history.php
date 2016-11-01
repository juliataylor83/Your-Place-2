<?php
/**
 * The template for displaying the history page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Your_Place
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();
				
				$text_1 = get_field("text_1");
				$image_1 = get_field("image_1");
	    		$text_2 = get_field("text_2");
				$image_2 = get_field("image_2");
				$text_3 = get_field("text_3");
				$image_3 = get_field("image_3");
	    		$text_4 = get_field("text_4");
				$image_4 = get_field("image_4");
				$text_5 = get_field("text_5");
				$image_5 = get_field("image_5");
	    		$text_6 = get_field("text_6");
				$image_6 = get_field("image_6");
				$text_7 = get_field("text_7");
				$image_7 = get_field("image_7");
	    		$text_8 = get_field("text_8");
				$image_8 = get_field("image_8");
				$text_9 = get_field("text_9");
	    		$size = "large"; ?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="weekly-text">
						<?php the_content(); ?>
					</div>

					<div class="entry-content-history">
						<p><?php echo $text_1; ?></p>
						<figure>
	    					<?php echo wp_get_attachment_image($image_1, $size); ?>
	    				</figure>
						<p><?php echo $text_2; ?></p>
						<figure>
	    					<?php echo wp_get_attachment_image($image_2, $size); ?>
	    				</figure>
	    				<p><?php echo $text_3; ?></p>
						<figure>
	    					<?php echo wp_get_attachment_image($image_3, $size); ?>
	    				</figure>
						<p><?php echo $text_4; ?></p>
						<figure>
	    					<?php echo wp_get_attachment_image($image_4, $size); ?>
	    				</figure>
	    				<p><?php echo $text_5; ?></p>
						<figure>
	    					<?php echo wp_get_attachment_image($image_5, $size); ?>
	    				</figure>
						<p><?php echo $text_6; ?></p>
						<figure>
	    					<?php echo wp_get_attachment_image($image_6, $size); ?>
	    				</figure>
	    				<p><?php echo $text_7; ?></p>
						<figure>
	    					<?php echo wp_get_attachment_image($image_7, $size); ?>
	    				</figure>
						<p><?php echo $text_8; ?></p>
						<figure>
	    					<?php echo wp_get_attachment_image($image_8, $size); ?>
	    				</figure>
	    				<p><?php echo $text_9; ?></p>
					</div>

				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop.?>
			<div class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="Logo Big" />
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();