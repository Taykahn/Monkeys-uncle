<?php
/**
 * Single Track Blog
 */
?>

<?php get_header(); ?>

	<section class="blog">

		<div class="container track-blog-single col-md-12">

			<div class="row">

				<?php while ( have_posts()) : the_post(); ?>

					<h2><?php the_title(); ?></h2>

					<?php the_post_thumbnail(); ?>

					<p><?php the_content(); ?></p>

					<div class="video-container">

						<?php the_field('track_videos'); ?>

					</div><!-- end video-container -->

				<?php endwhile ?>

				<?php wp_reset_postdata(); ?>

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end blog -->

<?php get_footer(); ?>