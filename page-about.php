<?php 
/**
 * Template Name: About Page 
 */
get_header() ?>

	<div class="parallax" style="background-image: url( '<?php echo the_field( 'hero', 327 ) ?>' )">

		<div class="row">

			<div class="about col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<p><?php the_content(); ?></p>

					<?php endwhile; ?>

				<?php endif; ?>

		</div><!-- end row -->

<?php get_footer(); ?>