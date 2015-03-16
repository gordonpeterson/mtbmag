<?php
/**
 */

get_header('gordon'); ?>

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<div class="cover-article">
		 <?php 

			$orig_query = $wp_query;

			$category_id = get_cat_ID('cover');
			$category_query = get_posts( "category=$category_id&posts_per_page=1" ); 
			$cover_article = -1;
			$exclude_ids = array();
			$article_count = 16;
			$paged = get_query_var( 'paged', 1 );

			$count = 0;
			$increment = 0;
			$adArray = array(3,4,5,9,13,14);
			$adText = 'You have not added content for this ad space. Go to your widgets section and select ';

			if ( $category_query && $paged <= 1 ) {
					$cover_article = $category_query[0];
					$cover_article_id = $cover_article->ID;
					$exclude_ids = array( $cover_article_id );
					setup_postdata( $GLOBALS['post'] =& $cover_article );
					get_template_part( 'content', 'big' );
					$article_count = 15;
			} 

			?>
			</div> <!-- .cover-article -->
			<div class="scroll-area">
			<div class="other-articles">

		<?php
			global $wp_query;
			$args = 
					array_merge( 
							$orig_query->query, 
							array( 
							'post__not_in' => $exclude_ids,
							'showposts' => $article_count,
							 ) 
							);

			query_posts( $args );
			if ( have_posts() ) :

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
							}else if( $currentIndex == 9 ){ //...ad4 300x250
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
			<div class="blah"><?php echo "page:" . $page . "; count" . $article_count; ?></div>
			</div> <!-- .scroll-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
// get_sidebar();
get_footer();
