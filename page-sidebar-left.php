<?php 
/**
* Template Name: Left Sidebar
*/
?>
<?php get_header(); ?>

<section class="two-column row no-max pad">
	
	<div class="small-12 columns">
      	
		<div class="row">
          
			<!-- Primary Column -->
         		
			<div class="primary">

				<div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						  <h1><?php the_title(); ?></h1>
						  <p><?php the_content(); ?></p>

					<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, no pages found.' ); ?></p>

					<?php endif; ?> 

				</div><!-- small-12 medium-7 medium-offset-1 medium-push-4 columns -->
			
			</div><!-- end primary --> 
		
		<?php get_sidebar( 'page' ); ?>

		</div><!-- end row -->

	</div><!-- small-12 columns -->
		
</section><!-- two-column row no-max pad -->
              
<?php get_footer(); ?>
