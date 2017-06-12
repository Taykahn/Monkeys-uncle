<?php
/**
 * Template Name: Tool-List Archive
 */

global $post;

$post_id = $post->ID;

$args = array( 

	'post_type' => 'tool_list',

);

$tool_list=new WP_Query( $args );

get_header() ?>

<section id="tool-list-archive" class="container">

	<div class="row tool-list">

		<article class="content col-md-8">

			<?php if ( $tool_list->have_posts() ) : ?>

				<?php while ( $tool_list->have_posts() ) : $tool_list->the_post(); ?>

					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>

				<?php endwhile ?>

			<?php endif; wp_reset_postdata() ?>

		</article><!--.content-->

		<aside id="sidebar" class="col-md-4">

			<?php get_template_part( 'templates/tool-list-part' ) ?>

		</aside>

	</div><!--.row-->

</section><!--.container-->

<?php get_footer() ?>