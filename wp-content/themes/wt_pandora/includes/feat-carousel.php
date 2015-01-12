<?php
/**
 * The template for displaying the carousel posts.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, displays the latest posts.
 *
 *
 * @package  WellThemes
 * @file     feat-carousel.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 *
 */
?>

<?php	
	$title = get_post_meta($post->ID, 'wt_meta_post_carousel_title', true);
	$cat_id = get_post_meta($post->ID, 'wt_meta_post_carousel_cat', true);	
	$carousel_speed = get_post_meta($post->ID, 'wt_meta_post_carousel_speed', true);	

	if (empty($carousel_speed)){
		$carousel_speed = 3000;
	}
	
?>


<div id="feat-carousel" class="section">
	<script>
		jQuery(document).ready(function($) {
			$('.carousel-posts').show();
			$('.carousel-posts').carouFredSel({
				auto: {
					pauseOnHover: 'resume',
					items 		: 1,
					timeoutDuration	: <?php echo $carousel_speed; ?>,
				},
				prev: '.carousel-prev',
				next: '.carousel-next',
				mousewheel: true,
				swipe: {
					onMouse: true,
					onTouch: true
				}
			});
		});
	</script>
	<?php if ((!empty($title)) OR (!empty($cat_id))){ ?>
		<div class="section-title">
			<div class="title-wrap main-color-bg cat<?php echo $cat_id; ?>-bg">
				<div class="icon"><i class="icon-th-large"></i></div>
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
	
	<div class="carousel-wrap">	
		
		<ul class="carousel-posts list">
			<?php 
				$args = array(
					'cat' => $cat_id,
					'post_status' => 'publish',
					'ignore_sticky_posts' => 1,
					'posts_per_page' => 15
				);
			?>
			<?php $query = new WP_Query( $args ); ?>
			<?php if ( $query -> have_posts() ) : ?>
				<?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
					<?php if ( has_post_thumbnail()) { ?>
						<li>
							<a href="<?php the_permalink(); ?>" >
								<?php the_post_thumbnail( 'wt260_125' ); ?>
							</a>
							<?php
								$category = get_the_category(); 
								$cat_id = $category[0]->term_id;
								
								$post_class = "";
								
							?>
							<h6>							
								<a href="<?php the_permalink() ?>">
									<?php 
										//display only first 60 characters in the title.
										$title = the_title('','',FALSE);
										$short_title = mb_substr($title, 0, 48);
										echo $short_title; 
										if (strlen($title) > 48){ 
											echo '...'; 
										} 
									?>
								</a>
							</h6>							
						</li>
												
					<?php } ?>
				<?php endwhile; ?>
			<?php endif;?>
			<?php wp_reset_query();?>	
		</ul>
		
		<div class="carousel-nav">
			<a class="carousel-prev" href="#"><i class="icon-caret-left"></i></a>
			<a class="carousel-next" href="#"><i class="icon-caret-right"></i></a>	
		</div>
		
	</div>
		
</div><!-- /carousel -->