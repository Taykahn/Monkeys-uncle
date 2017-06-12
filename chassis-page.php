<?php 
/**
 * Template Name: Chassis Archive
 */
?>

<?php get_header(); ?>

	<div class="chassis-title">

		<h2>Pick Your Chassis</h2>

	</div><!-- end chassis-title -->

	<hr>

	<div class="container">

		<div class="row">

			<div class="col-md-8">

				<?php if( have_rows('repeater') ): ?>

					<ul class="slides">

						<?php while( have_rows('repeater') ): the_row(); 

							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$text = get_sub_field('text');
 
						?>

							<li class="slide">

								<h2><?php echo $title; ?></h2>

								<p><?php echo $text; ?></p>

								<img src="<?php echo $image; ?>"/>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div><!-- end col-md-8 -->

		<?php get_sidebar(); ?>

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>