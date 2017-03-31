<?php 
/**
 * Template Name: Monkey Blog 
 */
get_header() ?>

	<?php 

		$args = array( 'post_type' => 'monkey_blog' );

		$query = new WP_Query( $args );

	?>

	<section id="blog">

		<div class="inner-wrapper container">

			<div class="row">

				<div class="content col-md-8">

					<?php if ( $query->have_posts() ) : ?>

						<?php while ( $query->have_posts() ) : $query->the_post() ?>

							<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

							<?php the_excerpt() ?>

							<?php the_post_thumbnail(); ?>

						<?php endwhile ?>

					<?php endif ?>

				</div><!--.content-->

				<aside class="col-md-4">

				<?php get_sidebar() ?>

				</aside>

			</div><!--.row-->

		</div><!--.container-->

	</section><!--#blog-->

<?php get_footer() ?>
