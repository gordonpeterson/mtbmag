<?php
/**
 */

get_header('gordon'); ?>

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<div class="latest-article">
		 <?php 

		 	$orig_query = $wp_query;

			$category_id = get_cat_ID('cover');
			$category_query = get_posts( "category=$category_id&posts_per_page=1" ); 
			$cover_article = -1;
			$exclude_ids = array();

			if ( $category_query ) {
					// wp_reset_query();
					$cover_article = $category_query[0];
					$cover_article_id = $cover_article->ID;
					$exclude_ids[0] = $cover_article_id;
					get_template_part( 'content', 'big' );
					//include(locate_template('inc/my-script.php'))
			} else {
				echo "<h1>no cover article</h1>";
			}

			?>
			</div> <!-- .latest-article -->
			<div class="scroll-area">
			<div class="other-articles">

<!-- test -->
<div class="gordon">
	<h2>id:<?php echo $cover_article_id . "; ids: ". implode(',', $exclude_ids)  ?></h2>
</div>

<!-- test -->


		<?php
			global $wp_query;
			$args = 
					// array_merge( 
              // $wp_query->query_vars, 
              array( 
              'post__not_in' => $exclude_ids,
              'showposts' => 15,
               // ) 
              );

      // wp_reset_query();
			// query_posts( $args );
			query_posts( $orig_query->query );
			if ( have_posts() ) :
				// Start the Loop.
				$count = 0;
				$increment = 0;
				$adArray = array(3,4,5,9,13,14);
				$adText = 'You have not added content for this ad space. Go to your widgets section and select ';



				while ( have_posts() ) : the_post();

					
					$count++;

					if (array_key_exists($increment, $adArray)) {
						$currentIndex = $adArray[$increment];
					}
					

						if( $count == $currentIndex ){

							if( $currentIndex == 3 ){ //...ad1 300x250
							?>
										<?php if ( ! dynamic_sidebar( 'ad-widget1' ) ) : ?>
												<div class="widget no-widget ad ad300x250">
													<p><?php _e("$adText ad1 300x250", 'twentytwelve'); ?></p>
												</div>
											<?php endif; ?>
							<?php 
							}else if( $currentIndex == 4 ){ //...ad2 300x250
							 ?>
										<?php if ( ! dynamic_sidebar( 'ad-widget2' ) ) : ?>
											<div class="widget no-widget ad ad300x250">
													<p><?php _e("$adText  ad2 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
							 <?php 
							}else if( $currentIndex == 5 ){ //...ad3 727z90
								?>
										<?php if ( ! dynamic_sidebar( 'ad-widget3' ) ) : ?>
											<div class="widget no-widget ad ad272x90">
													<p><?php _e("$adText ad3 272x90", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
								<?php 
							}else if( $currentIndex == 9 ){ //...ad2 300x250
							 ?>
										<?php if ( ! dynamic_sidebar( 'ad-widget4' ) ) : ?>
											<div class="widget no-widget ad ad300x250">
													<p><?php _e("$adText ad4 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
							 <?php 

							} elseif ($currentIndex == 13) { //...ad5 300x250
								?>
										<?php if ( ! dynamic_sidebar( 'ad-widget5' ) ) : ?>
											<div class="widget no-widget ad ad300x250">
													<p><?php _e("$adText ad5 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
								<?php

							} else if(14) { //...ad6 300x250
								?>
										<?php if ( ! dynamic_sidebar( 'ad-widget6' ) ) : ?>
											<div class="widget no-widget ad ad300x250">
													<p><?php _e("$adText ad6 300x250", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
								<?php
							}


							$increment++;
						}

						get_template_part( 'content', 'small' );

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
