<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to wellthemes_comment() which is
 * located in the functions.php file.
 *
 * @package  WellThemes
 * @file     comments.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
	
<?php	if(ICL_LANGUAGE_CODE == 'en'){ ?>
	
	<div class="fb-comments" data-href="<?php echo(get_permalink()) ?>" data-width="100%" data-numposts="15" data-colorscheme="light"></div>
	
<?php } ?>
	
	
<?php	if(ICL_LANGUAGE_CODE == 'it'){ ?>	
	<div  align="center">
		
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- MTBMAG-Comments -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-1056055791858632"
		     data-ad-slot="8529189709"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		

		</div>
</br>
	<?php	}
		else {?>
			<?php } ?>


	

<div id="comments">
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
			
			<div class="comments-num main-color-bg">
				
			</div>
			
			<div class="add-comment">
				<h4><a href="#respond"><?php _e('Leave Comment', 'wellthemes');?></a></h4>
			</div>
		</div>
		
		<ol class="commentlist">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use wellthemes_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define wellthemes_comment() and that will be used instead.
				 * See wellthemes_comment() in functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'wellthemes_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav class="comment-nav">
			<h4><?php _e( 'Comment navigation', 'wellthemes' ); ?></h4>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wellthemes' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wellthemes' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		
	<?php endif; ?>
	

	<?php comment_form(); ?>

</div><!-- /comments -->
