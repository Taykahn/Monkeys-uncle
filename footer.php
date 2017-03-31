<?php
/**
* Footer
*/
?>
</main>

	<?php 

		$twitter_img = CWS_Theme::cws_get_img( 'twitter-wrap.png', 'Twitter' );

	?>

				<div class="copyright">

					<footer>

						<div class="social-icon">

							<a href="#"><img src="<?php echo esc_url( $twitter_img ) ?>" alt="twitter logo"></a>

						</div><!-- social-icon -->

						<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

					</footer>

				</div><!-- end copyright -->

			<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

		<?php wp_footer(); ?>

	</body>

</html>
