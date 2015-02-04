<?php
/**
 * Template Name: MTB-MAG 2.0 Article Template
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('nav-article'); ?>>
	
	<?php //twentyfourteen_post_thumbnail(); ?>
	<div class="post-thumbnail">
		<?php //the_post_thumbnail('thumbnail'); ?>
		<?php the_post_thumbnail(array(260,125)); ?>
	</div>

	<div class="post-info">
		<header class="entry-header">
			<?php
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			?>
		</header><!-- .entry-header -->


		<?php //the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
	</div> <!-- .post-info -->
</div><!-- #post-## -->
