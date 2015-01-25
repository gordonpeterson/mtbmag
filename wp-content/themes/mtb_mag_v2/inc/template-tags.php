<?php
/**
 * Custom template tags for Twenty Fourteen
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! function_exists( 'mtb_posted_on' ) ) :
/**
 * Print HTML with meta information for the current post-date/time and author.
 *
 * @since Twenty Fourteen 1.0
 */
function mtb_posted_on() {
	if ( is_sticky() && is_home() && ! is_paged() ) {
		echo '<span class="featured-post">' . __( 'Sticky', 'twentyfourteen' ) . '</span>';
	}

	// Set up and print post meta information.
	// %4$s <---- the author url param
	printf( '<span class="entry-date">
	       <a href="%1$s" rel="bookmark">
	       `<time class="entry-date" datetime="%2$s">%3$s</time>
	       </a>
	       </span> 
	       <span class="byline">
	       	<span class="author vcard">
	       		<a class="url fn n " href="" rel="author">%5$s</a>
	       		</span>
	       	</span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_author()
	);
}
endif;
