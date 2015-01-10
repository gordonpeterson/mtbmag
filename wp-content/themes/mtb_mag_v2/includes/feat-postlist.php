<?php
/**
 * The template for displaying the single column featured categories.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, displays the latest posts.
 *
 * @package  WellThemes
 * @file     feat-post.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<div id="feat-postlist" class="section">
	<?php
		$title = get_post_meta($post->ID, 'wt_meta_post_postlist_title', true);
		$cat_id = get_post_meta($post->ID, 'wt_meta_post_postlist_cat', true);
		
		if (!empty($title) AND ($paged < 2)){ ?>	
			<div class="section-title">
				<div class="title-wrap main-color-bg cat<?php echo $cat_id; ?>-bg">
					<div class="icon"><i class="icon-file-text"></i></div>
					<h3>
						<?php 
							if (!empty($title)){
								echo $title;
							}

							if (!empty($cat_id)){
								$cat_name = get_cat_name($cat_id);
								$cat_url = get_category_link($cat_id ); ?>				
								<span><a href="<?php echo esc_url( $cat_url ); ?>" ><?php echo $cat_name; ?></a></span>
							<?php } ?>
					</h3>
				</div>
			</div>
	<?php } ?>
			
	<div class="archive-postlist section">
		<?php
			
			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged');
			} elseif ( get_query_var('page') ) {
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}
			
			$args = array(
				'cat' => $cat_id,
				'post_status' => 'publish',
				'ignore_sticky_posts' => 1,
				 'paged' => $paged
			);			
		?>					
		<?php $i = 0; ?>
		<?php $wp_query = new WP_Query( $args ); ?>
			<?php if ( $wp_query -> have_posts() ) : ?>
				<?php while ( $wp_query -> have_posts() ) : $wp_query -> the_post(); ?>
					<?php								
						$post_class ="";
						
						if ( $i % 3 == 1 ){
							$post_class ="last";							
						}					
					?>								
					<div class=" post-excerpt <?php echo $post_class; ?>">
						// <?php get_template_part( 'content', 'excerpt' ); ?>
					</div>
					<?php $i++; ?>
				<?php endwhile; ?>
			<?php endif; ?>		
	</div>
	<?php wt_pagination(); ?>
	<?php wp_reset_query();?>	
</div>