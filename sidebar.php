<?php 
/**
* Sidebar
*/
?>
 <?php

$weather2_img = CWS_Theme::cws_get_img( 'weather2.png', 'Weather Image' ); 

?>

<div class="col-md-4 sidebar">

	<?php if ( ! dynamic_sidebar( 'page' )  ): ?>

	<div class="weather2">

		<h3>Local Weather</h3>

		<a href="#"><img src="<?php echo esc_url( $weather2_img ) ?>"></a>

	</div><!-- end weather2 -->

<br>

	<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>

		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">

			<?php dynamic_sidebar( 'home_right_1' ); ?>

		</div><!-- #primary-sidebar -->

	<?php endif; ?>



	<?php endif; ?>

</div><!-- end col-md-3 sidebar -->







