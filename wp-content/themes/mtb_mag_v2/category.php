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
						printf( '<div class="description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

			<div class="altri-articoli" role="main">
			
			<?php
					// Start the Loop.
					$count = 0;
					$increment = 0;
					$adArray = array(3,4,5,8,11);
					$adText = 'You have not added content for this ad space. Go to your widgets section and select ';

					while ( have_posts() ) : the_post();
						$count++;


						if (array_key_exists($increment, $adArray)) {
							$currentIndex = $adArray[$increment];
						}
						

						if( $count == $currentIndex ){

							if( $currentIndex == 3 ){ //...ad1 300x250
							?>
										
												<div class="widget no-widget ad ad300x250">
													<p><script type='text/javascript'>
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
													googletag.defineSlot('/1031065/MTB-home', [[300, 250], [300, 450], [300, 500]], 'div-gpt-ad-1426406849364-0').addService(googletag.pubads());
													googletag.pubads().enableSingleRequest();
													googletag.enableServices();
													});
													</script>
													<!-- MTB-home -->
													<div id='div-gpt-ad-1426406849364-0'>
													<script type='text/javascript'>
													googletag.cmd.push(function() { googletag.display('div-gpt-ad-1426406849364-0'); });
													</script>
													</div></p>
												</div>
											
							<?php 
							}else if( $currentIndex == 4 ){ //...ad2 300x250
							 ?>
										
											<div class="widget no-widget ad ad300x250">
													<p><script type='text/javascript'>
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
													googletag.defineSlot('/1031065/MTB-home-Multiplayer', [[300, 250], [300, 450], [300, 500], [300, 600]], 'div-gpt-ad-1426407062975-0').addService(googletag.pubads());
													googletag.pubads().enableSingleRequest();
													googletag.enableServices();
													});
													</script>
													<!-- MTB-home-Multiplayer -->
													<div id='div-gpt-ad-1426407062975-0'>
													<script type='text/javascript'>
													googletag.cmd.push(function() { googletag.display('div-gpt-ad-1426407062975-0'); });
													</script>
													</div></p>
											</div>
										
							 <?php 
							}else if( $currentIndex == 5 ){ //...ad3 727z90
								?>
										<?php if ( ! dynamic_sidebar( 'ad-widget3' ) ) : ?>
											<div class="widget no-widget ad ad272x90">
													<p><?php _e("$adText ad3 272x90", 'twentytwelve'); ?></p>
											</div>
										<?php endif; ?>
										
											<div class="widget no-widget ad ad300x250">
													<p><script type='text/javascript'>
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
													googletag.defineSlot('/1031065/MTB-Home-5', [300, 250], 'div-gpt-ad-1426408470947-0').addService(googletag.pubads());
													googletag.pubads().enableSingleRequest();
													googletag.enableServices();
													});
													</script>
													<!-- MTB-Home-5 -->
													<div id='div-gpt-ad-1426408470947-0' style='width:300px; height:250px;'>
													<script type='text/javascript'>
													googletag.cmd.push(function() { googletag.display('div-gpt-ad-1426408470947-0'); });
													</script>
													</div></p>
											</div>
										
								<?php 
							}else if( $currentIndex == 8 ){ //...ad4 300x250
							 ?>
										
											<div class="widget no-widget ad ad300x250">
													<p><script type='text/javascript'>
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
													googletag.defineSlot('/1031065/MTB-Home-3', [[300, 250], [300, 450], [300, 500], [300, 600]], 'div-gpt-ad-1426407107081-0').addService(googletag.pubads());
													googletag.pubads().enableSingleRequest();
													googletag.enableServices();
													});
													</script>
													<!-- MTB-Home-3 -->
													<div id='div-gpt-ad-1426407107081-0'>
													<script type='text/javascript'>
													googletag.cmd.push(function() { googletag.display('div-gpt-ad-1426407107081-0'); });
													</script>
													</div></p>
											</div>
										
							 <?php 

							} else if ($currentIndex == 11) { //...ad5 300x250
								?>
										
											<div class="widget no-widget ad ad300x250">
													<p><script type='text/javascript'>
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
													googletag.defineSlot('/1031065/MTB-Home-4', [[300, 250], [300, 450], [300, 500], [300, 600]], 'div-gpt-ad-1426407138426-0').addService(googletag.pubads());
													googletag.pubads().enableSingleRequest();
													googletag.enableServices();
													});
													</script>
													<!-- MTB-Home-4 -->
													<div id='div-gpt-ad-1426407138426-0'>
													<script type='text/javascript'>
													googletag.cmd.push(function() { googletag.display('div-gpt-ad-1426407138426-0'); });
													</script>
													</div></p>
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
						get_template_part( 'content', 'home' ); //....this gets the content-small.php template part

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
