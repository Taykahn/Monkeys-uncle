<?php 
/*
  Template Name: The Lift
*/
?>

<?php get_header(); ?>

  <div class="container">

    <div class="row">

      <div class="col-md-8">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">

            <h1><?php the_title(); ?></h1>

          </div><!-- end page-header -->

        <?php endwhile ?>

        <?php endif; ?>

      <?php 

        $args = array( 'post_type' => 'the_lift' );

        $query = new WP_Query( $args );

      ?>

        <section class="row no-max pad">

          <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

            <br>

            <div class="small-6 medium-4 large-3 columns grid-item">

              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?></a>

            </div><!-- end small-6 medium-4 large-3 columns grid-item -->

            <br>

          <?php endwhile ?>

          <?php endif ?>

          <?php wp_reset_postdata(); ?>

        </section><!-- end row no-max pad -->

      </div><!-- col-md-9 -->

      <?php get_sidebar(); ?>

    </div><!-- end row -->

  </div><!-- end container -->

<?php get_footer(); ?>

