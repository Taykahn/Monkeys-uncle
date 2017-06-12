<?php
/**
 * Single Monkey Blog
 */
?>

<?php get_header(); ?>

	<section class="blog">

		<div class="col-md-12">

			<div class="row">

				<?php while ( have_posts()) : the_post(); ?>

					<div class="col-md-8 blog-single">

						<h2><?php the_title(); ?></h2>

						<?php the_post_thumbnail(); ?>

						<p><?php the_content(); ?></p>

						<?php wp_reset_postdata(); ?>

					</div><!-- end col-md-8 -->

				<?php endwhile ?>

				<?php get_sidebar(); ?>

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end blog -->

<?php get_footer(); ?>