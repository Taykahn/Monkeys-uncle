<?php 
/*
 * Template Name: Chassis Page
 */
?>

<?php

	$args = array( 

		'post_type' => 'chassis',

	);

	$chassis=new WP_Query( $args );
	$monkey_wrench=CWS_Theme::cws_get_img('monkey-wrench.png');


?>

<?php get_header(); ?>

	<div class="container">

		<div class="row chassis-row">

			<div class="chassis-header">

				<h2>Chassis</h2>

				<img src="<?php echo esc_url( $monkey_wrench) ?>" alt="monkey-wrench">

				<p>Select the Chassis to see DIY repairs.</p>

			</div><!-- end chassis-header -->

			<div class="col-md-8 page-diy">

				<?php while ( $chassis->have_posts() ) : $chassis->the_post(); ?>

					<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

				<?php endwhile; // end of the loop. ?>

				<?php wp_reset_postdata() ?>

				<?php get_post(); ?>

			</div><!-- col-md-8 page-diy -->

			<?php get_sidebar(); ?>

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>

