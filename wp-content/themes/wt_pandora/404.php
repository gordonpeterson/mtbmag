<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package  WellThemes
 * @file     404.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */

?>
<?php get_header(); ?>

<div id="content" class="error-page full-content">

	<div class="error-info col col-350">	
		<h3><?php _e('Yes, this is the end...', 'wellthemes'); ?><span class="main-color"><?php _e('Or is it?', 'wellthemes'); ?></span></h3>
		
		<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'wellthemes' ); ?></p>
		
		<div class="post-list">
			<?php the_widget('WP_Widget_Recent_Posts', array('number' => 3, 'title' => ' '), array('before_title' => '', 'after_title' => '')); ?>
		</div>
		
		<div class="search">
			<?php get_search_form(); ?>
		</div>
		
	</div>
	
	<div class="error-image col col-350">	
		<img src="<?php echo get_template_directory_uri(); ?>/images/404.png" />
	</div>
	
	<div class="error-number col col-350 last">	
		<h1>4<span class="main-color">0</span>4<h1>
		<h2><?php _e('Page not found', 'fairpixels');?></h2>
	</div>
	
</div><!-- /content -->
<?php get_footer(); ?>