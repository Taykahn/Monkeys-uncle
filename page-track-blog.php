<?php 
/**
 * Template Name: Track Blog
 */
?>

<?php

	$args = array( 

		'post_type' => 'track_blog',
		'display' => "rand" 

	);

	$track_blog=new WP_Query( $args );

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="track-blog-page col-md-8">

				<?php if ( $track_blog->have_posts() ) : ?>

					<?php while ( $track_blog->have_posts() ) : $track_blog->the_post(); ?>

						<div class="page-header">

							<h2><?php the_title(); ?></h2>

							<?php the_post_thumbnail(); ?>

						</div><!-- end page-header -->

						<?php the_content(); ?>

					<?php endwhile ?>

				<?php endif; ?>

		</div><!-- end row -->

		<?php get_sidebar(); ?>

	</div><!-- end container -->

<?php get_footer(); ?>