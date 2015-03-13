<?php
/**
 * mtb-mag functions
**/


function mtb_mag_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'secondary', __( 'Footer Menu', 'twentytwelve' ) );


if (!is_admin()){
    add_action('wp_enqueue_scripts', 'gordon_js');
}

if (!function_exists('gordon_js')) {

    function gordon_js() {
			wp_enqueue_script('mtb_hoverIntent', get_stylesheet_directory().'/js/hoverIntent.js',array('jquery'),'', true);
			wp_enqueue_script('mtb_superfish', get_stylesheet_directory().'/js/superfish.js',array('hoverIntent'),'', true);
			wp_enqueue_script('mtb_slider', get_stylesheet_directory() . '/js/flexslider-min.js', array('jquery'),'', true); 
			wp_enqueue_script('mtb_lightbox', get_stylesheet_directory() . '/js/lightbox.min.js', array('jquery'),'', true); 		
			wp_enqueue_script('mtb_jflickrfeed', get_stylesheet_directory() . '/js/jflickrfeed.min.js', array('jquery'),'', true); 
			wp_enqueue_script('mtb_mobilemenu', get_stylesheet_directory() . '/js/jquery.mobilemenu.js', array('jquery'),'', true); 
			wp_enqueue_script('mtb_touchSwipe', get_stylesheet_directory() . '/js/jquery.touchSwipe.min.js', array('jquery'),'', true); 
			wp_enqueue_script('mtb_carousel', get_stylesheet_directory() . '/js/jquery.carouFredSel-6.2.1-packed.js', array('jquery')); 
			wp_enqueue_script('mtb_mousewheel', get_stylesheet_directory() . '/js/jquery.mousewheel.min.js', array('jquery'),'', true);	
			wp_enqueue_script('mtb_custom', get_stylesheet_directory() . '/js/custom.js', array('jquery'),'', true);		
    }
	
}

	

	// New widgetized sidebar area for pages
	register_sidebar( array(
		'name' => __( 'Ad1 300x250', 'twentytwelve' ),
		'id' => 'ad-widget1',
		'description' => __( 'The first ad slot (300x250). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Ad2 300x250', 'twentytwelve' ),
		'id' => 'ad-widget2',
		'description' => __( 'The second ad slot (300x250). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Ad3 727x90', 'twentytwelve' ),
		'id' => 'ad-widget3',
		'description' => __( 'The third ad slot (727x90). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad727x90 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad4 300x250', 'twentytwelve' ),
		'id' => 'ad-widget4',
		'description' => __( 'The second ad slot (300x250). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'Ad5 300x250', 'twentytwelve' ),
		'id' => 'ad-widget5',
		'description' => __( 'The fifth ad slot (300x250). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad6 300x250', 'twentytwelve' ),
		'id' => 'ad-widget6',
		'description' => __( 'The seventh ad slot (300x600). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad7 300x250', 'twentytwelve' ),
		'id' => 'ad-widget7',
		'description' => __( 'The seventh ad slot (300x600). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad6 300x600', 'twentytwelve' ),
		'id' => 'ad-widget6',
		'description' => __( 'The sixth ad slot (300x600). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad8 750x450', 'twentytwelve' ),
		'id' => 'ad-widget8',
		'description' => __( 'The eighth ad slot (750x450). Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad Full', 'twentytwelve' ),
		'id' => 'ad-widget-full',
		'description' => __( 'The full page ad slot for article pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad-full %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Social Media', 'twentytwelve' ),
		'id' => 'social-media',
		'description' => __( 'These are the social media links', 'twentytwelve' ),
		'before_widget' => '<nav id="%1$s" class="social-media %2$s">',
		'after_widget' => '</nav>',
		'before_title' => '<h3 class="social-media-title">',
		'after_title' => '</h3>',
	) );
	
	remove_action( 'widgets_init', 'twentyfourteen_widgets_init' );


}
add_action( 'after_setup_theme', 'mtb_mag_setup', 11 ); 



add_action( 'admin_init', 'mtb_register_admin_scripts' );
function mtb_register_admin_scripts() {


	echo "<script type='text/javascript'>console.log('----------fuzz: mtb_register_admin_scripts()-----------');</script>";
	wp_enqueue_style( 'wt_theme_options_css', get_template_directory_uri() . '/framework/settings/css/theme-options.css');
	// wp_enqueue_style( 'wt-font-awesome', get_template_directory_uri().'/css/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style('thickbox');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-slider');
	wp_enqueue_script( 'wt_colorpicker', get_template_directory_uri() . '/framework/settings/js/colorpicker.js', array( 'jquery' ));
	wp_enqueue_script( 'wt_select_js', get_template_directory_uri() . '/framework/settings/js/jquery.customSelect.min.js', array( 'jquery' ));
	wp_enqueue_script( 'wt_theme_options', get_template_directory_uri() . '/framework/settings/js/theme-options.js', array( 'jquery','wt_select_js' ));
}

function wellthemes_post_meta_settings() {
	add_meta_box("wt_meta_post_review", "Review Settings", "wt_meta_post_review", "post", "normal", "high");
	// add_meta_box("wt_meta_post_general_settings", "General Settings", "wt_meta_post_general_settings", "post", "normal", "high");
	// add_meta_box("wt_meta_post_style_settings", "Style Settings", "wt_meta_post_style_settings", "post", "normal", "high");
	// add_meta_box("wt_meta_post_sidebar_settings", "Sidebar Settings", "wt_meta_post_sidebar_settings", "post", "normal", "high");
	// add_meta_box("wt_meta_post_ads_settings", "Ads Settings", "wt_meta_post_ads_settings", "post", "normal", "high");
	
	$post_id = '';
	
	if(isset($_GET['post'])){  
		$post_id = $_GET['post'];
    }
	
	if(isset($_POST['post_ID'])){
		$post_id =  $_POST['post_ID'];
    }	
	
	$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);

	if ($template_file == 'page-featured.php') {
		add_meta_box("wt_meta_featured_page_settings", "Featured Page Settings", "wt_meta_featured_page_settings", "page", "normal", "high");
	} else {
		add_meta_box("wt_meta_post_general_settings", "General Settings", "wt_meta_post_general_settings", "page", "normal", "high");
	}	
	
	add_meta_box("wt_meta_post_style_settings", "Style Settings", "wt_meta_post_style_settings", "page", "normal", "high");
	add_meta_box("wt_meta_post_sidebar_settings", "Sidebar Settings", "wt_meta_post_sidebar_settings", "page", "normal", "high");
	add_meta_box("wt_meta_post_ads_settings", "Ads Settings", "wt_meta_post_ads_settings", "page", "normal", "high");
	
	
}
add_action( 'add_meta_boxes', 'wellthemes_post_meta_settings' );


function wt_meta_post_review() {
	global $post;
	wp_nonce_field( 'wellthemes_save_postmeta_nonce', 'wellthemes_postmeta_nonce' );	?>	
		
	<div class="meta-field field-checkbox">
		<input type="checkbox" name="wt_meta_post_show_review" id="wt_meta_post_show_review" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_show_review', true ), 1 ); ?> />
		<label for="wt_meta_post_show_review"><?php _e( 'Enable Review', 'wellthemes' ); ?></label>
	</div>		
		
	<div id="wt-post-meta-review-options">
		
		<div class="meta-field">
			<label for="wt_meta_post_review_title"><?php _e( 'Review title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_review_title" type="text" id="wt_meta_post_review_title" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_review_title', true ); ?>" /> 
		</div>
			
		<div class="review-item">				
			<div class="meta-field">
				<label for="wt_meta_post_review_item1_title"><?php _e( 'Item 1 title:', 'wellthemes' ); ?></label>
				<input name="wt_meta_post_review_item1_title" type="text" id="wt_meta_post_review_item1_title" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_review_item1_title', true ); ?>" /> 
			</div>
			<div class="meta-field">
				<?php
					if ( get_post_meta( $post->ID, 'wt_meta_post_review_item1_score', true ) ){
						$saved_score = get_post_meta( $post->ID, 'wt_meta_post_review_item1_score', true );
					} else{
						$saved_score = 0;
					}
				?>
				<label for="wt_meta_post_review_item1_score"><?php _e( 'Item 1 score:', 'wellthemes' ); ?></label>
				<div id="review_item1_slider" class="review-slider"></div>					
				<input name="wt_meta_post_review_item1_score" type="text" id="wt_meta_post_review_item1_score" value="<?php echo $saved_score; ?>" class="review-score" /> 
				<script>
					jQuery(document).ready(function() {
						jQuery("#review_item1_slider").slider({
								range: "min",
								min: 0,
								max: 50,
								value: <?php echo $saved_score; ?>,
								slide: function(event, ui) {
									jQuery("#wt_meta_post_review_item1_score").attr("value", ui.value );
								}
						});
					});
				</script>
			</div>
		</div><!-- /review-item -->
			
		<div class="review-item">				
			<div class="meta-field">
				<label for="wt_meta_post_review_item2_title"><?php _e( 'Item 2 title:', 'wellthemes' ); ?></label>
				<input name="wt_meta_post_review_item2_title" type="text" id="wt_meta_post_review_item2_title" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_review_item2_title', true ); ?>" /> 
			</div>
			
			<div class="meta-field">
				<?php
					if ( get_post_meta( $post->ID, 'wt_meta_post_review_item2_score', true ) ){
						$saved_score = get_post_meta( $post->ID, 'wt_meta_post_review_item2_score', true );
					} else{
						$saved_score = 0;
					}
				?>
				<label for="wt_meta_post_review_item2_score"><?php _e( 'Item 2 score:', 'wellthemes' ); ?></label>
				<div id="review_item2_slider" class="review-slider"></div>					
				<input name="wt_meta_post_review_item2_score" type="text" id="wt_meta_post_review_item2_score" value="<?php echo $saved_score; ?>" class="review-score" /> 
				<script>
					jQuery(document).ready(function() {
						jQuery("#review_item2_slider").slider({
								range: "min",
								min: 0,
								max: 50,
								value: <?php echo $saved_score; ?>,
								slide: function(event, ui) {
									jQuery("#wt_meta_post_review_item2_score").attr("value", ui.value );
								}
						});
					});
				</script>
			</div>
		</div><!-- /review-item -->
			
		<div class="review-item">				
			<div class="meta-field">
				<label for="wt_meta_post_review_item3_title"><?php _e( 'Item 3 title:', 'wellthemes' ); ?></label>
				<input name="wt_meta_post_review_item3_title" type="text" id="wt_meta_post_review_item3_title" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_review_item3_title', true ); ?>" /> 
			</div>
			
			<div class="meta-field">
				<?php
					if ( get_post_meta( $post->ID, 'wt_meta_post_review_item3_score', true ) ){
						$saved_score = get_post_meta( $post->ID, 'wt_meta_post_review_item3_score', true );
					} else{
						$saved_score = 0;
					}
				?>
				<label for="wt_meta_post_review_item3_score"><?php _e( 'Item 3 score:', 'wellthemes' ); ?></label>
				<div id="review_item3_slider" class="review-slider"></div>					
				<input name="wt_meta_post_review_item3_score" type="text" id="wt_meta_post_review_item3_score" value="<?php echo $saved_score; ?>" class="review-score" /> 
				<script>
					jQuery(document).ready(function() {
						jQuery("#review_item3_slider").slider({
								range: "min",
								min: 0,
								max: 50,
								value: <?php echo $saved_score; ?>,
								slide: function(event, ui) {
									jQuery("#wt_meta_post_review_item3_score").attr("value", ui.value );
								}
						});
					});
				</script>
			</div>
		</div><!-- /review-item -->
			
		<div class="review-item">				
			<div class="meta-field">
				<label for="wt_meta_post_review_item4_title"><?php _e( 'Item 4 title:', 'wellthemes' ); ?></label>
				<input name="wt_meta_post_review_item4_title" type="text" id="wt_meta_post_review_item4_title" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_review_item4_title', true ); ?>" /> 
			</div>
			
			<div class="meta-field">
				<?php
					if ( get_post_meta( $post->ID, 'wt_meta_post_review_item4_score', true ) ){
						$saved_score = get_post_meta( $post->ID, 'wt_meta_post_review_item4_score', true );
					} else{
						$saved_score = 0;
					}
				?>
				<label for="wt_meta_post_review_item4_score"><?php _e( 'Item 4 score:', 'wellthemes' ); ?></label>
				<div id="review_item4_slider" class="review-slider"></div>					
				<input name="wt_meta_post_review_item4_score" type="text" id="wt_meta_post_review_item4_score" value="<?php echo $saved_score; ?>" class="review-score" /> 
				<script>
					jQuery(document).ready(function() {
						jQuery("#review_item4_slider").slider({
								range: "min",
								min: 0,
								max: 50,
								value: <?php echo $saved_score; ?>,
								slide: function(event, ui) {
									jQuery("#wt_meta_post_review_item4_score").attr("value", ui.value );
							}
						});
					});
				</script>
			</div>
		</div><!-- /review-item -->
			
		<div class="review-item">				
			<div class="meta-field">
				<label for="wt_meta_post_review_item5_title"><?php _e( 'Item 5 title:', 'wellthemes' ); ?></label>
				<input name="wt_meta_post_review_item5_title" type="text" id="wt_meta_post_review_item5_title" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_review_item5_title', true ); ?>" /> 
			</div>
			
			<div class="meta-field">
				<?php
					if ( get_post_meta( $post->ID, 'wt_meta_post_review_item5_score', true ) ){
						$saved_score = get_post_meta( $post->ID, 'wt_meta_post_review_item5_score', true );
					} else{
						$saved_score = 0;
					}
				?>
				<label for="wt_meta_post_review_item5_score"><?php _e( 'Item 5 score:', 'wellthemes' ); ?></label>
				<div id="review_item5_slider" class="review-slider"></div>					
				<input name="wt_meta_post_review_item5_score" type="text" id="wt_meta_post_review_item5_score" value="<?php echo $saved_score; ?>" class="review-score" /> 
				<script>
					jQuery(document).ready(function() {
						jQuery("#review_item5_slider").slider({
								range: "min",
								min: 0,
								max: 50,
								value: <?php echo $saved_score; ?>,
								slide: function(event, ui) {
									jQuery("#wt_meta_post_review_item5_score").attr("value", ui.value );
								}
						});
					});
				</script>
			</div>
		</div><!-- /review-item -->
		
		<div class="review-item">				
			<div class="meta-field">
				<label for="wt_meta_post_review_item6_title"><?php _e( 'Overall title:', 'wellthemes' ); ?></label>
				<input name="wt_meta_post_review_item6_title" type="text" id="wt_meta_post_review_item6_title" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_review_item6_title', true ); ?>" /> 
			</div>
			
			<div class="meta-field">
				<?php
					if ( get_post_meta( $post->ID, 'wt_meta_post_review_item6_score', true ) ){
						$saved_score = get_post_meta( $post->ID, 'wt_meta_post_review_item6_score', true );
					} else{
						$saved_score = 0;
					}
				?>
				<label for="wt_meta_post_review_item6_score"><?php _e( 'Overall score:', 'wellthemes' ); ?></label>
				<div id="review_item6_slider" class="review-slider"></div>					
				<input name="wt_meta_post_review_item6_score" type="text" id="wt_meta_post_review_item6_score" value="<?php echo $saved_score; ?>" class="review-score" /> 
				<script>
					jQuery(document).ready(function() {
						jQuery("#review_item6_slider").slider({
								range: "min",
								min: 0,
								max: 50,
								value: <?php echo $saved_score; ?>,
								slide: function(event, ui) {
									jQuery("#wt_meta_post_review_item6_score").attr("value", ui.value );
								}
						});
					});
				</script>
			</div>
			<div class="meta-field">
				<label for="wt_meta_post_review_item6_rating_text"><?php _e( 'Overall rating text:', 'wellthemes' ); ?></label>
				<input name="wt_meta_post_review_item6_rating_text" type="text" id="wt_meta_post_review_item6_rating_text" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_review_item6_rating_text', true ); ?>" /> 
			</div>
			
		</div><!-- /review-item -->
		<div class="review-desc"><?php _e('Select on scale of 1 - 50. Example: 45 will be converted to 4.5', 'wellthemes'); ?></div>
		
		<div class="meta-field">
			<label for="wt_meta_review_summary"><?php _e( 'Review Summary:', 'wellthemes' ); ?></label>
			<input name="wt_meta_review_summary" type="text" id="wt_meta_review_summary" value="<?php echo get_post_meta( $post->ID, 'wt_meta_review_summary', true ); ?>" /> 
		</div>		
		
	</div><!-- /wt-post-meta-review-options -->
	
	<?php

}






add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if(is_single() && $item->title == "Blog"){ //Notice you can change the conditional from is_single() and $item->title
             $classes[] = "special-class";
     }
     return $classes;
}

//[ad12]
function get_ads1( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget1' );
	$adText .= get_dynamic_sidebar( 'ad-widget2' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad12', 'get_ads1' );

//[ad45]
function get_ads2( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget4' );
	$adText .= get_dynamic_sidebar( 'ad-widget5' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad45', 'get_ads2' );

//[ad67]
function get_ads3( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget6' );
	$adText .= get_dynamic_sidebar( 'ad-widget7' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad67', 'get_ads3' );

//[ad1]
function get_ad1( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget1' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad1', 'get_ad1' );

//[ad2]
function get_ad2( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget2' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad2', 'get_ad2' );

//[ad3]
function get_ad3( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget3' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad3', 'get_ad3' );




function get_dynamic_sidebar($index = 1) {
	$sidebar_contents = "";
	ob_start();
	dynamic_sidebar($index);
	$sidebar_contents = ob_get_contents();
	ob_end_clean();
	return $sidebar_contents;
}


function wt_show_review(){
	global $post ;
		$review_title = get_post_meta($post->ID, 'wt_meta_post_review_title', true);
		?>
		
		<div class="section-title">
			<div class="title-wrap main-color-bg">
				<div class="icon"><i class="icon-list"></i></div>
				<h3><?php echo $review_title; ?></h3>
			</div>
		</div>
		
		<div class="review-wrap">
		<div class="review-items">
			<?php
			
			echo "<!-- postID: $post->ID -->";
			$item1_title = get_post_meta($post->ID,'wt_meta_post_review_item1_title', true);
			echo "<!--item1_title: $item1_title -->";
			$item1_score = get_post_meta($post->ID,'wt_meta_post_review_item1_score', true);
			echo "<!-- item1_score: $item1_score -->";
				
			if( $item1_title && $item1_score && is_numeric( $item1_score )){
				
				if ( $item1_score > 50 ){
					$item1_score = 50;
				}
					
				if ( $item1_score < 0 ){
					$item1_score = 0;
				}
				
				echo "<!-- item1_stars -->";
				$item1_stars = wt_calculate_stars($item1_score);			
				echo "<!-- item1_render -->";
				?>
				
				<div class="review-item">
					<div class="item-title"><?php echo $item1_title; ?></div>
					<div class="review-stars main-color"><?php echo $item1_stars; ?></div>
				</div>
				<?php			
			}
			
			$item2_title = get_post_meta($post->ID,'wt_meta_post_review_item2_title', true);
			echo "<!--item2_title: $item2_title -->";
			$item2_score = get_post_meta($post->ID,'wt_meta_post_review_item2_score', true);
			echo "<!-- item2_score: $item2_score -->";
			
			if( $item2_title && $item2_score && is_numeric( $item2_score )){
				
				if ( $item2_score > 100 ){
					$item2_score = 100;
				}
					
				if ( $item2_score < 0 ){
					$item2_score = 0;
				}
				
				$item2_stars = wt_calculate_stars($item2_score);			
				?>
				
				<div class="review-item">
					<div class="item-title"><?php echo $item2_title; ?></div>
					<div class="review-stars main-color"><?php echo $item2_stars; ?></div>
				</div>
				<?php			
			}
			
			$item3_title = get_post_meta($post->ID,'wt_meta_post_review_item3_title', true);
			echo "<!--item3_title: $item3_title -->";
			$item3_score = get_post_meta($post->ID,'wt_meta_post_review_item3_score', true);
			echo "<!-- item3_score: $item3_score -->";
			
			if( $item3_title && $item3_score && is_numeric( $item3_score )){
				
				if ( $item3_score > 100 ){
					$item3_score = 100;
				}
					
				if ( $item3_score < 0 ){
					$item3_score = 0;
				}
				
				$item3_stars = wt_calculate_stars($item3_score);		
				?>
				
				<div class="review-item">
					<div class="item-title"><?php echo $item3_title; ?></div>
					<div class="review-stars main-color"><?php echo $item3_stars; ?></div>
				</div>
				<?php			
			}
			
			$item4_title = get_post_meta($post->ID,'wt_meta_post_review_item4_title', true);
			echo "<!--item4_title: $item4_title -->";
			$item4_score = get_post_meta($post->ID,'wt_meta_post_review_item4_score', true);
			echo "<!-- item4_score: $item4_score -->";
			
			if( $item4_title && $item4_score && is_numeric( $item4_score )){
				
				if ( $item4_score > 100 ){
					$item4_score = 100;
				}
					
				if ( $item4_score < 0 ){
					$item4_score = 0;
				}
				
				$item4_stars = wt_calculate_stars($item4_score);		
				?>
				
				<div class="review-item">
					<div class="item-title"><?php echo $item4_title; ?></div>
					<div class="review-stars main-color"><?php echo $item4_stars; ?></div>
				</div>
				<?php			
			}
			
			$item5_title = get_post_meta($post->ID,'wt_meta_post_review_item5_title', true);
			echo "<!--item5_title: $item5_title -->";
			$item5_score = get_post_meta($post->ID,'wt_meta_post_review_item5_score', true);
			echo "<!-- item5_score: $item5_score -->";
			
			if( $item5_title && $item5_score && is_numeric( $item5_score )){
				
				if ( $item5_score > 100 ){
					$item5_score = 100;
				}
					
				if ( $item5_score < 0 ){
					$item5_score = 0;
				}
				
				$item5_stars = wt_calculate_stars($item5_score);			
				?>
				
				<div class="review-item">
					<div class="item-title"><?php echo $item5_title; ?></div>
					<div class="review-stars main-color"><?php echo $item5_stars; ?></div>
				</div>
				<?php			
			}
			
			?>	
		</div>
	<?php
	
	$item6_title = get_post_meta($post->ID,'wt_meta_post_review_item6_title', true);
	echo "<!--item6_title: $item6_title -->";
	$item6_score = get_post_meta($post->ID,'wt_meta_post_review_item6_score', true);	
			echo "<!-- item6_score: $item6_score -->";
	
	if( $item6_title && $item6_score && is_numeric( $item6_score )){
		
		if ( $item6_score > 100 ){
			$item6_score = 100;
		}
			
		if ( $item6_score < 0 ){
			$item6_score = 0;
		}
		
		$item6_stars = wt_calculate_stars($item6_score);			
		$rating6 =  $item6_score/10; 	
		$review_summary = get_post_meta($post->ID,'wt_meta_review_summary', true);
		$rating_text = get_post_meta($post->ID,'wt_meta_post_review_item6_rating_text', true);
		?>
		<div class="review-item-final">
			
			<div class="left">
				<div class="final-title"><h6><?php echo $item6_title; ?></h6></div>
				<?php if ( !empty ($review_summary ) ){ ?>			
					<div class="final-summary">
						<?php echo $review_summary; ?>
					</div>		
				<?php				
				} ?>
			</div>
			
			<div class="right">
				<div class="final-score"><h3><?php echo $rating6; ?></h3></div>
				<div class="final-text"><?php echo $rating_text; ?></div>
				<div class="review-stars main-color"><?php echo $item6_stars; ?></div>
			</div>		
		</div>
		
		<div class="review-format">
			<?php
				$full_excerpt = get_the_excerpt();
				$excerpt = mb_substr($full_excerpt,0, 150);									
				if (strlen($full_excerpt) > 150){
					$excerpt = $excerpt.'...';	
				}
			?>

			<div itemscope itemtype="http://data-vocabulary.org/Review">
				<span itemprop="itemreviewed"><?php the_title(); ?></span>
				<?php _e('Review by ','wellthemes'); ?>
				<span itemprop="reviewer"><?php the_author_posts_link();  ?></span>
				<?php _e(' on ','wellthemes'); ?>
				<time itemprop="dtreviewed" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>.
				<span itemprop="summary"><?php echo  $rating_text; ?></span>
				<span itemprop="description"><?php echo  $excerpt; ?></span>
				<?php _e('Rating:','wellthemes'); ?>
				<span itemprop="rating"><?php echo $rating6; ?></span>
			</div>
		</div>
				
		<?php			
	}	
?>
</div><!--/review-inner -->	
<?php
}



function wt_calculate_stars($score){

	if ($score && is_numeric( $score ) ){
		
		if ( $score > 100 ){
				$score = 100;
		}
			
		if ( $score < 0 ){
			$score = 0;
		}

		$rounded_score = 5 * round($score / 5);
		
		$final_score =  $rounded_score/10; 

		$full_stars = intval($final_score);		
		$empty_stars = 5 - $full_stars;
		
		$half_star = 0;		
		if(floor( $final_score ) != $final_score) {
			$half_star = 1;
		}

		if ($half_star == 1) {
			$empty_stars = $empty_stars -1;
		}
		
		$i = 0;
		$stars = "";
		while($i < $full_stars){
			$stars .= '<i class="icon-star"></i>';
			$i++;
		}
		
		if ($half_star == 1) {
			$stars .= '<i class="icon-star-half-empty"></i>';
		}
		 
		$y = 0;
		while($y < $empty_stars){
			$stars .= '<i class="icon-star-empty"></i>';
			$y++;
		}		
		
		return $stars;
	} else {
		return false;
	}

}

// Implement Custom Header features.
// require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_stylesheet_directory() . '/inc/template-tags.php';
// require get_stylesheet_directory() . '/inc/nav-menu-template.php';

// Add Customizer functionality.
// require get_template_directory() . '/inc/customizer.php';


// echo "<h1 class='gordon'>this is the functions.php file</h1>";
// print( get_stylesheet_directory() );


