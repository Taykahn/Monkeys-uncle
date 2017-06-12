<?php
/**
 * Sidebar hooks
 *
 * @package monkeys-uncle/partials
 *
 */

/**
 * Related Info
 *
 * @package monkeys-uncle/partials
 * @add_action mu_related_info
 * @return void
 */
function mu_related_info_sidebar() {

global $post;

$posts = get_field( 'related_info', $post->ID );

if( $posts ): ?>

	<ul>

	<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

		<?php setup_postdata($post); ?>

		<li>

			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

		</li>

	<?php endforeach; ?>

	</ul>

	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif;

}

add_action( 'mu_related_info', 'mu_related_info_sidebar' );