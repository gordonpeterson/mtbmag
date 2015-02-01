<?php
/**
 * Template Name: MTB-MAG 2.0 Article Template
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('nav'); ?>>
	
	<?php //twentyfourteen_post_thumbnail(); ?>
	<div class="post-thumbnail">
		<?php the_post_thumbnail('wt144_144'); ?>
	</div>

	<div class="post-info">
		<header class="entry-header">
			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
				<!-- 
			<div class="entry-meta">
				<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
			</div>
				 -->
			<?php
				endif;

				if ( is_single() ) :
					the_title( '<h3 class="entry-title">', '</h3>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;
			?>
		</header><!-- .entry-header -->


		<?php //the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
	</div> <!-- .post-info -->
</div><!-- #post-## -->
