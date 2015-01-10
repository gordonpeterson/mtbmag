<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package  WellThemes
 * @file     content-page.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		
		<header class="page-header">
			<h1><?php the_title(); ?></h1>
							
			<div class="entry-meta-wrap">	
				<?php
					$hide_post_meta = get_post_meta($post->ID, 'wt_meta_post_hide_meta', true);			
					if ($hide_post_meta != 1) {		
						if ( wt_get_option( 'wt_hide_page_meta' ) == 1 ){
							$hide_post_meta = 1;
						}				
					} else{
						$hide_post_meta = 1;
					}				
				
					if ( $hide_post_meta  != 1 ){ ?>
						<div class="entry-meta">
							<span class="date"><?php echo get_the_date(); ?></span>
							<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>					
						</div>
				<?php } ?>
		
		
				<span class="line"></span>
				<span class="shape"></span>					
			</div>
		
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
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'wellthemes' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- /entry-content -->
	
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

</article><!-- /post-<?php the_ID(); ?> -->
<?php
	$hide_author_info = get_post_meta($post->ID, 'wt_meta_post_hide_author', true);			
	if ($hide_author_info != 1) {		
		if ( wt_get_option( 'wt_hide_page_author_info' ) == 1 ){
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

	$hide_social_links = get_post_meta($post->ID, 'wt_meta_post_hide_social', true);	
	
	if ($hide_social_links != 1) {		
		if ( wt_get_option( 'wt_hide_page_social' ) == 1 ){
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