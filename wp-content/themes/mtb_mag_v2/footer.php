<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

				<?php 
					if ( ! dynamic_sidebar( 'social-media' ) ) : 			
					endif;
				?>


			<div class="site-info">
				<?php// do_action( 'twentyfourteen_credits' ); ?>
			</div><!-- .site-info -->
			<div class="copy-right">&copy;MTB-MAG.COM 2015 All Rights Reserved</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	
	<?php wp_footer(); ?>
</body>
</html>