<?php
/**
 * Plugin Name: Well Themes: Popular Categories
 * Plugin URI: http://wellthemes.com/
 * Description: This widhet displays the popular categories.
 * Version: 1.0
 * Author: Well Themes Team
 * Author URI: http://wellthemes.com/
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'wellthemes_popular_categories_widgets' );

function wellthemes_popular_categories_widgets() {
	register_widget( 'wellthemes_popular_categories_widget' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class wellthemes_popular_categories_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function wellthemes_popular_categories_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget_popular_categories', 'description' => __('Displays the most popular categories.', 'wellthemes') );

		/* Create the widget. */
		$this->WP_Widget( 'wellthemes_popular_categories_widget', __('Well Themes: Popular Categories', 'wellthemes'), $widget_ops);
	}

	/**
	 * display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		
		extract( $args );
	    $title = apply_filters('widget_title', $instance['title'] );
		$display_category = $instance['display_category'];
		$entries_display = $instance['entries_display'];
		
		if(empty($entries_display)){ 
			$entries_display = '10'; 
		}
		
		echo $before_widget;
		
		if ( $title ){ ?>
			<div class="widget-title">
				<div class="icon"><i class="icon-th-list"></i></div>
				<h4 class="title"><?php echo $title; ?></h4>
			</div>
		<?php }

        $args = array(
				'orderby'      => 'count',
				'order'        => 'desc',
				'hide_empty'   => 1,
				'hierarchical' => 0,
				'exclude'      => '',
				'include'      => $display_category,
				'number'       => $entries_display,
				'taxonomy'     => 'category',
				'pad_counts'   => false 
			);
		
		$categories = get_categories( $args );
		?>
		<ul class="list">
			<?php
				foreach ( $categories as $category ) {
					$cat_id = $category->term_id;
					$wt_category_meta = get_option( "wt_category_meta_color_$cat_id" );
			
					if (isset($wt_category_meta['wt_cat_meta_icon'])){
						$cat_icon = $wt_category_meta['wt_cat_meta_icon'];				
					}else{
						$cat_icon = 'icon-folder-close';			
					}			
			
					$output = '';					
					$output .= '<li class="main-color cat'.$cat_id.'-color">';			
					$output .= '<i class="'.$cat_icon.'"></i>';			
					$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name.'</a>';
					$output .= '<span class="count">('.$category->count.')</span>';
					$output .= '</li>';
					
					echo $output;
				}		
			?>
		</ul>
		
	   <?php		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {
		$defaults = array('title' => 'Popular Categories', 'entries_display' => 10, 'display_category' => '');
		$instance = wp_parse_args((array) $instance, $defaults);
	?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'wellthemes'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'entries_display' ); ?>"><?php _e('How many categories to display?', 'wellthemes'); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('entries_display'); ?>" name="<?php echo $this->get_field_name('entries_display'); ?>" value="<?php echo $instance['entries_display']; ?>" style="width:100%;" /></p>
 
		<p><label for="<?php echo $this->get_field_id( 'display_category' ); ?>"><?php _e('Display specific categories? Enter category ids separated with a comma (e.g. - 1, 3, 8)', 'wellthemes'); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('display_category'); ?>" name="<?php echo $this->get_field_name('display_category'); ?>" value="<?php echo $instance['display_category']; ?>" style="width:100%;" /></p>
	<?php
	}
}
?>