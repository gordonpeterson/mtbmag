<?php
/**
 * Template Name: MTB-MAG 2.0 Category Template
 */

get_header('gordon'); ?>

	<section id="primary" class="content-area">


			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						// printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

			<div id="content" class="site-content" role="main">
			
			<?php
					// Start the Loop.
					$count = 0;
					$increment = 0;
					$adArray = array(3,4,5,11,15);
					$adText = 'You have not added content for this ad space. Go to your widgets section and select ';

					while ( have_posts() ) : the_post();
						$count++;


						if (array_key_exists($increment, $adArray)) {
							$currentIndex = $adArray[$increment];
						}
						

						if( $count == $currentIndex ){

							if( $currentIndex == 3 ){ //...ad1 300x250
							?>
									<div class="ad ad300x250">
										<div class="ad-inner-wrap">
										<?php if ( ! dynamic_sidebar( 'ad-widget1' ) ) : ?>
												<div class="widget no-widget">
													<p><?php _e("$adText ad1 300x250", 'twentytwelve'); ?></p>
												</div>
											<?php endif; ?>
										</div>
									</div>
							<?php 
							}else if( $currentIndex == 4 ){ //...ad2 300x250
							 ?>
									<div class="ad ad300x250">
										<div class="ad-inner-wrap">
										<?php if ( ! dynamic_sidebar( 'ad-widget2' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText  ad2 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
										</div>
									</div>
							 <?php 
							}else if( $currentIndex == 5 ){ //...ad3 727z90
								?>
									<div class="ad ad727x90">
										<div class="ad-inner-wrap">
										<?php if ( ! dynamic_sidebar( 'ad-widget3' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText ad3 272x90", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
										</div>
									</div>
										
								<?php 
							} elseif ($currentIndex == 11) { //...ad4 727x400
								 ?>
									<div class="ad ad727x400">
										<div class="ad-inner-wrap">
										<?php if ( ! dynamic_sidebar( 'ad-widget4' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText ad4 272x400", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
										</div>
									</div>
										
								<?php 

							} elseif ($currentIndex == 15) { //...ad5 300x250
								?>
									<div class="ad ad300x250">
										<div class="ad-inner-wrap">
										<?php if ( ! dynamic_sidebar( 'ad-widget5' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText ad5 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
										</div>			
									</div>
										
								<?php

							} else  { //...ad6 300x250
								?>
									<div class="ad ad300x250">
										<div class="ad-inner-wrap">
										<?php if ( ! dynamic_sidebar( 'ad-widget6' ) ) : ?>
											<div class="widget no-widget">
													<p><?php _e("$adText ad6 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
										</div>			
									</div>
										
								<?php
							}


							$increment++;
						}

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						// get_template_part( 'content', get_post_format() );
						get_template_part( 'content', 'small' ); //....this gets the content-small.php template part

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
							?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
// get_sidebar( 'content' );
// get_sidebar();
get_footer();
