<?php
/**
 */

get_header('gordon'); ?>

<div id="main-content" class="main-content">


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

<?php if ($paged < 2) { ?>

<?php $cat_id = 3268; //the certain category ID
$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();
$featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<div class="articolo-copertina" style="background:transparent url(<?php echo $featuredImage; ?>) center center no-repeat; background-size:cover;">

<div class="articolo-copertina-dettagli">

<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

<?php the_excerpt(); ?>

</div> <!-- .articolo-copertina-dettagli -->

<?php endwhile; endif; ?>

</div> <!-- .articolo-copertina --> <?php } ?>

		<div class="cover-article" ng-controller="coverCtrl as vm" ng-style="{'margin-top': vm.coverHeight+'px'}" style="display:none">
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
			$adArray = array(3,4,5,8);
			$adText = 'You have not added content for this ad space. Go to your widgets section and select ';

			if ( $category_query && $paged <= 1 ) {
					$cover_article = $category_query[0];
					$cover_article_id = $cover_article->ID;
					$exclude_ids = array( $cover_article_id );
					setup_postdata( $GLOBALS['post'] =& $cover_article );
					get_template_part( 'content', 'big' );
					$article_count = 17;
			} 

			?>
			</div> <!-- .cover-article -->
			<div class="scroll-area">
			<div class="altri-articoli">

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

						get_template_part( 'content', 'home' );

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
