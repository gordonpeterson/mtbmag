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
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

			<div id="content" class="site-content" role="main">
			
			<?php
					// Start the Loop.
					$count = 0;
					$increment = 0;
					$adArray = array(3,4,5,11,15);

					while ( have_posts() ) : the_post();
						$count++;

						// $blah = count( $adArray );
						// var_dump( $blah );

						if (array_key_exists($increment, $adArray)) {
							$currentIndex = $adArray[$increment];
						}
						

						if( $count == $currentIndex ){

							if( $currentIndex == 5 ){ //...the 727x90 banner
								// echo "<div class='ad ad2'>$adArray[$increment]</div>";
								// if (empty($post_banner1)) { ?>
									<div class="ad ad727x90">
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
							} elseif ($currentIndex == 11) { //...the 727x400 banner
								// echo "<div class='ad ad3'>$adArray[$increment]</div>";
								// if (empty($post_banner3)) { ?>
									<div class="ad ad727x400">
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
							} else { //...the 300x250 banners
								// echo "<div class='ad'>$adArray[$increment]</div>";
								// if (empty($post_banner2)) { ?>
									<div class="ad ad300x250">
										<div class="ad-inner-wrap">
											<!-- <h1>ad1: 727x90</h1> -->
											<?php  
												if(ICL_LANGUAGE_CODE == 'en'){ 
														?>
														<script type='text/javascript'>
																googletag.cmd.push(function() {
																	googletag.defineSlot('/1031065/MTB-home-Multiplayer', [[300, 250], [300, 450], [300, 500], [300, 600]], 'div-gpt-ad-1396626837892-0').addService(googletag.pubads());
																	googletag.pubads().enableSingleRequest();
																	googletag.enableServices();
																});
															</script>
															<!-- MTB-home-Multiplayer -->
															<div id='div-gpt-ad-1396626837892-0'>
																<script type='text/javascript'>
																googletag.cmd.push(function() { googletag.display('div-gpt-ad-1396626837892-0'); });
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
