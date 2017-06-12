<?php
/**
 * Chasis Archive
 */

global $post;

$post_id = $post->ID;

$args = array( 

	'post_type' => 'chassis',

);

$chassis=new WP_Query( $args );

get_header() ?>

<section id="chassis-archive" class="container">

	<div class="row">

		<article class="content col-md-8">

			<?php if ( $chassis->have_posts() ) : ?>

				<?php while ( $chassis->have_posts() ) : $chassis->the_post(); ?>

					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>

				<?php endwhile ?>

			<?php endif; wp_reset_postdata() ?>

		</article><!--.content-->

		<aside id="sidebar" class="col-md-4">

			<?php get_template_part( 'sidebars/chassis-sidebar' ) ?>

		</aside>

	</div><!--.row-->

</section><!--.container-->

<?php get_footer() ?>