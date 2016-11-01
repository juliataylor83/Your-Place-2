<?php
	
function fca_qc_add_marketing_metaboxes( $post ) {

	add_meta_box( 
		'fca_qc_marketing_metabox',
		__( 'Want More Features?', 'quiz-cat' ),
		'fca_qc_render_marketing_metabox',
		null,
		'side',
		'default'
	);
	
	add_meta_box( 
		'fca_qc_quick_links_metabox',
		__( 'Quick Links', 'quiz-cat' ),
		'fca_qc_render_quick_links_metabox',
		null,
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes_fca_qc_quiz', 'fca_qc_add_marketing_metaboxes', 11, 1 );

function fca_qc_render_marketing_metabox( $post ) {
	
	ob_start(); ?>

	<h3><?php _e( "Upgrade To Premium and Build Even Better Quizzes. You'll Get:", 'quiz-cat' ); ?></h3>

	<ul>
		<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Personality Quizzes', 'quiz-cat' ); ?></li>
		<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Social Sharing', 'quiz-cat' ); ?></li>
		<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Email Capture', 'quiz-cat' ); ?></li>
		<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Zapier Integration', 'quiz-cat' ); ?></li>
		<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Image-based quizzes', 'quiz-cat' ); ?></li>		
		<li><div class="dashicons dashicons-yes"></div> <?php _e( 'Priority Email Support', 'quiz-cat' ); ?></li>
	</ul>
    
	<p style="text-align: center;">
		<a href="https://fatcatapps.com/quizcat" target="_blank" class="button button-primary button-large"><?php _e('Upgrade Now', 'quiz-cat'); ?></a>
	</p> 

	<?php 
		
	echo ob_get_clean();
}

function fca_qc_render_quick_links_metabox( $post ) {
	
	ob_start(); ?>

	<ul class='fca_qc_marketing_checklist'>
		<li><div class="dashicons dashicons-arrow-right"></div><a href="https://youtu.be/CQe3VsX_Xag" target="_blank"><?php _e( 'Need help getting started? Watch a video tutorial.', 'quiz-cat' ); ?></a> </li>
		<li><div class="dashicons dashicons-arrow-right"></div><a href="http://wordpress.org/support/plugin/quiz-cat" target="_blank"><?php _e( 'Problems or Suggestions? Get help here.', 'quiz-cat' ); ?></a> </li>
		<li><div class="dashicons dashicons-arrow-right"></div><strong><a href="https://wordpress.org/support/plugin/quiz-cat/reviews/" target="_blank"><?php _e( 'Like this plugin?  Please leave a review.', 'quiz-cat' ); ?></strong></a> </li>
	</ul>

	<?php 
		
	echo ob_get_clean();
}