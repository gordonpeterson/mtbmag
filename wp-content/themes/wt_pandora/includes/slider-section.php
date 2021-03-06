<?php
/**
 * The template for displaying the featured slider on homepage.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, displays the latest posts.
 *
 * @package  WellThemes
 * @file     feat-slider.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 * 
 **/
?>
<?php		
	$cat_id = get_post_meta($post->ID, 'wt_meta_post_feat_slider_cat', true);
	
	$args = array(
		'cat' => $cat_id,
		'post_status' => 'publish',
		'ignore_sticky_posts' => 1,
		'posts_per_page' => 5
	);
		
?>
<div id="slider-section" class="section">

	<script>
		jQuery(document).ready(function($) {				
			$(".slider").show();
			$('.slider').flexslider({						// slider settings
				animation: "slide",								// animation style
				controlNav: false,								// slider thumnails class
				slideshow: true,								// enable automatic sliding
				directionNav: true,								// disable nav arrows
				slideshowSpeed: 8000,   						// slider speed
				smoothHeight: false,
				keyboard: true,
				mousewheel: false,
				controlsContainer: ".slider .slider-nav",
			});
		});
	</script>
	<div class="slider">
		<?php	if(ICL_LANGUAGE_CODE == 'it'){ ?>
						<div align="center" ><a  href="http://www.mtb-mag.com/category/mag/eurobike-2014/"><img src="http://www.mtb-mag.com/wp-content/uploads/2014/08/logo-eurobike1.png"></a></div></br>		
						<?php	}
							else {?>
								<div align="center" ><a  href="http://www.mtb-mag.com/en/category/mag-2/en/eurobike-2014-en/"><img src="http://www.mtb-mag.com/wp-content/uploads/2014/08/logo-eurobike1.png"></a></div></br>	
								
								<?php } ?>
		<ul class="slides">

			<?php $query = new WP_Query( $args ); ?>
				<?php if ( $query -> have_posts() ) : ?>
					<?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
							<?php if ( has_post_thumbnail()) { ?>				
								<li>
									<a href="<?php the_permalink(); ?>" >
										<?php the_post_thumbnail( 'wt780_450' ); ?>
									</a>										
									
									<div class="post-info">
										
										<?php
											$cat_icon = wt_get_post_cat_icon();
											if ($cat_icon){
												echo $cat_icon;
											} 
											?>
			
										<div class="inner">
											<div class="title">
												<h2>											
													<a href="<?php the_permalink() ?>">
														<?php 
															//display only first 60 characters in the title.
															$title = the_title('','',FALSE);
															$short_title = mb_substr($title, 0, 60);
															echo $short_title; 
															if (strlen($title) > 60){ 
																echo '...'; 
															} 
														?>	
													</a>
													
												</h2>
												
											</div>		
															
											
											<div class="post-excerpt">												
												<?php 
													//display only first 130 characters in the excerpt.
													$title = get_the_excerpt('','',FALSE);
													$short_title = mb_substr($title, 0, 240);
													echo $short_title; 
													if (strlen($title) > 239){ 
														echo '...'; 
													} 
												?>	
																															
											</div>	
												
										</div>											
									</div>	
										
								</li>							
						<?php } ?>
					<?php endwhile; ?>
				<?php endif;?>
			<?php wp_reset_query();?>				
		</ul>
		<div class="slider-nav"></div>
	</div>


	<div class="posts">
			<?php	if(ICL_LANGUAGE_CODE == 'en'){ ?>
				<script type='text/javascript'>
				var googletag = googletag || {};
				googletag.cmd = googletag.cmd || [];
				(function() {
				var gads = document.createElement('script');
				gads.async = true;
				gads.type = 'text/javascript';
				var useSSL = 'https:' == document.location.protocol;
				gads.src = (useSSL ? 'https:' : 'http:') + 
				'//www.googletagservices.com/tag/js/gpt.js';
				var node = document.getElementsByTagName('script')[0];
				node.parentNode.insertBefore(gads, node);
				})();
				</script>

				<script type='text/javascript'>
				googletag.cmd.push(function() {
				googletag.defineSlot('/1031065/MTBMAG-EN-Home01', [[300, 250], [300, 450], [300, 600]], 'div-gpt-ad-1404137396993-0').addService(googletag.pubads());
				googletag.pubads().enableSingleRequest();
				googletag.enableServices();
				});
				</script>
				<!-- MTBMAG-EN-Home01 -->
				<div id='div-gpt-ad-1404137396993-0'>
				<script type='text/javascript'>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1404137396993-0'); });
				</script>
				</div>

			<?php	}
				else {?>
						<script type='text/javascript'>
						var googletag = googletag || {};
						googletag.cmd = googletag.cmd || [];
						(function() {
						var gads = document.createElement('script');
						gads.async = true;
						gads.type = 'text/javascript';
						var useSSL = 'https:' == document.location.protocol;
						gads.src = (useSSL ? 'https:' : 'http:') + 
						'//www.googletagservices.com/tag/js/gpt.js';
						var node = document.getElementsByTagName('script')[0];
						node.parentNode.insertBefore(gads, node);
						})();
						</script>

						<script type='text/javascript'>
						googletag.cmd.push(function() {
						googletag.defineSlot('/1031065/MTB-home', [[300, 250], [300, 450], [300, 500]], 'div-gpt-ad-1390228981096-0').addService(googletag.pubads());
						googletag.pubads().enableSingleRequest();
						googletag.enableServices();
						});
						</script>
						<!-- MTB-home -->
						<div id='div-gpt-ad-1390228981096-0'>
						<script type='text/javascript'>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1390228981096-0'); });
						</script>
						</div>				
				
			<?php } ?>
		
	
		<br><br>
	
		
	</div>

	


	</div>
