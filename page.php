<?php 
/**
  Template Name: Page
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

            <?php the_content(); ?>

        <?php endwhile; else: ?>

          <div class="page-header">

            <h1>Oh no!</h1>

          </div><!-- end page-header -->

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

    </div><!-- end row -->

        <?php get_sidebar(); ?>

  </div><!-- end container -->

<?php get_footer(); ?>