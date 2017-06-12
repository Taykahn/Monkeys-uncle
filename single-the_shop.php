<?php
/**
 * Single The Shop
 */

get_header() ?>

	<div class="container">

		<div class="row">

			<div class="col-md-12 shop-single">

				<?php if (have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="shop-single-content">

							<h2><?php the_title(); ?></h2>

							<p><?php the_content(); ?></p>

						</div><!-- end shop-single-content -->

						<div class="image-gallery">

							<?php $images = get_field('images'); ?>

							<?php if( $images ): ?>

								<ul>

									<?php foreach( $images as $image ): ?>

									<div class="col-md-6">

										<li>

											<a href="<?php echo $image['url']; ?>">

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

											<p><?php echo $image['caption']; ?></p>

										</li>

									</div>

									<?php endforeach; ?>

								</ul>

							<?php endif; ?>

						</div><!-- end image-gallery -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end shop-single -->

		</div><!-- end row -->

<?php get_footer(); ?>