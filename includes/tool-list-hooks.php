<?php
/**
 * Tool List hooks
 *
 * @package monkeys-uncle/partials
 *
 */

/**
 * Related Info
 *
 * @package monkeys-uncle/partials
 * @add_action mu_tool_list
 * @return void
 */
function mu_tool_list() {

global $post;

$posts = get_field( 'tool_list', $post->ID );

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

add_action( 'mu_tool_list', 'mu_tool_list' );