<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!-- 
<article id="post-<?php the_ID(); ?>" <?php post_class('big'); ?> ng-controller="coverCtrl as vm" ng-style="{'height': vm.coverHeight+'px'}">
 -->
<article id="post-<?php the_ID(); ?>" <?php post_class('big'); ?> style="height: 0; overflow:visible;" >
	<div class="post-thumbnail" ?>
	<?php
		if ( has_post_thumbnail() ) :
				the_post_thumbnail( 'twentyfourteen-full-width' );
		endif;
	?>
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
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				endif;
			?>

			<div class="excerpt">
				<?php //the_excerpt(); ?>
			</div>

			<div class="entry-meta">
				<?php
					if ( 'post' == get_post_type() )
						mtb_posted_on();

					if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
				?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
				<?php
					endif;

					edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
				?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
	</div> <!-- .post-info -->
</article><!-- #post-## -->
