<?php
/**
 * The template for displaying content in the archive and search results template
 *
 * @package  WellThemes
 * @file     content-excerpt.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	
	<?php if ( has_post_thumbnail() ) {	?>
		<div class="thumb">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'wt360_210' ); ?></a>
			<?php
				$cat_icon = wt_get_post_cat_icon();
				if ($cat_icon){
					echo $cat_icon;
				} 
			?>												
		</div>
	<?php } ?>
	
	<div class="excerpt-wrap">
	
		<div class="entry-meta">
			<?php 
				$stars = get_overall_score();										
				if ($stars){ ?>
					<span class="score"><?php echo $stars; ?></span>
			<?php }	?>
			<span class="date"><?php echo get_the_date(); ?></span>
			<span class="author"><?php _e('by ', 'wellthemes'); ?><?php the_author_posts_link(); ?></span>
			<span class="comments">
				<i class="icon-comments"></i><?php comments_popup_link( __('', 'wellthemes'), __( '', 'wellthemes'), __('%', 'wellthemes')); ?>
			</span>
		</div>	
		
		<h2>
			<a href="<?php the_permalink() ?>">
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
										

		
	</div>
	
</article><!-- /post-<?php the_ID(); ?> -->