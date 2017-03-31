<?php
/**
* Header
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>

      <?php wp_title( '|', true, 'right' ); ?>

      <?php bloginfo('name'); ?>

    </title>

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <?php wp_head() ?>

    <?php 
      global $post;
      global $cws_img_path;
      $post_slug = isset( $post->post_name ) ? $post->post_name : null;
      $page_slug = 'page-'.$post_slug;
      $fouc      = 'fouc';
      $classes   = array( $page_slug );
    ?>

  </head>

  <body <?php body_class( $classes ) ?>>

    <nav class="navbar navbar-inverse navbar-fixed-top">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button><!-- end navbar-toggle collapsed -->

        </div><!-- end navbar-header -->

        <div id="navbar" class="navbar-collapse collapse">

          <?php 
            $args = array(
              'menu'          => 'header-menu',
              'menu_class'    => 'nav navbar-nav',
              'container'     => 'false'
            );
            wp_nav_menu( $args );
          ?>

        </div><!--/.navbar-collapse -->

      </div><!-- end container -->

    </nav><!-- end navbar navbar-inverse navbar-fixed-top -->

    <?php

      $banner_img = CWS_Theme::cws_get_img( 'monkey-tongue.png', 'Monkeys Uncle' ); 

    ?>

      <header>

        <div class="container-fluid no pad">

          <div class="banner no-pad" style="background: url( '<?php echo $banner_img ?>' ) 50%/cover no-repeat; height: 500px;">

            <div class="container"> 

              <div class="title col-sm-12">

                <div class="h1-title col-sm-12' style="float: right;">
          
                  <h1>Monkey's Uncle</h1>

                </div><!-- end .h1-title -->

              </div><!-- end title -->

              </div><!-- end container -->

            </div><!-- end banner -->

          </div><!-- end container-fluid -->

      </header>

    <hr>

   











