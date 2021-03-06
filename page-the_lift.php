<?php 
/**
 * Template Name: The Lift
 */
?>

<?php

	$args = array( 

		'post_type' => 'the_lift',
		'display' => "rand" 

	);

	$the_lift=new WP_Query( $args );

?>

<?php get_header(); ?>

	<div id="lift-page-explanation">

		<h2>On The Lift</h2>

		<p>This page is about all the different cars I have had on my lift.</p>

	</div><!-- end lift-page-explanation -->

	<div class="container">

		<div class="row">

			<div class="col-md-8 lift-page">

				<div class="page-header">

					<?php while ( $the_lift->have_posts() ) : $the_lift->the_post(); ?>

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

						<div class="lift-page-image">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						</div><!-- end lift-page-image -->

					<?php endwhile; // end of the loop. ?>

					<?php wp_reset_postdata() ?>

					<?php get_post(); ?>

				</div><!-- end page-header -->

			</div><!-- col-md-8 -->

			<?php get_sidebar(); ?>

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>
