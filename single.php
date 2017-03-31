<?php
/**
* Single Post Page
*/
?>

<?php get_header(); ?>

	<section class="blog">

		<div class="col-md-12">

			<div class="row">

			<?php while ( have_posts()) : the_post(); ?>

				<div class="col-md-8">

					<h2><?php the_title(); ?></h2>

					<hr>

					<?php the_content(); ?>

					<?php the_post_thumbnail(); ?>

			<?php endwhile ?>

			<?php wp_reset_postdata(); ?>

				</div><!-- end col-md-8 -->

				<div class="col-md-4">

					<?php get_sidebar(); ?>

				</div><!-- end col-md-4 -->

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end blog -->

<?php get_footer(); ?>