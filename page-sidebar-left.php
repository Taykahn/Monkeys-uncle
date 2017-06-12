<?php 
/**
 * Template Name: Left Sidebar
 */

get_header();

?>


	<section class="two-column row no-max pad">

		<div class="small-12 columns">

			<div class="row">

				<!-- Primary Column -->

				<div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">

					<div class="primary">

						<?php if ( have_posts() ) : ?>

							<?php while ( have_posts() ) : the_post(); ?>

								<h2><?php the_title(); ?></h2>

								<p><?php the_content(); ?></p>

							<?php endwhile; ?>

						<?php endif; ?> 

					</div><!-- end primary -->

				</div><!-- end small-12 --> 

			<?php get_sidebar( 'page' ); ?>

			</div><!-- row -->

		</div><!-- end small-12 columns -->

	</section><!-- end two-column -->

<?php get_footer(); ?>