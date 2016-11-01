<?php
/**
 * The template for displaying the homepage.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Your_Place
 */

get_header(); ?>

	<div id="primary-frontpage" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				$column_1_title = get_field('column_1_title');
				$column_1_text = get_field('column_1_text');
				$column_1_text_2 = get_field('column_1_text_2');
				$column_1_text_3 = get_field('column_1_text_3');
				$column_1_text_4 = get_field('column_1_text_4');
				$column_2_title = get_field('column_2_title');
				$column_2_text = get_field('column_2_text');
				$column_2_text_2 = get_field('column_2_text_2');
				$column_3_title = get_field('column_3_title');
				$column_3_text = get_field('column_3_text');
				$column_3_text_2 = get_field('column_3_text_2');
				$column_3_text_3 = get_field('column_3_text_3'); ?>

				<div class="entry-content">
					<div class="weekly-text">
						<?php the_content(); ?>
					</div>
					<div class="column1">
						<h2><?php echo $column_1_title; ?></h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/get-involved.png" alt="Thumbs Up" />
						<p><?php echo $column_1_text; ?></p>
						<p><?php echo $column_1_text_2; ?></p>
						<a class="button" href="<?php echo home_url(); ?>/what-we-do/weekly-activities">Weekly Activities</a>
						<p><?php echo $column_1_text_3; ?></p>
						<a class="button" href="<?php echo home_url(); ?>/oasis-garden">Oasis Garden</a>
					</div>
					<div class="column2">
						<h2><?php echo $column_2_title; ?></h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/meet-team.png" alt="Cuppa Tea" />
						<p><?php echo $column_2_text; ?></p>
						<a class="button" href="<?php echo home_url(); ?>/about">Family Photos</a>
						<p><?php echo $column_2_text_2; ?></p>
						<a class="button" href="http://yourplace:8888/wp-content/uploads/2016/10/Your-Place-Volunteer-Application-Form.pdf" target="_blank">Volunteer</a>
					</div>
					<div class="column3">
						<h2><?php echo $column_3_title; ?></h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/news-events.png" alt="Magnifying Glass" />
						<p><?php echo $column_3_text; ?></p>
						<p><?php echo $column_3_text_2; ?></p>
						<a class="button" href="<?php echo home_url(); ?>/what-we-do/special-events">Special Events</a>
					</div>
					
				</div><!-- .entry-content -->

			<?php endwhile; // End of the loop.?>

			<div class="header-logo-frontpage">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="Logo Big" />
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer();