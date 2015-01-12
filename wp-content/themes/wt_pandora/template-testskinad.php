<?php
/*
Template Name Posts: Test Skin Ad
*/
?>
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package  WellThemes
 * @file     single.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>


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
googletag.defineSlot('/1031065/MTB-Mag-Skin-Home', [1, 1], 'div-gpt-ad-1398282180784-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
<!-- MTB-Mag-Skin-Home -->
<div id='div-gpt-ad-1398282180784-0' style='width:1px; height:1px;'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1398282180784-0'); });
</script>
</div>

<?php get_header(); ?>


	
<div id="content" class="single-post">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'single' ); ?>
		<?php comments_template( '', true ); ?>		
	<?php endwhile; // end of the loop. ?>		
</div><!-- /content -->	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
