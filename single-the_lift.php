<?php
/**
 * Single The Lift
 */

get_header() ?>

	<section class="two-column row no-max pad">

		<div class="col-md-12">

			<div class="row single-lift">

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="single-lift-page-header">

							<h2><?php the_title(); ?></h2>

						</div><!-- single-lift-page-header -->

						<!-- Primary Column -->

						<div class="single-lift-image col-md-5">

								<?php the_post_thumbnail(); ?>

						</div><!-- end primary -->

						<!--Secondary Column-->

 						<div class="single-lift-primary col-md-7">

							<p><?php the_content(); ?></p> 

						</div><!-- end secondary -->

					<?php endwhile ?>

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end two-column row no-max pad -->

<?php get_footer(); ?>