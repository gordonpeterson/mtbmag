<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<?php 
	twentyfourteen_post_thumbnail(); 
	// the_post_thumbnail('wt1600_450');
	?>

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
				the_title( '<h1 class="entry-title full">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title full"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>

		<div class="entry-meta full">
			<?php
				if ( 'post' == get_post_type() )
					twentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>

			<?php if ( current_user_can( 'edit_post' , get_the_ID() ) & function_exists( "the_views" ) ) { ?>
			<span class="tab-related single">
				<i class="genericon genericon-show"></i>
					<?php the_views();  ?>
			</span>	
				<?php } ?>

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	
	<?php $adText = 'You have not added content for this ad space. Go to your widgets section and select '; ?>
	<div class="scroll-area">
		<?php if ( is_search() ) : ?>
		<div class="entry-summary full">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>

		<div class="entry-content full">

		<?php 
			$the_long_post_date = strtotime($post->post_date);
			$v2_launch_date = strtotime('03/09-2015');
		?>
		<div class="">
			<!-- <?php echo "post: $the_long_post_date" ?> -->
			<!-- <?php echo "current: $v2_launch_date" ?> -->
		</div>
		<?php if ( $the_long_post_date <= $v2_launch_date ): ?>
			<div class="ads-row">
				<?php if ( ! dynamic_sidebar( 'ad-widget1' ) ) : ?>
					<div class="widget no-widget">
							<p><?php _e("$adText ad1 300x250", 'twentytwelve'); ?></p>
					</div>
				<?php endif; ?>

				<?php if ( ! dynamic_sidebar( 'ad-widget2' ) ) : ?>
					<div class="widget no-widget">
							<p><?php _e("$adText ad2 300x250", 'twentytwelve'); ?></p>
					</div>
				<?php endif; ?>
			</div>
		<?php  endif; ?>

		<div class="review-container">
			<?php wt_show_review();	?>
		</div>

			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>

					

					
					<div class="ads-row">
						<?php if ( ! dynamic_sidebar( 'ad-widget6' ) ) : ?>
							<div class="widget no-widget">
									<p><?php _e("$adText ad6 300x250", 'twentytwelve'); ?></p>
							</div>
						<?php endif; ?>

						<?php if ( ! dynamic_sidebar( 'ad-widget7' ) ) : ?>
							<div class="widget no-widget">
									<p><?php _e("$adText ad7 300x250", 'twentytwelve'); ?></p>
							</div>
						<?php endif; ?>
					</div>

		<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
	</div> <!-- .scroll-ares -->
</article><!-- #post-## -->
