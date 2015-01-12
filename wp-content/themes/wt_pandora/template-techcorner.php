<?php
/*
Template Name Posts: Techcorner
*/
?>

<?php get_header(); ?>


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
	googletag.defineSlot('/1031065/MTB-techcorner-subheader', [728, 90], 'div-gpt-ad-1385463674107-0').addService(googletag.pubads());
	googletag.enableServices();
	});
	</script>
	<!-- MTB-techcorner-subheader -->
	<div id='div-gpt-ad-1385463674107-0' style='width:728px; height:90px;'>
	<script type='text/javascript'>
	googletag.cmd.push(function() { googletag.display('div-gpt-ad-1385463674107-0'); });
	</script>
	</div>
</br>
</br>
</br>
</br>


	
<div id="content" class="single-post">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'single' ); ?>
		<?php comments_template( '', true ); ?>		
	<?php endwhile; // end of the loop. ?>		
</div><!-- /content -->	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
