<?php
/**
 * The template for displaying the activities page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Your_Place
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				$oasis_garden_image = get_field('oasis_garden_image');
				$oasis_garden_title = get_field('oasis_garden_title');
				$oasis_garden_text = get_field('oasis_garden_text');
				$ark_park_title = get_field('ark_park_title');
				$ark_park_text = get_field('ark_park_text');
				$ark_park_image = get_field('ark_park_image');
				$weekly_activity_image = get_field('weekly_activity_image');
				$weekly_activity_title = get_field('weekly_activity_title');
				$weekly_activity_text = get_field('weekly_activity_text');
				$size = "large"; ?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

					<div class="og">
						<div class="og-image">
							<?php echo wp_get_attachment_image ( $oasis_garden_image, $size ); ?>
						</div>
						<div class="og-info">
							<div class="og-title">
								<h2><?php echo $oasis_garden_title; ?></h2>
							</div>
							<div class="og-text">
								<p><?php echo $oasis_garden_text; ?></p>
							</div>
						</div>
					</div>

					<div class="ap">
						<div class="ap-info">
							<div class="ap-title">
								<h2><?php echo $ark_park_title; ?></h2>
							</div>
							<div class="ap-text">
								<p><?php echo $ark_park_text; ?></p>
							</div>
						</div>
						<div class="ap-image">
							<?php echo wp_get_attachment_image ( $ark_park_image, $size ); ?>
						</div>
					</div>

					<div class="wa">
						<div class="wa-image">
							<?php echo wp_get_attachment_image ( $weekly_activity_image, $size ); ?>
						</div>
						<div class="wa-info">
							<div class="wa-title">
								<h2><?php echo $weekly_activity_title; ?></h2>
							</div>
							<div class="wa-text">
								<p><?php echo $weekly_activity_text; ?></p>
							</div>
						</div>
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