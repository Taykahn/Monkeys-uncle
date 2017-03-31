<?php get_header(); ?>

	<section class="three-column row no-max pad">

		<div class="col-md-12">

			<div class="row">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- Primary Column -->

					<div class="col-sm-5">

						<div class="primary">

							<h1><?php the_title(); ?></h1>

							<p><?php the_content(); ?></p>

						</div><!-- end primary -->

					</div><!-- end col-md-5 --> 

					<!--Secondary Column-->

					<div class="col-sm-3">

						<div class="secondary">

							<?php the_field( 'images' ); ?>

						</div><!-- end secondary -->

					</div><!-- end col-md-6 --> 

					<div class="col-sm-4">

						<div class="tertiary">

							<div class="warnings" style="background-color: yellow; border: solid; margin-right: 30px">

								<?php the_field( 'warnings' ); ?>

							</div>

							<div class="required-tools" style="border: solid; margin-top: 5px; margin-right: 30px;">

								<?php the_field( 'required_tools' ); ?>

							</div>

						</div><!-- end tertiary -->

					</div><!-- end col-sm-4 -->

				<?php endwhile ?>

				<?php endif ?>

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end two-column row no-max pad -->

<hr>

<?php get_footer(); ?>