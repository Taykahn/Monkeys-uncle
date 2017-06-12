<?php
/**
 * Single Post Page
 */
?>

<?php get_header(); ?>

	<section class="blog">

		<div class="col-md-12">

			<div class="row">

				<div class="col-md-9">

					<?php while ( have_posts()) : the_post(); ?>

						<h2><?php the_field('title'); ?></h2>

						<img src="<?php the_field(); ?>" />

						<?php the_field('text'); ?>

					<?php endwhile ?>

					<?php wp_reset_postdata(); ?>

				</div><!-- end col-md-8 -->

				<?php get_sidebar(); ?>

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end blog -->

<?php get_footer(); ?>