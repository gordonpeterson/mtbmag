<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package  WellThemes
 * @file     sidebar-left.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?> 
<?php
	$sidebar_name ="";	
	
	if ( is_home() ){	
		$homepage_sidebar = wt_get_option( 'wt_home_sidebar' );
		$sidebar_name = sanitize_title( $homepage_sidebar );		
	} elseif ( is_single() ){
		$single_post_sidebar = get_post_meta($post->ID, 'wt_meta_post_sidebar_name', true);
		$sidebar_name = sanitize_title($single_post_sidebar);
		
		if (empty( $sidebar_name)){
			$single_post_sidebar = wt_get_option( 'wt_single_post_sidebar' );
			$sidebar_name = sanitize_title( $single_post_sidebar );	
		}	
		
	} elseif( is_page() ){
		
		$single_page_sidebar = get_post_meta($post->ID, 'wt_meta_post_sidebar_name', true);
		$sidebar_name = sanitize_title($single_page_sidebar);
		
		if (empty( $sidebar_name)){
			$single_page_sidebar = wt_get_option( 'wt_single_page_sidebar' );
			$sidebar_name = sanitize_title( $single_page_sidebar );	
		}
		
	} elseif ( is_category() ){
		$category_sidebar = wt_get_option( 'wt_category_sidebar' );
		$sidebar_name = sanitize_title( $category_sidebar );	
	} elseif ( is_archive() ){
		$archive_sidebar = wt_get_option( 'wt_archive_sidebar' );
		$sidebar_name = sanitize_title( $archive_sidebar );
	} else {
		$sidebar_name = 'sidebar-1';
	}
	
	if ( empty($sidebar_name) ){
		$sidebar_name = 'sidebar-1';
	}
	
?>
<div id="sidebar">
	<?php if ( ! dynamic_sidebar( $sidebar_name ) ) : ?>
		<div class="widget no-widget">
			<p><?php _e('You have not selected any widget for this sidebar. Go to your widgets section and select widgets.', 'wellthemes'); ?></p>
		</div>
	<?php endif; ?>
</div><!-- /sidebar -->	