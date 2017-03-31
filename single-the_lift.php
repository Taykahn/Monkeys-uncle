<?php
/**
 * Single Lift
 */
get_header() ?>

	<section class="two-column row no-max pad">

		<div class="col-md-12">

			<div class="row">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- Primary Column -->

					<div class="col-md-6">

						<div class="primary">

							<h1><?php the_title(); ?></h1>

							<p><?php the_content(); ?></p>

						</div><!-- end primary -->

					</div><!-- end col-md-6 --> 

					<!--Secondary Column-->

					<div class="col-md-6">

						<div class="secondary">

							<?php the_post_thumbnail(); ?>

						</div><!-- end secondary -->

					</div><!-- end col-md-6 --> 

				<?php endwhile ?>

				<?php endif ?>

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end two-column row no-max pad -->

	<hr>

<?php get_footer(); ?>