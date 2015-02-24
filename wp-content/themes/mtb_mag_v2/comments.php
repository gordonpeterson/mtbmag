<?php
/**
 * The template for displaying Comments.
 */
?>
	

<div id="comments" class="comments-area">
	<div class="addthis_custom_sharing"></div>

	<div class="fb-comments" data-href="<?php echo(get_permalink()) ?>" data-width="750px" data-numposts="15" data-colorscheme="light"></div>
	
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'wellthemes' ); ?></p>
	</div><!-- /comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // if has comments ?>

	<?php if ( have_comments() ) : ?>
		
		<div class="section-title comments-title">
			
			<div class="title-wrap main-color-bg">				
				<div class="icon"><i class="icon-comments"></i></div>
				<h3><?php printf(_n('1 commento', '%1$s commenti', get_comments_number()), number_format_i18n( get_comments_number() ), 'wellthemes' ); ?>
				</h3>
			</div>
		</div>
		
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size'=> 34,
				) );
			?>
		</ol><!-- .comment-list -->

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
