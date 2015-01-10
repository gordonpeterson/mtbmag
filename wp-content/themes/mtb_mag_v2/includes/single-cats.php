<?php
/**
 * The template for displaying the featured single categories section on homepage.
 * Gets the category for the posts from the theme options. 
 * If no category is selected, displays the latest posts.
 *
 * @package  WellThemes
 * @file     single-cats.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 * 
 **/
?>

<div id="single-cats">
	<div class="section">
			
		<div class="feat-cat col one-half">
			<?php
				$cat1_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title1', true);
				$cat1_id = get_post_meta($post->ID, 'wt_meta_post_single_cat1', true);
								
				if ((!empty($cat1_title)) OR (!empty($cat1_id))){ ?>
					<div class="section-title">
					
						<div class="title-wrap main-color-bg cat<?php echo $cat1_id; ?>-bg">				
							<div class="icon"><i class="icon-folder-close"></i></div>
							<h3>
								<?php 
									if (!empty($cat1_title)){
										echo $cat1_title;
									}

									if (!empty($cat1_id)){
										$cat1_name = get_cat_name($cat1_id);	
										$cat1_url = get_category_link($cat1_id ); ?>				
										<span><a href="<?php echo esc_url( $cat1_url ); ?>" ><?php echo $cat1_name; ?></a></span>
									<?php } ?>
							</h3>
						</div>
					</div>
			<?php } ?>
			<?php
				$args = array(
					'cat' => $cat1_id,
					'post_status' => 'publish',
					'ignore_sticky_posts' => 1,
					'posts_per_page' => 3
				);
				$query = new WP_Query( $args );
				if ( $query -> have_posts() ) :
					$last_post  = $query -> post_count -1;
					while ( $query -> have_posts() ) : $query -> the_post();
						if ( $query->current_post == 0 ) { ?>	
							<div class="main-post">								
								<?php get_template_part( 'content', 'excerpt' ); ?>									
							</div><!-- /main-post -->
					<?php } 
						if ( $query->current_post == 1 ) {	?>
						<div class="post-list">
					<?php }
						if ( $query->current_post >= 1 ) { ?>	
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
										<span class="comments">
											<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
										</span>
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
										<a href="<?php the_permalink() ?>">
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
						<?php } 
						if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
						</div><!-- /post-list -->
					<?php }	
					endwhile;
				endif;
			wp_reset_query(); ?>
			
		</div><!-- /feat-cat -->
		
		<div class="feat-cat col one-half last">
			<?php
				$cat2_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title2', true);
				$cat2_id = get_post_meta($post->ID, 'wt_meta_post_single_cat2', true);
				
				if ((!empty($cat2_title)) OR (!empty($cat2_id))){ ?>
					<div class="section-title">
					
						<div class="title-wrap main-color-bg cat<?php echo $cat2_id; ?>-bg">				
							<div class="icon"><i class="icon-folder-close"></i></div>
							<h3>
								<?php 
									if (!empty($cat2_title)){
										echo $cat2_title;
									}

									if (!empty($cat2_id)){
										$cat2_name = get_cat_name($cat2_id);	
										$cat2_url = get_category_link($cat2_id ); ?>				
										<span><a href="<?php echo esc_url( $cat2_url ); ?>" ><?php echo $cat2_name; ?></a></span>
									<?php } ?>
							</h3>
						</div>
					</div>
			<?php } ?>
			<?php
				$args = array(
					'cat' => $cat2_id,
					'post_status' => 'publish',
					'ignore_sticky_posts' => 1,
					'posts_per_page' => 3
				);
				$query = new WP_Query( $args );
				if ( $query -> have_posts() ) :
					$last_post  = $query -> post_count -1;
					while ( $query -> have_posts() ) : $query -> the_post();
						if ( $query->current_post == 0 ) { ?>	
							<div class="main-post">								
								<?php get_template_part( 'content', 'excerpt' ); ?>									
							</div><!-- /main-post -->
					<?php } 
						if ( $query->current_post == 1 ) {	?>
						<div class="post-list">
					<?php }
						if ( $query->current_post >= 1 ) { ?>	
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
										<span class="comments">
											<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
										</span>
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
						<?php } 
						if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
						</div><!-- /post-list -->
					<?php }	
					endwhile;
				endif;
			wp_reset_query(); ?>			
		</div><!-- /feat-cat -->
	
	</div><!-- /section -->
	
<?php 
	$cat3_id = get_post_meta($post->ID, 'wt_meta_post_single_cat3', true);
	$cat4_id = get_post_meta($post->ID, 'wt_meta_post_single_cat4', true);
	
				
	if((!empty($cat3_id)) or (!empty($cat4_id))) { ?>
		<div class="section">
			<?php if(!empty($cat3_id)){ ?>
				<div class="feat-cat col one-half">
					<?php
						$cat3_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title3', true);						
						if ((!empty($cat3_title)) OR (!empty($cat3_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat3_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat3_title)){
												echo $cat3_title;
											}

											if (!empty($cat3_id)){
												$cat3_name = get_cat_name($cat3_id);	
												$cat3_url = get_category_link($cat3_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat3_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<span class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</span>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
		
			<?php }	?>
			<?php if(!empty($cat4_id)){ ?>
			
				<div class="feat-cat col one-half last">
					<?php
						$cat4_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title4', true);							
						if ((!empty($cat4_title)) OR (!empty($cat4_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat4_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat4_title)){
												echo $cat4_title;
											}

											if (!empty($cat4_id)){
												$cat3_name = get_cat_name($cat4_id);	
												$cat3_url = get_category_link($cat4_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat4_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<span class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</span>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
			
			<?php }	?>
		</div>	
	<?php } ?>
	
	<?php 
	$cat5_id = 9;		//enter the category 5 ID
	$cat6_id = 2224;		//enter the category 6 ID
	
				
	if((!empty($cat5_id)) or (!empty($cat6_id))) { ?>
		<div class="section">
			<?php if(!empty($cat5_id)){ ?>
				<div class="feat-cat col one-half">
					<?php
						$cat3_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title3', true);						
						if ((!empty($cat3_title)) OR (!empty($cat5_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat5_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat3_title)){
												echo $cat3_title;
											}

											if (!empty($cat5_id)){
												$cat3_name = get_cat_name($cat5_id);	
												$cat3_url = get_category_link($cat5_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat5_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<span class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</span>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
		
			<?php }	?>
			<?php if(!empty($cat6_id)){ ?>
			
				<div class="feat-cat col one-half last">
					<?php
						$cat4_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title4', true);							
						if ((!empty($cat4_title)) OR (!empty($cat6_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat6_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat4_title)){
												echo $cat4_title;
											}

											if (!empty($cat6_id)){
												$cat3_name = get_cat_name($cat6_id);	
												$cat3_url = get_category_link($cat6_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat6_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<span class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</span>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
			
			<?php }	?>
		</div>	
	<?php } ?>
	
	<?php 
	$cat7_id = 2103;		//enter the category 7 ID
	$cat8_id = 11;		//enter the category 8 ID
	
				
	if((!empty($cat7_id)) or (!empty($cat8_id))) { ?>
		<div class="section">
			<?php if(!empty($cat7_id)){ ?>
				<div class="feat-cat col one-half">
					<?php
						$cat3_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title3', true);						
						if ((!empty($cat3_title)) OR (!empty($cat7_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat7_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat3_title)){
												echo $cat3_title;
											}

											if (!empty($cat7_id)){
												$cat3_name = get_cat_name($cat7_id);	
												$cat3_url = get_category_link($cat7_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat7_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<span class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</span>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
		
			<?php }	?>
			<?php if(!empty($cat8_id)){ ?>
			
				<div class="feat-cat col one-half last">
					<?php
						$cat4_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title4', true);							
						if ((!empty($cat4_title)) OR (!empty($cat8_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat8_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat4_title)){
												echo $cat4_title;
											}

											if (!empty($cat8_id)){
												$cat3_name = get_cat_name($cat8_id);	
												$cat3_url = get_category_link($cat8_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat8_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<span class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</span>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
			
			<?php }	?>
		</div>	
	<?php } ?>
	
	<?php 
	$cat7_id = 1658;		//enter the category 9 ID
	$cat8_id = 10;		//enter the category 10 ID
	
				
	if((!empty($cat7_id)) or (!empty($cat8_id))) { ?>
		<div class="section">
			<?php if(!empty($cat7_id)){ ?>
				<div class="feat-cat col one-half">
					<?php
						$cat3_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title3', true);						
						if ((!empty($cat3_title)) OR (!empty($cat7_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat7_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat3_title)){
												echo $cat3_title;
											}

											if (!empty($cat7_id)){
												$cat3_name = get_cat_name($cat7_id);	
												$cat3_url = get_category_link($cat7_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat7_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<span class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</span>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
		
			<?php }	?>
			<?php if(!empty($cat8_id)){ ?>
			
				<div class="feat-cat col one-half last">
					<?php
						$cat4_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title4', true);							
						if ((!empty($cat4_title)) OR (!empty($cat8_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat8_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat4_title)){
												echo $cat4_title;
											}

											if (!empty($cat8_id)){
												$cat3_name = get_cat_name($cat8_id);	
												$cat3_url = get_category_link($cat8_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat8_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<span class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</span>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
			
			<?php }	?>
		</div>	
	<?php } ?>
	
	
	<?php 
	$cat7_id = 3320;		//enter the category 9 ID
	$cat8_id = 41;		//enter the category 10 ID
	
				
	if((!empty($cat7_id)) or (!empty($cat8_id))) { ?>
		<div class="section">
			<?php if(!empty($cat7_id)){ ?>
				<div class="feat-cat col one-half">
					<?php
						$cat3_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title3', true);						
						if ((!empty($cat3_title)) OR (!empty($cat7_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat7_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat3_title)){
												echo $cat3_title;
											}

											if (!empty($cat7_id)){
												$cat3_name = get_cat_name($cat7_id);	
												$cat3_url = get_category_link($cat7_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat7_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
												<div class="comments">
													<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
												</div>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
		
			<?php }	?>
			<?php if(!empty($cat8_id)){ ?>
			
				<div class="feat-cat col one-half last">
					<?php
						$cat4_title = get_post_meta($post->ID, 'wt_meta_post_single_cat_title4', true);							
						if ((!empty($cat4_title)) OR (!empty($cat8_id))){ ?>
							<div class="section-title">
							
								<div class="title-wrap main-color-bg cat<?php echo $cat8_id; ?>-bg">				
									<div class="icon"><i class="icon-folder-close"></i></div>
									<h3>
										<?php 
											if (!empty($cat4_title)){
												echo $cat4_title;
											}

											if (!empty($cat8_id)){
												$cat3_name = get_cat_name($cat8_id);	
												$cat3_url = get_category_link($cat8_id ); ?>				
												<span><a href="<?php echo esc_url( $cat3_url ); ?>" ><?php echo $cat3_name; ?></a></span>
											<?php } ?>
									</h3>
								</div>
							</div>
					<?php } ?>
					<?php
						$args = array(
							'cat' => $cat8_id,
							'post_status' => 'publish',
							'ignore_sticky_posts' => 1,
							'posts_per_page' => 3
						);
						$query = new WP_Query( $args );
						if ( $query -> have_posts() ) :
							$last_post  = $query -> post_count -1;
							while ( $query -> have_posts() ) : $query -> the_post();
								if ( $query->current_post == 0 ) { ?>	
									<div class="main-post">								
										<?php get_template_part( 'content', 'excerpt' ); ?>									
									</div><!-- /main-post -->
							<?php } 
								if ( $query->current_post == 1 ) {	?>
								<div class="post-list">
							<?php }
								if ( $query->current_post >= 1 ) { ?>	
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
													<div class="comments">
														<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
													</div>
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
								<?php } 
								if (( $query->post_count  > 1) AND ($query->current_post == $last_post )) { ?>					
								</div><!-- /post-list -->
							<?php }	
							endwhile;
						endif;
					wp_reset_query(); ?>			
				</div><!-- /feat-cat -->
			
			<?php }	?>
		</div>	
	<?php } ?>
	
</div>