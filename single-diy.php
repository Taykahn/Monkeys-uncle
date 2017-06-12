<?php
/**
 * Template Name: DIY Single
 */

global $post;

$post_id = $post->ID;

?>

<?php get_header() ?>

<section class="diy-page">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="diy-single-title">

				<h2><?php the_title(); ?></h2>

			</div><!-- end diy-single-title --><br>

				<section class="three-column row no-max pad">

					<div class="col-md-12">

						<div class="row diy-top-boxes">

							<!-- Primary Column -->

							<div class="diy-single-top-bar-wrapper">

								<div class="col-md-4">

									<div class="warnings">

										<h2>Warning!!!</h2>

										<p>This is a write up on how I did this project. I am not a professional and not responsible for anything you do to your car.</p>

									</div><!-- end warnings -->

								</div><!-- end col-md-4 -->

							<!-- Secondary Column -->

								<div class="col-md-4">

									<div class="torque-spec">

										<h2>Torque Specifications</h2>

										<?php the_field('torque_specs'); ?>

									</div><!-- end torque-spec -->

								</div><!-- end col-md-4 -->

							<!-- Tertiary Column -->

								<div class="col-md-4">

									<div class="required-tools">

										<h2>Required Tools</h2>

										<?php get_template_part( 'templates/tool-list-part' ) ?>

									</div><!-- end required-tools -->

								</div><!-- end col-md-4 -->

							</div><!-- end diy-single-top-bar-wrapper -->

						</div><!-- end row -->

					</div><!-- end col-md-12 -->

				</section><!-- end two-column -->

				<section class="one-column row no-max pad">

					<div class="col-md-12">

						<div class="row">

							<div class="parts-list">

							<h2>Parts List</h2>

							<?php the_field('parts_list'); ?>

							</div><!-- end parts-list -->

						</div><!-- end row -->

					</div><!-- end col-md-12 -->

				</section><!-- one-column -->

				<section class="one-column row no-max pad">

					<div class="col-md-12">

						<div class="row">

							<div class="diy-single-text">

								<h2>The Procedure</h2>

								<p><?php the_field('diy_procedure'); ?></p>

							</div><!-- end diy-single-text --> 

						</div><!-- end row -->

					</div><!-- end col-md-12 -->

				</section><!-- end one-column -->

				<section class="one-column row no-max pad">

					<div class="col-md-12">

						<div class="row">

							<!-- Tertiary Column -->

								<div class="col-md-12 diy-single-image-gallery">

									<div class="row">

										<h2><?php the_field('gallery_title'); ?></h2>

										<?php $images = get_field('image_gallery'); ?>

										<?php if( $images ): ?>

										<ul>

										<?php foreach( $images as $image ): ?>

										<div class="col-md-4 ">

											<li>

												<a href="<?php echo $image['url']; ?>">

												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

												<p><?php echo $image['caption']; ?></p>

												<p><?php echo $image['description']; ?></p>

											</li>

										</div>

										<?php endforeach; ?>

									</ul>

								<?php endif ?>

							</div><!-- end col-md-4 -->

						</div><!-- end col-md-12 diy-single-image-gallery -->

					</div><!-- end row -->

				</div><!-- end col-md-12 -->

			</section><!-- end one-column -->

		<?php wp_reset_postdata(); ?>

		<?php endwhile ?>

	<?php endif ?>

</section><!-- end diy-page -->

<?php get_footer(); ?>