<?php
/**
 * Plugin Name: Well Themes: Top Reviews Text
 * Plugin URI: http://wellthemes.com/
 * Description: This widhet displays the most top review posts in the sidebar.
 * Version: 1.0
 * Author: Well Themes Team
 * Author URI: http://wellthemes.com/
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'wellthemes_most_read_widgets' );

function wellthemes_most_read_widgets() {
	register_widget( 'wellthemes_most_read_widget' );
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class wellthemes_most_read_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function wellthemes_most_read_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget_reviews_text', 'description' => __('Displays the most read posts from previous week', 'wellthemes') );

		/* Create the widget. */
		$this->WP_Widget( 'wellthemes_most_read_widget', __('Well Themes: Most Read Posts', 'wellthemes'), $widget_ops);
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
			$entries_display = '5'; 
		}
		
		echo $before_widget;
       ?>
		
		<?php if ( $title ){ ?>
			<div class="widget-title">
				<div class="icon"><i class="icon-star"></i></div>
				<h4 class="title"><?php echo $title; ?></h4>
			</div>
		<?php } ?>
		
		<div class="popular-posts">
			<ul class="list post-list">
				
				<?php
				
					function week_posts( $where = '' ) {
						$where .= " AND post_date > '" . date('Y-m-d', strtotime('-7 days')) . "'";
						return $where;
					}
					add_filter( 'posts_where', 'week_posts' );
						
					$args = array(
						'cat' => $display_category,
						'post_type' => 'post',
						'ignore_sticky_posts' => 1,
						'posts_per_page' => $entries_display,
						'meta_key' => 'post_views_count',
						'orderby' => 'meta_value_num'
					);
					
					$query = new WP_Query( $args );
					remove_filter( 'posts_where', 'week_posts' );
					$i = 0;
					while($query->have_posts()): $query->the_post();  
						$i++;
						?>			
						<li>						
							
							<h6>
								<a href="<?php the_permalink() ?>" rel="bookmark">
								<?php 
									//display only first 60 characters in the title.	
									$short_title = mb_substr(the_title('','',FALSE),0, 80);
									echo $short_title; 
									if (strlen($short_title) > 60){ 
										echo '...'; 
									} 
								?>	
								</a>
							</h6>
							
							<div class="entry-meta meta-bottom">
														
							</div>
							
							<div class="post-number"><?php echo $i; ?></div>						
							
						</li><!-- /item-post -->
			   <?php endwhile; ?>
		   </ul>
	   </div><!--/popular-posts -->
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
		$defaults = array('title' => 'Most Read Posts', 'entries_display' => 5, 'display_category' => '');
		$instance = wp_parse_args((array) $instance, $defaults);
	?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'wellthemes'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'entries_display' ); ?>"><?php _e('How many entries to display?', 'wellthemes'); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('entries_display'); ?>" name="<?php echo $this->get_field_name('entries_display'); ?>" value="<?php echo $instance['entries_display']; ?>" style="width:100%;" /></p>
 
		<p><label for="<?php echo $this->get_field_id( 'display_category' ); ?>"><?php _e('Display specific categories? Enter category ids separated with a comma (e.g. - 1, 3, 8)', 'wellthemes'); ?></label>
		<input type="text" id="<?php echo $this->get_field_id('display_category'); ?>" name="<?php echo $this->get_field_name('display_category'); ?>" value="<?php echo $instance['display_category']; ?>" style="width:100%;" /></p>
	<?php
	}
}
?>