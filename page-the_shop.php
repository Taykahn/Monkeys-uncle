<?php 
/**
 * Template Name: The Shop
 */
?>

<?php

	$args = array( 'post_type' => 'the_shop' );

	$the_shop=new WP_Query( $args );

	?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-8 lift-page">

				<div class="page-header">

					<?php while ( $the_shop->have_posts() ) : $the_shop->the_post(); ?>

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

						<div class="lift-page-image">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						</div><!-- end lift-page-image -->

						<p><?php the_content(); ?></p>

					<?php endwhile; // end of the loop. ?>

					<?php wp_reset_postdata() ?>

					<?php get_post(); ?>

				</div><!-- end page-header -->

			</div><!-- col-md-8 -->

			<?php get_sidebar(); ?>

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>