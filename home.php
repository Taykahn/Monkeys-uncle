<?php 
/**
 * Template Name: Monkey Blog 
 */
get_header() ?>

	<?php 

		$args = array( 'post_type' => 'monkey_blog' );

		$query = new WP_Query( $args );

	?>

	<section id="blog">

	<div class="inner-wrapper container">

		<div class="row">

			<div class="blog-content col-md-8">

				<?php if ( $query->have_posts() ) : ?>

					<?php while ( $query->have_posts() ) : $query->the_post() ?>

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						<p><?php the_content(); ?></p>

					<?php endwhile ?>

				<?php endif ?>

			</div><!--.content-->

			<?php get_sidebar() ?>

		</div><!--.row-->

	</div><!--.container-->

	<nav aria-label="...">

		<ul class="pager">

			<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>

			<li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>

		</ul>

	</nav>

<?php get_footer() ?>

	</section><!--#blog-->
