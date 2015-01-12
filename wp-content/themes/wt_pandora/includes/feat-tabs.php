<?php
/**
 * The template for displaying the featured tabs on homepage.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, displays the latest posts.
 *
 * @package  WellThemes
 * @file     feat-tabs.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 * 
 **/
?>

<script>
	jQuery(document).ready(function($) {				
		$(".tabs-title-container .tab-titles li").click(function() {
			$(".tab-titles li").removeClass('active');
			$(this).addClass("active");
			$(".tabs-content-container .tab-content").hide();
			var selected_tab = $(this).find("a").attr("href");
			$(selected_tab).fadeIn();
			return false;
		});
	});
</script>

<div id="feat-tabs" class="section">
	
	<?php
		$tab1_title = get_post_meta($post->ID, 'wt_meta_post_tab1_title', true);
		$tab2_title = get_post_meta($post->ID, 'wt_meta_post_tab2_title', true);
		$tab3_title = get_post_meta($post->ID, 'wt_meta_post_tab3_title', true);
		
		$tab1_subtitle = get_post_meta($post->ID, 'wt_meta_post_tab1_subtitle', true);
		$tab2_subtitle = get_post_meta($post->ID, 'wt_meta_post_tab2_subtitle', true);
		$tab3_subtitle = get_post_meta($post->ID, 'wt_meta_post_tab3_subtitle', true);
		
		$archive_url = get_post_meta($post->ID, 'wt_meta_post_archive_url', true);
			
		$cat_id = get_post_meta($post->ID, 'wt_meta_post_tags_cat', true);
		$cat_url = get_category_link($cat_id );
		
		if (empty($archive_url)){
			$archive_url = $cat_url;
		}
		
	?>
	<div class="tabs-title-container clearfix">
		
		<div class="wrap clearfix">	
			<div class="sep"></div>		
			<ul class="tab-titles list">
				<?php if (!empty($tab1_title)){ ?>
				<li class="tab-recent active"><i class="icon-star"></i><a href="#tab1-content"><?php _e('Hot Posts', 'wellthemes'); ?></a></li>
				<?php } ?>
				<?php if (!empty($tab2_title)){ ?>
				<li class="tab-top"><i class="icon-signal"></i><a href="#tab2-content"><?php _e('Top Weekly', 'wellthemes'); ?></a></li>
				<?php } ?>
				<?php if (!empty($tab3_title)){ ?>
				<li class="tab-comments"><i class="icon-comments"></i><a href="#tab3-content"><?php _e('Most Commented', 'wellthemes'); ?></a></li>
				<?php } ?>
			</ul>
			<?php if (!empty($archive_url)) { ?>
				<div class="archives">
					<i class="icon-copy"></i><a href="<?php echo $archive_url; ?>"><?php _e('Archives', 'wellthemes'); ?></a>
				</div>
			<?php } ?>
		</div>
	</div>
	
	<div class="tabs-content-container">
		
		<?php if (!empty($tab1_title)){ ?>
			<div id="tab1-content" class="tab-content" style="display: block;">
				<div class="tab-content-wrap">
					<header class="tab-header">
						<div class="tab-title">
							<div class="icon"><i class="icon-star"></i></div>
							<h2><?php echo $tab1_title; ?></h2>	
						</div>
						
						<div class="tab-subtitle">
							<h4>
								<?php if (!empty($tab1_subtitle)){ ?>
									<span class="title"><?php echo $tab1_subtitle; ?></span>
								<?php } ?>
								<span class="line"></span>
								<span class="shape"></span>
							</h4>
						</div>
					</header>
					
					<?php					
						$args = array(
								'cat' => $cat_id,
								'post_status' => 'publish',
								'ignore_sticky_posts' => 1,
								'posts_per_page' => 8
							);
					
					$query = new WP_Query( $args );
					
					if ( $query -> have_posts() ) :
						$last_post  = $query -> post_count -1;
						while ( $query -> have_posts() ) : $query -> the_post();
							
							if ( $query->current_post == 0 ) { ?>			
								<div class="main-post">
									<?php if ( has_post_thumbnail() ) {	?>
										<div class="thumb col one-half">
											<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt360_210' ); ?></a>
											<?php
												$cat_icon = wt_get_post_cat_icon();
												if ($cat_icon){
													echo $cat_icon;
												} 
											?>
										</div>
									<?php } ?>
									<div class="post-right col one-half last">
										<div class="entry-meta">
											<?php 
												$stars = get_overall_score();										
												if ($stars){ ?>
													<span class="score"><?php echo $stars; ?></span>
											<?php }	?>
											<span class="date"><?php echo get_the_date(); ?></span>
											<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
										</div>											
										<h2>
											<a href="<?php the_permalink() ?>" rel="bookmark">
												<?php 
													//display only first 60 characters in the title.
													$title = the_title('','',FALSE);
													$short_title = mb_substr($title, 0, 60);
													echo $short_title; 
													if (strlen($title) > 60){ 
														echo '...'; 
													} 
												?>
											</a>
										</h2>
										<?php the_excerpt(); ?>
										
										<div class="read-more main-color-bg">
											<a href="<?php the_permalink(); ?>"><?php _e('Read More', 'wellthemes'); ?></a>
										</div>
										
									</div>							
								</div>
							<?php } ?>
					
							<?php if ( $query->current_post == 1 ) { ?>
								<div class="posts-wrap">
									<div class="cat-left col one-half">
										<?php } ?>
					
										<?php if ( ($query->current_post >= 1 ) AND ($query->current_post < 4 )) { ?>	
											<div class="item-post">
												<?php if ( has_post_thumbnail() ) {	?>
													<div class="thumb overlay">
														<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt135_80' ); ?></a>
													</div>
												<?php }	?>
												<div class="post-right">
													
													<div class="entry-meta meta-top">
														<span class="date"><?php echo get_the_date(); ?></span>
														<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
													</div>
													<?php
														$stars = get_overall_score();
														if ($stars){
															$length = 45;
														} else {
															$length = 60;
														}
													?>
													<h4>
														<a href="<?php the_permalink() ?>" rel="bookmark">
															<?php 																
																$title = the_title('','',FALSE);
																$short_title = mb_substr($title, 0, $length);
																echo $short_title; 
																if (strlen($title) > $length){ 
																	echo '...'; 
																} 
															?>	
														</a>
													</h4>
													<?php 
														
														if ($stars){ ?>
															<div class="entry-meta meta-bottom">
																<span class="score"><?php echo $stars; ?></span>
															</div>
													<?php }	?>
													
												</div>
											</div>
										<?php } ?>
						
										<?php if ( $query->current_post == 3 ) { ?>
									</div><!-- /cat-left -->
									
									<div class="cat-right col one-half last">
										<?php } ?>
										<?php if ( $query->current_post >= 4 ) { ?>	
											<div class="item-post">
												
												<h5>
													<a href="<?php the_permalink() ?>">
														<?php 
															//display only first 90 characters in the title.
															$title = the_title('','',FALSE);
															$short_title = mb_substr($title, 0, 90);
															echo $short_title; 
															if (strlen($title) > 90){ 
																echo '...'; 
															} 
														?>	
													</a>
												</h5>
												<div class="entry-meta">
													<?php 
														$stars = get_overall_score();										
														if ($stars){ ?>
															<span class="score"><?php echo $stars; ?></span>
													<?php }	?>
													<span class="date"><?php echo get_the_date(); ?></span>
													<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
												</div>
											</div>
										<?php } ?>
					
								<?php if (( $query->post_count  > 1) AND ( $query->post_count  < 5) AND ($query->current_post == $last_post )) { ?>			
									</div><!-- /cat-left -->
								</div><!-- /cat-wrap -->
								<?php } ?>

								<?php if (( $query->post_count  >= 5) AND ( $query->post_count  < 8) AND ($query->current_post == $last_post )) { ?>					
									</div><!-- /cat-right -->
								</div><!-- /cat-wrap -->
								<?php } ?>
						
								<?php if ( ( $query->post_count  == 8) AND ($query->current_post == $last_post )) { ?>					
									</div><!-- /cat-right -->
								</div><!-- /cat-wrap -->
								<?php } ?>
						
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query();?>	
				</div><!-- /section1-cat -->
			</div><!-- /tab1-content -->
		
		<?php } ?>
		
		<?php if (!empty($tab2_title)){ ?>
			<div id="tab2-content" class="tab-content">
				<div class="tab-content-wrap">
					<header class="tab-header">
						<div class="tab-title">
							<div class="icon"><i class="icon-star"></i></div>
							<h2><?php echo $tab2_title; ?></h2>	
						</div>
						
						<div class="tab-subtitle">
							<h4>
								<?php if (!empty($tab2_subtitle)){ ?>
									<span class="title"><?php echo $tab2_subtitle; ?></span>
								<?php } ?>
								<span class="line"></span>
								<span class="shape"></span>
							</h4>
						</div>
					</header>
					
					<?php	
						
						function filter_where( $where = '' ) {
							$where .= " AND post_date > '" . date('Y-m-d', strtotime('-7 days')) . "'";
							return $where;
						}
						add_filter( 'posts_where', 'filter_where' );
												
						$args = array(
								'post_status' => 'publish',
								'ignore_sticky_posts' => 1,
								'posts_per_page' => 8,
								'meta_key' => 'post_views_count',
								'orderby' => 'meta_value_num',
							);
					
					$query = new WP_Query( $args );
					remove_filter( 'posts_where', 'filter_where' );
					
					if ( $query -> have_posts() ) :
						$last_post  = $query -> post_count -1;
						while ( $query -> have_posts() ) : $query -> the_post();
							
							if ( $query->current_post == 0 ) { ?>			
								<div class="main-post">
									<?php if ( has_post_thumbnail() ) {	?>
										<div class="thumb col one-half">
											<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt360_210' ); ?></a>
											<?php
												$cat_icon = wt_get_post_cat_icon();
												if ($cat_icon){
													echo $cat_icon;
												} 
											?>
										</div>
									<?php } ?>
									<div class="post-right col one-half last">
										<div class="entry-meta">
											<?php 
												$stars = get_overall_score();										
												if ($stars){ ?>
													<span class="score"><?php echo $stars; ?></span>
											<?php }	?>
											<span class="date"><?php echo get_the_date(); ?></span>
											<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
										</div>											
										<h2>
											<a href="<?php the_permalink() ?>" rel="bookmark">
												<?php 
													//display only first 60 characters in the title.
													$title = the_title('','',FALSE);
													$short_title = mb_substr($title, 0, 60);
													echo $short_title; 
													if (strlen($title) > 120){ 
														echo '...'; 
													} 
												?>
											</a>
										</h2>
										<?php the_excerpt(); ?>
										
										<div class="read-more main-color-bg">
											<a href="<?php the_permalink(); ?>"><?php _e('Read More', 'wellthemes'); ?></a>
										</div>
										
									</div>							
								</div>
							<?php } ?>
					
							<?php if ( $query->current_post == 1 ) { ?>
								<div class="posts-wrap">
									<div class="cat-left col one-half">
										<?php } ?>
					
										<?php if ( ($query->current_post >= 1 ) AND ($query->current_post < 4 )) { ?>	
											<div class="item-post">
												<?php if ( has_post_thumbnail() ) {	?>
													<div class="thumb overlay">
														<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt135_80' ); ?></a>
													</div>
												<?php }	?>
												<div class="post-right">
													
													<div class="entry-meta meta-top">
														<span class="date"><?php echo get_the_date(); ?></span>
														<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
													</div>
													<?php
														$stars = get_overall_score();
														if ($stars){
															$length = 45;
														} else {
															$length = 60;
														}
													?>
													<h4>
														<a href="<?php the_permalink() ?>" rel="bookmark">
															<?php 																
																$title = the_title('','',FALSE);
																$short_title = mb_substr($title, 0, $length);
																echo $short_title; 
																if (strlen($title) > $length){ 
																	echo '...'; 
																} 
															?>	
														</a>
													</h4>
													<?php 
														
														if ($stars){ ?>
															<div class="entry-meta meta-bottom">
																<span class="score"><?php echo $stars; ?></span>
															</div>
													<?php }	?>
													
												</div>
											</div>
										<?php } ?>
						
										<?php if ( $query->current_post == 3 ) { ?>
									</div><!-- /cat-left -->
									
									<div class="cat-right col one-half last">
										<?php } ?>
										<?php if ( $query->current_post >= 4 ) { ?>	
											<div class="item-post">
												
												<h5>
													<a href="<?php the_permalink() ?>">
														<?php 
															//display only first 90 characters in the title.
															$title = the_title('','',FALSE);
															$short_title = mb_substr($title, 0, 90);
															echo $short_title; 
															if (strlen($title) > 90){ 
																echo '...'; 
															} 
														?>	
													</a>
												</h5>
												<div class="entry-meta">
													<?php 
														$stars = get_overall_score();										
														if ($stars){ ?>
															<span class="score"><?php echo $stars; ?></span>
													<?php }	?>
													<span class="date"><?php echo get_the_date(); ?></span>
													<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
												</div>
											</div>
										<?php } ?>
					
								<?php if (( $query->post_count  > 1) AND ( $query->post_count  < 5) AND ($query->current_post == $last_post )) { ?>			
									</div><!-- /cat-left -->
								</div><!-- /cat-wrap -->
								<?php } ?>

								<?php if (( $query->post_count  >= 5) AND ( $query->post_count  < 8) AND ($query->current_post == $last_post )) { ?>					
									</div><!-- /cat-right -->
								</div><!-- /cat-wrap -->
								<?php } ?>
						
								<?php if ( ( $query->post_count  == 8) AND ($query->current_post == $last_post )) { ?>					
									</div><!-- /cat-right -->
								</div><!-- /cat-wrap -->
								<?php } ?>
						
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query();?>	
				</div><!-- /section2-cat -->
			</div><!-- /tab2-content -->
		<?php } ?>
		
		<?php if (!empty($tab3_title)){ ?>
			<div id="tab3-content" class="tab-content">
				<div class="tab-content-wrap">
					<header class="tab-header">
						<div class="tab-title">
							<div class="icon"><i class="icon-star"></i></div>
							<h2><?php echo $tab3_title; ?></h2>	
						</div>
						
						<div class="tab-subtitle">
							<h4>
								<?php if (!empty($tab3_subtitle)){ ?>
									<span class="title"><?php echo $tab3_subtitle; ?></span>
								<?php } ?>
								<span class="line"></span>
								<span class="shape"></span>
							</h4>
						</div>
					</header>
					
					<?php	
																		
						$args = array(
								'post_status' => 'publish',
								'ignore_sticky_posts' => 1,
								'posts_per_page' => 8,
								'orderby' => 'comment_count',
							);
					
						$query = new WP_Query( $args );
					
					
					if ( $query -> have_posts() ) :
						$last_post  = $query -> post_count -1;
						while ( $query -> have_posts() ) : $query -> the_post();
							
							if ( $query->current_post == 0 ) { ?>			
								<div class="main-post">
									<?php if ( has_post_thumbnail() ) {	?>
										<div class="thumb col one-half">
											<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt360_210' ); ?></a>
											<?php
												$cat_icon = wt_get_post_cat_icon();
												if ($cat_icon){
													echo $cat_icon;
												} 
											?>
										</div>
									<?php } ?>
									<div class="post-right col one-half last">
										<div class="entry-meta">
											<?php 
												$stars = get_overall_score();										
												if ($stars){ ?>
													<span class="score"><?php echo $stars; ?></span>
											<?php }	?>
											<span class="date"><?php echo get_the_date(); ?></span>
											<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
										</div>											
										<h2>
											<a href="<?php the_permalink() ?>" rel="bookmark">
												<?php 
													//display only first 60 characters in the title.
													$title = the_title('','',FALSE);
													$short_title = mb_substr($title, 0, 60);
													echo $short_title; 
													if (strlen($title) > 120){ 
														echo '...'; 
													} 
												?>
											</a>
										</h2>
										<?php the_excerpt(); ?>
										
										<div class="read-more main-color-bg">
											<a href="<?php the_permalink(); ?>"><?php _e('Read More', 'wellthemes'); ?></a>
										</div>
										
									</div>							
								</div>
							<?php } ?>
					
							<?php if ( $query->current_post == 1 ) { ?>
								<div class="posts-wrap">
									<div class="cat-left col one-half">
										<?php } ?>
					
										<?php if ( ($query->current_post >= 1 ) AND ($query->current_post < 4 )) { ?>	
											<div class="item-post">
												<?php if ( has_post_thumbnail() ) {	?>
													<div class="thumb overlay">
														<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt135_80' ); ?></a>
													</div>
												<?php }	?>
												<div class="post-right">
													
													<div class="entry-meta meta-top">
														<span class="date"><?php echo get_the_date(); ?></span>
														<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
													</div>
													<?php
														$stars = get_overall_score();
														if ($stars){
															$length = 45;
														} else {
															$length = 60;
														}
													?>
													<h4>
														<a href="<?php the_permalink() ?>" rel="bookmark">
															<?php 																
																$title = the_title('','',FALSE);
																$short_title = mb_substr($title, 0, $length);
																echo $short_title; 
																if (strlen($title) > $length){ 
																	echo '...'; 
																} 
															?>	
														</a>
													</h4>
													<?php 
														
														if ($stars){ ?>
															<div class="entry-meta meta-bottom">
																<span class="score"><?php echo $stars; ?></span>
															</div>
													<?php }	?>
													
												</div>
											</div>
										<?php } ?>
						
										<?php if ( $query->current_post == 3 ) { ?>
									</div><!-- /cat-left -->
									
									<div class="cat-right col one-half last">
										<?php } ?>
										<?php if ( $query->current_post >= 4 ) { ?>	
											<div class="item-post">
												
												<h5>
													<a href="<?php the_permalink() ?>">
														<?php 
															//display only first 60 characters in the title.
															$title = the_title('','',FALSE);
															$short_title = mb_substr($title, 0, 90);
															echo $short_title; 
															if (strlen($title) > 90){ 
																echo '...'; 
															} 
														?>	
													</a>
												</h5>
												<div class="entry-meta">
													<?php 
														$stars = get_overall_score();										
														if ($stars){ ?>
															<span class="score"><?php echo $stars; ?></span>
													<?php }	?>
													<span class="date"><?php echo get_the_date(); ?></span>
													<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
												</div>
											</div>
										<?php } ?>
					
								<?php if (( $query->post_count  > 1) AND ( $query->post_count  < 5) AND ($query->current_post == $last_post )) { ?>			
									</div><!-- /cat-left -->
								</div><!-- /cat-wrap -->
								<?php } ?>

								<?php if (( $query->post_count  >= 5) AND ( $query->post_count  < 8) AND ($query->current_post == $last_post )) { ?>					
									</div><!-- /cat-right -->
								</div><!-- /cat-wrap -->
								<?php } ?>
						
								<?php if ( ( $query->post_count  == 8) AND ($query->current_post == $last_post )) { ?>					
									</div><!-- /cat-right -->
								</div><!-- /cat-wrap -->
								<?php } ?>
						
					<?php endwhile; ?>
				<?php endif; ?>	
				<?php wp_reset_query();?>					
				</div><!-- /section3-cat -->
			</div><!-- /tab3-content -->
		<?php } ?>		
		
	</div>

</div>