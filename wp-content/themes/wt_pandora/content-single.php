<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package  WellThemes
 * @file     content-single.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
			$hide_post_img = get_post_meta($post->ID, 'wt_meta_post_hide_img', true);			
			if ($hide_post_img != 1) {		
				if ( wt_get_option( 'wt_hide_post_img' ) == 1 ){
					$hide_post_img = 1;
				}				
			} else{
				$hide_post_img = 1;
			}
		
			if ( $hide_post_img  != 1 ){ ?>
				<div class="thumbnail single-post-thumbnail section"><?php the_post_thumbnail( 'wt780_450' ); ?></div>			
		<?php }	?>
		
	<div class="tabs-title-container clearfix">
	
		<div class="wrap clearfix">	
			<div class="sep"></div>		
			<ul class="tab-titles list">				
				<li class="tab-post active"><i class="icon-star"></i><a href="#tab1-content"><?php _e('Article', 'wellthemes'); ?></a></li>				
				<li class="tab-related"><i class="icon-signal"></i><a href="#tab2-content"><?php _e('Related Posts', 'wellthemes'); ?></a></li>
				<?php	if(ICL_LANGUAGE_CODE == 'en'){ ?>
					<?php	}
						else {?>
				<li class="tab-related"><i class="icon-comments"></i><?php comments_popup_link( __('No comments', 'wellthemes'), __( '1 comment', 'wellthemes'), __('% comments', 'wellthemes')); ?></li>
				<?php } ?>
				<li class="tab-related"><i class="icon-eye-ope"></i><?php if ( current_user_can( 'edit_post' , get_the_ID() ) & function_exists( "the_views" ) ) {
				the_views();
				} ?></li>
				
			</ul>

			
			
				
			<div class="archives">
				<i class="icon-folder-close"></i>
				<?php the_category(', ' ); ?>
			</div>
		
		</div>
	</div>
	
	<div class="tabs-content-container">
		<div id="tab1-content" class="tab-content" style="display: block;">
			
			<div class="entry-wrap">
				
				<header class="entry-header">
					<div class="entry-title">
						<h1>
							<?php 
								$entry_icon =  wt_get_post_title_icon(); 
								if ($entry_icon){
									echo $entry_icon;
								}
								
								 the_title(); 
							?>
						</h1>						
					</div>
					
					<?php
						$hide_post_meta = get_post_meta($post->ID, 'wt_meta_post_hide_meta', true);			
						if ($hide_post_meta != 1) {		
							if ( wt_get_option( 'wt_hide_post_meta' ) == 1 ){
								$hide_post_meta = 1;
							}				
						} else{
							$hide_post_meta = 1;
						}	

					if ( $hide_post_meta  != 1 ){ ?>
										
					<div class="entry-meta-wrap">
						<div class="entry-meta">
							<?php 
								$stars = get_overall_score();										
								if ($stars){ ?>
									<span class="score"><?php echo $stars; ?></span>
							<?php }	?>
							<span class="date"><?php echo get_the_date(); ?></span>
							<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>					
						</div>	
						<span class="line"></span>
						<span class="shape"></span>	
					</div>
					
				<?php } ?>
				</header><!-- /entry-header -->
				
				<?php		
					$post_banner1 = get_post_meta($post->ID, 'wt_meta_post_banner1', true);			
					if ($post_banner1 == "") {		
						if ( wt_get_option( 'wt_post_banner1' ) != "" ){
							$post_banner1 = wt_get_option( 'wt_post_banner1' );
						}				
					}
					
					if ($post_banner1 != ""){ ?>
						<div class="entry-ad">
							<div class="ad-inner-wrap">
								<?php echo $post_banner1; ?>
							</div>			
						</div><?php 
					}	
				?>
				
				<div class="entry-content-wrap section">	
					
					<div class="addthis_custom_sharing"></div>
					</br>	
		
					<div class="entry-content">	
						<?php
							$show_review = get_post_meta($post->ID, 'wt_meta_post_show_review', true);	
							if ( $show_review  == 1 ){ ?>
								<div class="review-container">
									<?php wt_show_review();	?>
								</div>
						<?php } ?>
						
						<?php the_content(); ?>
						
						<div class="addthis_custom_sharing"></div>
						

							
						
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'wellthemes' ) . '</span>', 'after' => '</div>' ) ); ?>
					</div><!-- /entry-content -->
					
				</div><!-- /entry-content-wrap -->
				
				<?php		
					$post_banner2 = get_post_meta($post->ID, 'wt_meta_post_banner2', true);			
					if ($post_banner2 == "") {		
						if ( wt_get_option( 'wt_post_banner2' ) != "" ){
							$post_banner2 = wt_get_option( 'wt_post_banner2' );
						}	
					}
					
					if ($post_banner2 != ""){ ?>
						<div class="entry-ad">
							<div class="ad-inner-wrap">
								<?php echo $post_banner2; ?>
							</div>
						</div><?php 
					}	
				?>
				
					<?php 

						$hide_social_links = get_post_meta($post->ID, 'wt_meta_post_hide_social', true);	

						if ($hide_social_links != 1) {		
							if ( wt_get_option( 'wt_hide_post_social' ) == 1 ){
								$hide_social_links = 1;
							}				
						} else{
							$hide_social_links = 1;
						}	

						if ( $hide_social_links != 1 ) { ?>

						<div class="entry-social section">	
							<?php
								$full_excerpt = get_the_excerpt();														

								$excerpt = mb_substr($full_excerpt,0, 150);									
								if (strlen($full_excerpt) > 150){
									$excerpt = $excerpt.'...';	
								} 

								$thumbnail = "";
								if (has_post_thumbnail() ){
									 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
									 $thumbnail = $image[0];
								}
							?>

							<div class="title">
								<h3><?php _e('Share this:', 'wellthemes'); ?></h3>
							</div>

							<div class="right">

								<ul class="list">
									<li class="fb">
										<a href="http://facebook.com/share.php?u=<?php the_permalink() ?>&amp;t=<?php the_title(); ?>" target="_blank"><i class="icon-facebook"></i><?php _e('Facebook', 'wellthemes'); ?></a>
									</li>

									<li class="twitter">
										<a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink();?>" target="_blank"><i class="icon-twitter"></i><?php _e('Twitter', 'wellthemes'); ?></a>	
									</li>

									<li class="gplus">			
										<a href="https://plus.google.com/share?url=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank"><i class="icon-google-plus"></i><?php _e('Google+', 'wellthemes'); ?></a>			
									</li>

									<li class="linkedin">
										<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>&amp;title=<?php the_title(); ?>&amp;summary=<?php echo $excerpt; ?>" target="_blank"><i class="icon-linkedin"></i><?php _e('Linkedin', 'wellthemes'); ?></a>
									</li>

									<li class="pinterest">
										<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo $thumbnail; ?>&amp;description=<?php the_title() ?>" target="_blank"><i class="icon-pinterest"></i><?php _e('Pinterest', 'wellthemes'); ?></a>
									</li>

								</ul>
							</div>
						</div><!-- /entry-social -->

					<?php } ?>
	
				<?php
					$hide_author_info = get_post_meta($post->ID, 'wt_meta_post_hide_author', true);			
					if ($hide_author_info != 1) {		
						if ( wt_get_option( 'wt_hide_author_info' ) == 1 ){
							$hide_author_info = 1;
						}				
					} else{
						$hide_author_info = 1;
					}
					
					if ( $hide_author_info != 1 ) { ?>
						<div class="entry-author section">	
							
							<div class="section-title">
								<div class="title-wrap main-color-bg">
									<div class="icon"><i class="icon-user"></i></div>
									<h3 class="title"><?php _e('About', 'wellthemes');?><span><?php the_author(); ?></span></h3>
								</div>
							</div>
							
							<div class="author-wrap">
								<div class="author-avatar">
									<?php echo get_avatar( get_the_author_meta( 'user_email' ), 80 ); ?>
								</div>			
								<div class="author-description">					
									<?php the_author_meta( 'description' ); ?>
									<div class="author-link">
										<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
											<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'wellthemes' ), get_the_author() ); ?>
										</a>
									</div>
								</div>
							</div>
						</div><!-- /entry-author -->		
				<?php } //endif; ?>
				
				<?php
					$hide_post_nav = get_post_meta($post->ID, 'wt_meta_post_hide_nav', true);			
					if ($hide_post_nav != 1) {	
						if ( wt_get_option( 'wt_hide_post_nav' ) == 1 ){
							$hide_post_nav = 1;
						}				
					} else{
						$hide_post_nav = 1;
					}			
						
					if ( $hide_post_nav  != 1 ){ ?>
						
						<div class="post-nav section">													
							<?php previous_post_link('<div class="prev-post"><i class="icon-double-angle-left"></i><h6>%link</h6></div>', '%title'); ?>	
							<?php next_post_link('<div class="next-post"><h6>%link</h6><i class="icon-double-angle-right"></i></div>', '%title'); ?>
						</div>
				<?php } ?>
	
			
				
			</div><!-- /entry-wrap -->			
		</div><!-- /tab1-content -->
		
		
		<div id="tab2-content" class="tab-content">
			<header class="tab-header">
				<div class="tab-title">
					<div class="icon"><i class="icon-file-text"></i></div>
					<h2><?php _e('Related Posts', 'wellthemes'); ?></h2>	
				</div>
				
				<div class="tab-subtitle">						
					<span class="line"></span>
					<span class="shape"></span>					
				</div>
			</header>
					
			<?php	get_template_part( 'includes/related-posts' ); 	?>
		</div><!-- /tab2-content -->
	</div><!-- /tabs-content-container -->
	
<?php setPostViews(get_the_ID()); ?>
</div><!-- /post-<?php the_ID(); ?> -->