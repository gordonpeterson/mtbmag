<?php
/**
 */

get_header('gordon'); ?>

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				$count = 0;
				$increment = 0;
				$adArray = array(4,5,6,10,14,15);
				$adText = 'You have not added content for this ad space. Go to your widgets section and select ';



				while ( have_posts() ) : the_post();
					$count++;

					if (array_key_exists($increment, $adArray)) {
						$currentIndex = $adArray[$increment];
					}
					

						if( $count == $currentIndex ){

							if( $currentIndex == 4 ){ //...ad1 300x250
							?>
										<?php if ( ! dynamic_sidebar( 'ad-widget1' ) ) : ?>
												<div class="widget no-widget">
													<p><?php _e("$adText ad1 300x250", 'twentytwelve'); ?></p>
												</div>
											<?php endif; ?>
							<?php 
							}else if( $currentIndex == 5 ){ //...ad2 300x250
							 ?>
										<?php if ( ! dynamic_sidebar( 'ad-widget2' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText  ad2 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
							 <?php 
							}else if( $currentIndex == 6 ){ //...ad3 727z90
								?>
										<?php if ( ! dynamic_sidebar( 'ad-widget3' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText ad3 272x90", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
								<?php 
							}else if( $currentIndex == 10 ){ //...ad2 300x250
							 ?>
										<?php if ( ! dynamic_sidebar( 'ad-widget4' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText ad4 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
							 <?php 

							} elseif ($currentIndex == 14) { //...ad5 300x250
								?>
										<?php if ( ! dynamic_sidebar( 'ad-widget5' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText ad5 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
								<?php

							} else if(15) { //...ad6 300x250
								?>
										<?php if ( ! dynamic_sidebar( 'ad-widget6' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText ad6 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
								<?php
							}


							$increment++;
						}


					if ($count == 1) { ?>
					<div class="latest-article">
					 <?php 
						get_template_part( 'content', 'big' );
						?>
						</div> <!-- .latest-article -->
						<div class="scroll-area">
						<div class="other-articles">
						<?php 

					} else{
						get_template_part( 'content', 'small' );
					}

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
			</div> <!-- .other-articles -->
			</div> <!-- .scroll-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
// get_sidebar();
get_footer();
