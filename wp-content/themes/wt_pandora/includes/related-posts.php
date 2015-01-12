<?php
$tags = wp_get_post_tags($post->ID);
if ($tags) {
	$tag_ids = array();
	foreach($tags as $single_tag) $tag_ids[] = $single_tag->term_id;

	$args=array(
		'tag__in' => $tag_ids,
		'post__not_in' => array($post->ID),
		'showposts'=> 4, //number of related posts
		'ignore_sticky_posts'=> 1
	);	
	
} else {

	$categories = get_the_category($post->ID);
	
	if ($categories) {
		$category_ids = array();
		foreach($categories as $single_category) $category_ids[] = $single_category->term_id;

		$args = array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'showposts'=> 4,
			'ignore_sticky_posts'=>1
		);		
	}
}

if($args){
	$query = new WP_Query( $args ); ?>
	<?php if ( $query -> have_posts() ) : ?>
		<div class="related-posts">
			
			<header class="archive-header">
				<h3 class="archive-title">			
					<span><?php _e('Related', 'wellthemes'); ?></span>
					<?php _e('Posts', 'wellthemes'); ?>
				</h3>
			</header>
			
			<div class="archive-postlist">
				<?php $i = 0; ?>
				<?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
					<?php								
						$post_class ="";
						if ( $i % 2 == 1 ){
							$post_class =" last";
						}					
					?>								
					<div class="col one-half<?php echo $post_class; ?>">
						<?php get_template_part( 'content', 'excerpt' ); ?>
					</div>
					<?php $i++; ?>					
				<?php endwhile; ?>
			</div>		
		</div>		
		<?php endif; ?>	
		<?php wp_reset_query();	
}

?>