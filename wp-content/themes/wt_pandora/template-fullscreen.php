<?php
/*
Template Name Posts: Fullscreen
*/
?>
<?php get_header(); ?>

	
<div id="content" class="full-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'single' ); ?>
		<?php comments_template( '', true ); ?>		
	<?php endwhile; // end of the loop. ?>		
</div><!-- /content -->	


<?php get_footer(); ?>