<?php
/**
 */

get_header('gordon'); ?>

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<div class="latest-article">
		<?php
			if ( have_posts() ) :
				// Start the Loop.
				$count = 0;
				$increment = 0;
				$adArray = array(4,5,6,12,14,15);

				$post_banner1 = get_post_meta($post->ID, 'wt_meta_post_banner1', true);	
				$post_banner2 = get_post_meta($post->ID, 'wt_meta_post_banner2', true);	
				$post_banner3 = get_post_meta($post->ID, 'wt_meta_post_banner3', true);	


				while ( have_posts() ) : the_post();
					$count++;

					// $blah = count( $adArray );
					// var_dump( $blah );

					if (array_key_exists($increment, $adArray)) {
						$currentIndex = $adArray[$increment];
					}
					

					if( $count == $currentIndex ){

						if( $currentIndex == 6 ){ //...the 727x90 banner
							// echo "<div class='ad ad2'>$adArray[$increment]</div>";
							// if (empty($post_banner1)) { ?>
								<div class="ad ad1">
									<div class="ad-inner-wrap">
										<!-- <h1>ad1: 727x90</h1> -->
										<?php  
											if(ICL_LANGUAGE_CODE == 'en'){ 
													?>
														<div id='div-gpt-ad-1402004698859-0'>
														<script type='text/javascript'>
														googletag.cmd.push(function() { googletag.display('div-gpt-ad-1402004698859-0'); });
														</script>
														</div>
													<?php 
											}
											else{
													?>
														<div id='div-gpt-ad-1402004398340-0'>
														<script type='text/javascript'>
														googletag.cmd.push(function() { googletag.display('div-gpt-ad-1402004398340-0'); });
														</script>
														</div>
													<?php 
											}
										?>
									</div>			
								</div>
									
							<?php //}
						} elseif ($currentIndex == 12) { //...the 727x400 banner
							// echo "<div class='ad ad3'>$adArray[$increment]</div>";
							if (empty($post_banner3)) { ?>
								<div class="ad ad3">
									<div class="ad-inner-wrap">
										<h1>ad3: 727x400</h1>
										<?php echo $post_banner3; ?>
									</div>			
								</div>
									
							<?php }
						} else { //...the 300x250 banners
							// echo "<div class='ad'>$adArray[$increment]</div>";
							if (empty($post_banner2)) { ?>
								<div class="ad ad2">
									<div class="ad-inner-wrap">
										<h1>ad2: 300x250</h1>
										<?php echo $post_banner2; ?>
									</div>			
								</div>
									
							<?php }
						}


						$increment++;
					}


					if ($count == 1) {
						get_template_part( 'content', 'big' );
						?>
						</div> <!-- .latest-article -->
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
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
// get_sidebar();
get_footer();
