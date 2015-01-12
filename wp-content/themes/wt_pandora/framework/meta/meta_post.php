<?php
/**
 * Adds post layout meta box to post edit screen
 *
 */
 
function wt_register_meta_scripts($hook_suffix) {
   if( 'post.php' == $hook_suffix || 'post-new.php' == $hook_suffix ) {
	wp_enqueue_script('wt_upload', get_template_directory_uri() .'/framework/settings/js/upload.js', array('jquery'));
     //wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/inc/meta/custom.css')
  }
}
add_action( 'admin_enqueue_scripts', 'wt_register_meta_scripts' );

function wellthemes_post_meta_settings() {
	add_meta_box("wt_meta_post_review", "Review Settings", "wt_meta_post_review", "post", "normal", "high");
	add_meta_box("wt_meta_post_general_settings", "General Settings", "wt_meta_post_general_settings", "post", "normal", "high");
	add_meta_box("wt_meta_post_style_settings", "Style Settings", "wt_meta_post_style_settings", "post", "normal", "high");
	add_meta_box("wt_meta_post_sidebar_settings", "Sidebar Settings", "wt_meta_post_sidebar_settings", "post", "normal", "high");
	add_meta_box("wt_meta_post_ads_settings", "Ads Settings", "wt_meta_post_ads_settings", "post", "normal", "high");
	
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

/**
 * Display review settings
 *
 */ 
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

/**
 * Display general post settings
 *
 */ 
function wt_meta_post_general_settings() {
	global $post;
	global $pagenow;
	
	wp_nonce_field( 'wellthemes_save_postmeta_nonce', 'wellthemes_postmeta_nonce' ); ?>
	
	<?php if ( 'post.php' == $pagenow ) { ?>
	<div class="meta-field field-checkbox">
		<input name="wt_meta_post_hide_nav" type="checkbox" id="wt_meta_post_hide_nav" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_hide_nav', true ), 1 ); ?> /> 
		<label><?php _e( 'Hide post navigation', 'wellthemes' ); ?></label>
	</div>
	<?php } ?>
	
	<?php if ( 'post.php' == $pagenow ) { ?>
	<div class="meta-field field-checkbox">
		<input name="wt_meta_post_hide_img" type="checkbox" id="wt_meta_post_hide_img" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_hide_img', true ), 1 ); ?> /> 
		<label><?php _e( 'Hide featured image', 'wellthemes' ); ?></label>
	</div>
	<?php } ?>
	
	<div class="meta-field field-checkbox">
		<input name="wt_meta_post_hide_meta" type="checkbox" id="wt_meta_post_hide_meta" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_hide_meta', true ), 1 ); ?> /> 
		<label><?php _e( 'Hide Post meta', 'wellthemes' ); ?></label>
	</div>
	
	<div class="meta-field field-checkbox">
		<input name="wt_meta_post_hide_author" type="checkbox" id="wt_meta_post_hide_author" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_hide_author', true ), 1 ); ?> /> 
		<label><?php _e( 'Hide Author Information', 'wellthemes' ); ?></label>
	</div>
	
	<div class="meta-field field-checkbox">
		<input name="wt_meta_post_hide_social" type="checkbox" id="wt_meta_post_hide_social" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_hide_social', true ), 1 ); ?> /> 
		<label><?php _e( 'Hide Post Share Links', 'wellthemes' ); ?></label>
	</div>
	<?php
}

/**
 * Display style settings
 *
 */ 
function wt_meta_post_style_settings() {
	global $post;
	wp_nonce_field( 'wellthemes_save_postmeta_nonce', 'wellthemes_postmeta_nonce' ); ?>
	
	<div class="meta-field">
		<?php $saved_bg_color= get_post_meta( $post->ID, 'wt_meta_post_bg_color', true ); ?>
		<label><?php _e( 'Background color:', 'wellthemes' ); ?></label>
		<div id="wt_meta_post_bg_selector" class="color-pic"><div style="background-color:<?php echo $saved_bg_color  ?>"></div></div>
		<input style="width:80px; margin-right:5px;"  name="wt_meta_post_bg_color" id="wt_meta_post_bg_color" type="text" value="<?php echo $saved_bg_color  ?>" />				
		<span class="desc"><?php _e( 'Select background color for the post. Leave blank for default.', 'wellthemes' ); ?></span>				
	</div>
	
	<div class="meta-field field">
		<?php $saved_bg_img= get_post_meta( $post->ID, 'wt_meta_post_bg_img', true ); ?>
		<label><?php _e( 'Background Image:', 'wellthemes' ); ?></label>
		<input id="wt_meta_post_bg_img" class="upload_image" type="text" name="wt_meta_post_bg_img" value="<?php echo $saved_bg_img  ?>" />
        <input class="upload_image_button" id="wt_meta_post_bg_color_button" type="button" value="Upload" />
		<span class="desc"><?php _e( 'Upload image or leave blank for default.', 'wellthemes' ); ?></span>	
	</div>
	
	<div class="meta-field">
		<?php $saved_img_repeat = get_post_meta( $post->ID, 'wt_meta_post_bg_img_repeat', true ); ?>
		<label><?php _e( 'Background repeat:', 'wellthemes' ); ?></label>
		<select id="wt_meta_post_bg_img_repeat" name="wt_meta_post_bg_img_repeat" class="styled">	
			<option <?php selected( "repeat" == $saved_img_repeat ); ?> value="repeat"><?php _e('Repeat', 'wellthemes'); ?></option>			
			<option <?php selected( "repeat-x" == $saved_img_repeat ); ?> value="repeat-x"><?php _e('Repeat x', 'wellthemes'); ?></option>
			<option <?php selected( "repeat-y" == $saved_img_repeat ); ?> value="repeat-y"><?php _e('Repeat y', 'wellthemes'); ?></option>
			<option <?php selected( "no-repeat" == $saved_img_repeat ); ?> value="no-repeat"><?php _e('No Repeat', 'wellthemes'); ?></option>
			<option <?php selected( "cover" == $saved_img_repeat ); ?> value="cover"><?php _e('Cover', 'wellthemes'); ?></option>			
		</select>
		<span class="desc"><?php _e( 'Select the background image repeat style.', 'wellthemes' ); ?></span>
	</div>
	<?php
			
	}
	
/**
 * Display sidebar settings
 *
 */
function wt_meta_post_sidebar_settings() {
	global $post;
	wp_nonce_field( 'wellthemes_save_postmeta_nonce', 'wellthemes_postmeta_nonce' ); ?>
		
	<div class="meta-field">
		<?php 	
			$options = get_option('wt_options');
			$sidebars = "";													
			if (isset($options['wt_custom_sidebars'])){
				$sidebars = $options['wt_custom_sidebars'] ;
			}
				
			$saved_sidebar = get_post_meta( $post->ID, 'wt_meta_post_sidebar_name', true ); 
		?>
		
		
		<div class="meta-field">
			<label><?php _e( 'Select Right Sidebar:', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_sidebar_name" name="wt_meta_post_sidebar_name" class="styled">
				<option <?php selected( "" == $saved_sidebar ); ?> value=""><?php _e('Default', 'wellthemes'); ?></option>	
				<?php
					if($sidebars){
						foreach ($sidebars as $sidebar){?>
							<option <?php selected( $sidebar == $saved_sidebar ); ?> value="<?php echo $sidebar; ?>"><?php echo $sidebar ?></option>							
							<?php					
						}
					}
				?>		
			</select>
			<span class="desc"><?php _e( 'You can create custom sidebars in WellThemes\'s theme options page.', 'wellthemes' ); ?></span>
		</div>
				
	</div>
	<?php
}

function wt_meta_post_ads_settings() {
	global $post;
	wp_nonce_field( 'wellthemes_save_postmeta_nonce', 'wellthemes_postmeta_nonce' );	?>
	
	<div class="meta-field textarea-field">
		<label><?php _e( 'Post Top Banner:', 'wellthemes' ); ?></label>
		<textarea name="wt_meta_post_banner1" id="wt_meta_post_banner1" type="textarea" cols="100%" rows="3"><?php echo get_post_meta( $post->ID, 'wt_meta_post_banner1', true ); ?></textarea>
		<div class="desc"><?php _e( 'Paste the banner code for post top banner. Leave blank to disable.', 'wellthemes' ); ?></div>			
	</div>
	
	<div class="meta-field textarea-field">
		<label><?php _e( 'Post Bottom Banner:', 'wellthemes' ); ?></label>
		<textarea name="wt_meta_post_banner2" id="wt_meta_post_banner2" type="textarea" cols="100%" rows="3"><?php echo get_post_meta( $post->ID, 'wt_meta_post_banner2', true ); ?></textarea>
		<div class="desc"><?php _e( 'Paste the banner code for post top banner. Leave blank to disable.', 'wellthemes' ); ?></div>			
	</div>
	
	<?php
	}
	
/**
 * Display general post settings
 *
 */ 
function wt_meta_featured_page_settings() {
	global $post;
	global $pagenow;
	
	wp_nonce_field( 'wellthemes_save_postmeta_nonce', 'wellthemes_postmeta_nonce' ); ?>
	
	<div class="meta-section">
		<h4><?php _e('Slider Section', 'wellthemes'); ?></h4>
		
		<div class="meta-field field-checkbox">			
			<input name="wt_meta_post_show_feat_slider" type="checkbox" id="wt_meta_post_show_feat_slider" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_show_feat_slider', true ), 1 ); ?> /> 
			<label for="wt_meta_post_show_feat_slider"><?php _e( 'Enable Featured Slider', 'wellthemes' ); ?></label>
		</div>
	
		<div class="meta-field">
			<label><?php _e( 'Slider Category', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_feat_slider_cat" name="wt_meta_post_feat_slider_cat" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_feat_slider_cat', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>			
			</select>
			<div class="desc"><?php _e( 'Select category for slider. Select none to display latest posts.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_slider_speed', true );
				if (empty($value)){
					$value = "3000";
				}
			?>			
			<label for="wt_meta_post_slider_speed"><?php _e( 'Slider Speed:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_slider_speed" class="compact-input" type="text" id="wt_meta_post_slider_speed" value="<?php echo $value; ?>" />
			<div class="desc"><?php _e( 'Enter the carousel speed in milliseconds eg. 4000.', 'wellthemes' ); ?></div>
		</div>
				
		<div class="meta-field">
			<label><?php _e( 'Posts Category', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_slider_post_cat" name="wt_meta_post_slider_post_cat" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_slider_post_cat', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category for the posts on right side of slider. Select none to display latest posts.', 'wellthemes' ); ?></div>
		</div>
		
	</div><!-- /meta-section -->
	
	<div class="meta-section">
		<h4><?php _e('Tabs Section', 'wellthemes'); ?></h4>
		
		<div class="meta-field field-checkbox">
			<input name="wt_meta_post_show_feat_tabs" type="checkbox" id="wt_meta_post_show_feat_tabs" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_show_feat_tabs', true ), 1 ); ?> /> 
			<label for="wt_meta_post_show_feat_tabs"><?php _e( 'Enable Tabs Section', 'wellthemes' ); ?></label>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_tab1_title', true );
				if (empty($value)){
					$value = "The hottest Posts";
				}
			?>			
			<label for="wt_meta_post_tab1_title"><?php _e( 'Tab 1 Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_tab1_title" type="text" id="wt_meta_post_tab1_title" value="<?php echo $value; ?>" />
			<div class="desc"><?php _e( 'Select the main title for the tab section.', 'wellthemes' ); ?></div>			
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_tab1_subtitle', true );
				if (empty($value)){
					$value = "Read the hottest posts";
				}
			?>
			
			<label for="wt_meta_post_tab1_subtitle"><?php _e( 'Tab 1 subtitle:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_tab1_subtitle" type="text" id="wt_meta_post_tab1_subtitle" value="<?php echo $value; ?>" /> 
			<div class="desc"><?php _e( 'Select the subtitle for the tab section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Hot Category', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_tabs_cat" name="wt_meta_post_tabs_cat" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_tabs_cat', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category for the Tab 1 section. Select none to display latest posts.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_tab2_title', true );
				if (empty($value)){
					$value = "Top Weekly Posts";
				}
			?>
			<label for="wt_meta_post_tab2_title"><?php _e( 'Tab 2 Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_tab2_title" type="text" id="wt_meta_post_tab2_title" value="<?php echo $value; ?>" />
			<div class="desc"><?php _e( 'Select the main title for the tab section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_tab2_subtitle', true );
				if (empty($value)){
					$value = "Most read stories this week";
				}
			?>
			<label for="wt_meta_post_tab2_subtitle"><?php _e( 'Tab 2 subtitle:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_tab2_subtitle" type="text" id="wt_meta_post_tab2_subtitle" value="<?php echo $value; ?>" /> 
			<div class="desc"><?php _e( 'Select the subtitle for the tab section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_tab3_title', true );
				if (empty($value)){
					$value = "Most commented";
				}
			?>
			<label for="wt_meta_post_tab3_title"><?php _e( 'Tab 3 Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_tab3_title" type="text" id="wt_meta_post_tab3_title" value="<?php echo $value; ?>" /> 
			<div class="desc"><?php _e( 'Select the main title for the tab section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_tab3_subtitle', true );
				if (empty($value)){
					$value = "Most commented posts";
				}
			?>
			<label for="wt_meta_post_tab3_subtitle"><?php _e( 'Tab 3 subtitle:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_tab3_subtitle" type="text" id="wt_meta_post_tab3_subtitle" value="<?php echo $value; ?>" /> 
			<div class="desc"><?php _e( 'Select the subtitle for the tab section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Archive Link:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_archive_url" type="text" id="wt_meta_post_archive_url" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_archive_url', true ); ?>" /> 
			<span class="desc"><?php _e( 'Enter full URL for the archives link in the tabs section.', 'wellthemes' ); ?></span>	
		</div>
		
	</div><!-- /meta-section -->
	
	<div class="meta-section">
		<h4><?php _e('Featured Post Section', 'wellthemes'); ?></h4>
				
		<div class="meta-field field-checkbox">
			<input name="wt_meta_post_show_feat_post" type="checkbox" id="wt_meta_post_show_feat_post" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_show_feat_post', true ), 1 ); ?> /> 
			<label for="wt_meta_post_show_feat_post"><?php _e( 'Enable Post Section', 'wellthemes' ); ?></label>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_feat_post_title', true );
				if (empty($value)){
					$value = "Editors' Choice";
				}
			?>
			<label for="wt_meta_post_feat_post_title"><?php _e( 'Section Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_feat_post_title" type="text" id="wt_meta_post_feat_post_title" value="<?php echo $value; ?>" />
			<div class="desc"><?php _e( 'Select title for the featured post section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Category', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_feat_post_cat" name="wt_meta_post_feat_post_cat" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_feat_post_cat', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category for the section. Select none to display latest posts.', 'wellthemes' ); ?></div>
		</div>
		
	</div><!-- /meta-section -->
	
	<div class="meta-section">
		<h4><?php _e('Single Categories Section', 'wellthemes'); ?></h4>
				
		<div class="meta-field field-checkbox">
			<input name="wt_meta_post_show_single_cats" type="checkbox" id="wt_meta_post_show_single_cats" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_show_single_cats', true ), 1 ); ?> /> 
			<label for="wt_meta_post_show_single_cats"><?php _e( 'Enable categories section', 'wellthemes' ); ?></label>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_single_cat_title1', true );
				if (empty($value)){
					$value = "Latest posts";
				}
			?>
			<label for="wt_meta_post_single_cat_title1"><?php _e( 'Category 1 Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_single_cat_title1" type="text" id="wt_meta_post_single_cat_title1" value="<?php echo $value; ?>" />
			<div class="desc"><?php _e( 'Select title for category 1 section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Category 1', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_single_cat1" name="wt_meta_post_single_cat1" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_single_cat1', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category 1. Select none to display latest posts.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_single_cat_title2', true );
				if (empty($value)){
					$value = "Posts from";
				}
			?>
			<label for="wt_meta_post_single_cat_title2"><?php _e( 'Category 2 Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_single_cat_title2" type="text" id="wt_meta_post_single_cat_title2" value="<?php echo $value; ?>" /> 
			<div class="desc"><?php _e( 'Select title for category 2 section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Category 2', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_single_cat2" name="wt_meta_post_single_cat2" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_single_cat2', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category 2. Select none to display latest posts.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label for="wt_meta_post_single_cat_title3"><?php _e( 'Category 3 Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_single_cat_title3" type="text" id="wt_meta_post_single_cat_title3" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_single_cat_title3', true ); ?>" /> 
			<div class="desc"><?php _e( 'Select title for category 3 section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Category 3', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_single_cat3" name="wt_meta_post_single_cat3" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_single_cat3', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category 3. Select none to hide the category.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label for="wt_meta_post_single_cat_title4"><?php _e( 'Category 4 Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_single_cat_title4" type="text" id="wt_meta_post_single_cat_title4" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_single_cat_title4', true ); ?>" /> 
			<div class="desc"><?php _e( 'Select title for category 4 section.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Category 4', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_single_cat4" name="wt_meta_post_single_cat4" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_single_cat4', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category 4. Select none to hide the category.', 'wellthemes' ); ?></div>
		</div>
		
	</div><!-- /meta-section -->
	
	<div class="meta-section">
		<h4><?php _e('Carousel Section', 'wellthemes'); ?></h4>
				
		<div class="meta-field field-checkbox">
			<input name="wt_meta_post_show_carousel" type="checkbox" id="wt_meta_post_show_carousel" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_show_carousel', true ), 1 ); ?> /> 
			<label for="wt_meta_post_show_carousel"><?php _e( 'Enable carousel section', 'wellthemes' ); ?></label>
		</div>
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_carousel_title', true );
				if (empty($value)){
					$value = "Posts from";
				}
			?>
			<label for="wt_meta_post_carousel_title"><?php _e( 'Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_carousel_title" type="text" id="wt_meta_post_carousel_title" value="<?php echo $value; ?>" />
			<div class="desc"><?php _e( 'Select title for carousel section', 'wellthemes' ); ?></div>
		</div>
		
		
		<div class="meta-field">
			<?php
				$value = get_post_meta( $post->ID, 'wt_meta_post_carousel_speed', true );
				if (empty($value)){
					$value = "3000";
				}
			?>
			<label for="wt_meta_post_carousel_speed"><?php _e( 'Carousel Speed:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_carousel_speed" class="compact-input" type="text" id="wt_meta_post_carousel_speed" value="<?php echo $value; ?>" />
			<div class="desc"><?php _e( 'Enter the carousel speed in milliseconds eg. 4000.', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Category', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_carousel_cat" name="wt_meta_post_carousel_cat" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_carousel_cat', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category for carousel. Select none to display latest posts.', 'wellthemes' ); ?></div>
		</div>
		
	</div><!-- /meta-section -->
	
	<div class="meta-section">
		<h4><?php _e('Post List Section', 'wellthemes'); ?></h4>
				
		<div class="meta-field field-checkbox">
			<input name="wt_meta_post_show_postlist" type="checkbox" id="wt_meta_post_show_postlist" value="1" <?php checked( get_post_meta( $post->ID, 'wt_meta_post_show_postlist', true ), 1 ); ?> /> 
			<label for="wt_meta_post_show_postlist"><?php _e( 'Enable post list', 'wellthemes' ); ?></label>
		</div>
		
		<div class="meta-field">
			<label for="wt_meta_post_postlist_title"><?php _e( 'Title:', 'wellthemes' ); ?></label>
			<input name="wt_meta_post_postlist_title" type="text" id="wt_meta_post_postlist_title" value="<?php echo get_post_meta( $post->ID, 'wt_meta_post_postlist_title', true ); ?>" /> 
			<div class="desc"><?php _e( 'Select title for post list section', 'wellthemes' ); ?></div>
		</div>
		
		<div class="meta-field">
			<label><?php _e( 'Category', 'wellthemes' ); ?></label>
			<select id="wt_meta_post_postlist_cat" name="wt_meta_post_postlist_cat" class="styled">
				<?php 
					$categories = get_categories( array( 'hide_empty' => 1, 'hierarchical' => 0 ) );  
					$saved_cat = get_post_meta( $post->ID, 'wt_meta_post_postlist_cat', true );
				?>
				<option <?php selected( 0 == $saved_cat ); ?> value="0"><?php _e('--none--', 'wellthemes'); ?></option>	
				<?php
					if($categories){
						foreach ($categories as $category){?>
							<option <?php selected( $category->term_id == $saved_cat ); ?> value="<?php echo $category->term_id; ?>"><?php echo $category->cat_name; ?></option>							
							<?php					
						}
					}
				?>				
			</select>
			<div class="desc"><?php _e( 'Select category for post list. Select none to display latest posts.', 'wellthemes' ); ?></div>
		</div>
		
	</div><!-- /meta-section -->
		
<?php
	}
/**
 * Save post meta box settings
 *
 */
function wt_post_meta_save_post_settings() {
	global $post;
	
	if( !isset( $_POST['wellthemes_postmeta_nonce'] ) || !wp_verify_nonce( $_POST['wellthemes_postmeta_nonce'], 'wellthemes_save_postmeta_nonce' ) )
		return;

	if( !current_user_can( 'edit_posts' ) )
		return;
		
	if ( isset( $_POST['wt_meta_post_show_review'] ) && $_POST['wt_meta_post_show_review'] == 1  ) {
		update_post_meta( $post->ID, 'wt_meta_post_show_review', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_show_review', 1 );	
	}
	
	if(isset($_POST['wt_meta_post_review_title'])){
		update_post_meta($post->ID, 'wt_meta_post_review_title', sanitize_text_field($_POST['wt_meta_post_review_title']));
	}
	
	if(isset($_POST['wt_meta_post_review_item1_title'])){
		update_post_meta($post->ID, 'wt_meta_post_review_item1_title', sanitize_text_field($_POST['wt_meta_post_review_item1_title']));
	}	
  
	if ( isset( $_POST['wt_meta_post_review_item1_score'] ) && is_numeric( $_POST['wt_meta_post_review_item1_score'] ) ) {
		update_post_meta( $post->ID, 'wt_meta_post_review_item1_score', $_POST['wt_meta_post_review_item1_score'] );	
	}
	
	if(isset($_POST['wt_meta_post_review_item2_title'])){
		update_post_meta($post->ID, 'wt_meta_post_review_item2_title', sanitize_text_field($_POST['wt_meta_post_review_item2_title']));
	}
	
	if ( isset( $_POST['wt_meta_post_review_item2_score'] ) && is_numeric( $_POST['wt_meta_post_review_item2_score'] ) ) {
		update_post_meta( $post->ID, 'wt_meta_post_review_item2_score', $_POST['wt_meta_post_review_item2_score'] );	
	}
	
	if(isset($_POST['wt_meta_post_review_item3_title'])){
		update_post_meta($post->ID, 'wt_meta_post_review_item3_title', sanitize_text_field($_POST['wt_meta_post_review_item3_title']));
	}
	
	if ( isset( $_POST['wt_meta_post_review_item3_score'] ) && is_numeric( $_POST['wt_meta_post_review_item3_score'] ) ) {
		update_post_meta( $post->ID, 'wt_meta_post_review_item3_score', $_POST['wt_meta_post_review_item3_score'] );	
	}
	
	if(isset($_POST['wt_meta_post_review_item4_title'])){
		update_post_meta($post->ID, 'wt_meta_post_review_item4_title', sanitize_text_field($_POST['wt_meta_post_review_item4_title']));
	}
	
	if ( isset( $_POST['wt_meta_post_review_item4_score'] ) && is_numeric( $_POST['wt_meta_post_review_item4_score'] ) ) {
		update_post_meta( $post->ID, 'wt_meta_post_review_item4_score', $_POST['wt_meta_post_review_item4_score'] );	
	}
	
	if(isset($_POST['wt_meta_post_review_item5_title'])){
		update_post_meta($post->ID, 'wt_meta_post_review_item5_title', sanitize_text_field($_POST['wt_meta_post_review_item5_title']));
	}
	
	if ( isset( $_POST['wt_meta_post_review_item5_score'] ) && is_numeric( $_POST['wt_meta_post_review_item5_score'] ) ) {
		update_post_meta( $post->ID, 'wt_meta_post_review_item5_score', $_POST['wt_meta_post_review_item5_score'] );	
	}
	
	if(isset($_POST['wt_meta_post_review_item6_title'])){
		update_post_meta($post->ID, 'wt_meta_post_review_item6_title', sanitize_text_field($_POST['wt_meta_post_review_item6_title']));
	}
	
	if(isset($_POST['wt_meta_post_review_item6_rating_text'])){
		update_post_meta($post->ID, 'wt_meta_post_review_item6_rating_text', sanitize_text_field($_POST['wt_meta_post_review_item6_rating_text']));
	}
	
	if ( isset( $_POST['wt_meta_post_review_item6_score'] ) && is_numeric( $_POST['wt_meta_post_review_item6_score'] ) ) {
		update_post_meta( $post->ID, 'wt_meta_post_review_item6_score', $_POST['wt_meta_post_review_item6_score'] );	
	}
	
	if(isset($_POST['wt_meta_review_summary'])){
		update_post_meta($post->ID, 'wt_meta_review_summary', sanitize_text_field($_POST['wt_meta_review_summary']));
	}	
	
	if ( isset( $_POST['wt_meta_post_hide_nav'] ) && $_POST['wt_meta_post_hide_nav'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_hide_nav', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_hide_nav');	
	}
	
	if ( isset( $_POST['wt_meta_post_hide_img'] ) && $_POST['wt_meta_post_hide_img'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_hide_img', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_hide_img', 1 );	
	}
	
	if ( isset( $_POST['wt_meta_post_hide_meta'] ) && $_POST['wt_meta_post_hide_meta'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_hide_meta', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_hide_meta', 1 );	
	}
		
	if ( isset( $_POST['wt_meta_post_hide_author'] ) && $_POST['wt_meta_post_hide_author'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_hide_author', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_hide_author', 1 );	
	}
	
	if ( isset( $_POST['wt_meta_post_hide_social'] ) && $_POST['wt_meta_post_hide_social'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_hide_social', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_hide_social', 1 );	
	}
		
	if(isset($_POST['wt_meta_post_bg_color'])){
		update_post_meta($post->ID, 'wt_meta_post_bg_color', sanitize_text_field($_POST['wt_meta_post_bg_color']));
	}
	
	if(isset($_POST['wt_meta_post_bg_img'])){
		update_post_meta($post->ID, 'wt_meta_post_bg_img', esc_url_raw($_POST['wt_meta_post_bg_img']));
	}
	
	if ( isset( $_POST['wt_meta_post_bg_img_repeat'] ) && in_array( $_POST['wt_meta_post_bg_img_repeat'], array( 'repeat','repeat-x','repeat-y','no-repeat','cover') ) ){
		update_post_meta( $post->ID, 'wt_meta_post_bg_img_repeat', $_POST['wt_meta_post_bg_img_repeat'] );	
	}
		
	if ( isset( $_POST['wt_meta_post_sidebar_name'] )){
		update_post_meta( $post->ID, 'wt_meta_post_sidebar_name', $_POST['wt_meta_post_sidebar_name'] );	
	}	
		
	if(isset($_POST['wt_meta_post_banner1'])){
		update_post_meta( $post->ID, 'wt_meta_post_banner1', $_POST['wt_meta_post_banner1'] );
	}
	
	if(isset($_POST['wt_meta_post_banner2'])){
		update_post_meta( $post->ID, 'wt_meta_post_banner2', $_POST['wt_meta_post_banner2'] );
	}
	
	if ( isset( $_POST['wt_meta_post_show_feat_slider'] ) && $_POST['wt_meta_post_show_feat_slider'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_show_feat_slider', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_show_feat_slider', 1 );	
	}
	
	if ( isset( $_POST['wt_meta_post_feat_slider_cat'] )){
		update_post_meta( $post->ID, 'wt_meta_post_feat_slider_cat', $_POST['wt_meta_post_feat_slider_cat'] );	
	}
	
	if(isset($_POST['wt_meta_post_slider_speed'])){
		update_post_meta($post->ID, 'wt_meta_post_slider_speed', sanitize_text_field($_POST['wt_meta_post_slider_speed']));
	}
	
	if ( isset( $_POST['wt_meta_post_slider_post_cat'] )){
		update_post_meta( $post->ID, 'wt_meta_post_slider_post_cat', $_POST['wt_meta_post_slider_post_cat'] );	
	}	
	
	if ( isset( $_POST['wt_meta_post_show_feat_tabs'] ) && $_POST['wt_meta_post_show_feat_tabs'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_show_feat_tabs', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_show_feat_tabs', 1 );	
	}
	
	if(isset($_POST['wt_meta_post_tab1_title'])){
		update_post_meta($post->ID, 'wt_meta_post_tab1_title', sanitize_text_field($_POST['wt_meta_post_tab1_title']));
	}
	
	if(isset($_POST['wt_meta_post_tab1_subtitle'])){
		update_post_meta($post->ID, 'wt_meta_post_tab1_subtitle', sanitize_text_field($_POST['wt_meta_post_tab1_subtitle']));
	}
	
	if(isset($_POST['wt_meta_post_tab2_title'])){
		update_post_meta($post->ID, 'wt_meta_post_tab2_title', sanitize_text_field($_POST['wt_meta_post_tab2_title']));
	}
	
	if(isset($_POST['wt_meta_post_tab2_subtitle'])){
		update_post_meta($post->ID, 'wt_meta_post_tab2_subtitle', sanitize_text_field($_POST['wt_meta_post_tab2_subtitle']));
	}	
	
	if(isset($_POST['wt_meta_post_tab3_title'])){
		update_post_meta($post->ID, 'wt_meta_post_tab3_title', sanitize_text_field($_POST['wt_meta_post_tab3_title']));
	}
	
	if(isset($_POST['wt_meta_post_tab3_subtitle'])){
		update_post_meta($post->ID, 'wt_meta_post_tab3_subtitle', sanitize_text_field($_POST['wt_meta_post_tab3_subtitle']));
	}
	
	if ( isset( $_POST['wt_meta_post_tabs_cat'] )){
		update_post_meta( $post->ID, 'wt_meta_post_tabs_cat', $_POST['wt_meta_post_tabs_cat'] );	
	}

	if(isset($_POST['wt_meta_post_archive_url'])){
		update_post_meta($post->ID, 'wt_meta_post_archive_url', esc_url_raw($_POST['wt_meta_post_archive_url']));
	}
		
	if ( isset( $_POST['wt_meta_post_show_feat_post'] ) && $_POST['wt_meta_post_show_feat_post'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_show_feat_post', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_show_feat_post', 1 );	
	}
	
	if(isset($_POST['wt_meta_post_feat_post_title'])){
		update_post_meta($post->ID, 'wt_meta_post_feat_post_title', sanitize_text_field($_POST['wt_meta_post_feat_post_title']));
	}
	
	if ( isset( $_POST['wt_meta_post_feat_post_cat'] )){
		update_post_meta( $post->ID, 'wt_meta_post_feat_post_cat', $_POST['wt_meta_post_feat_post_cat'] );	
	}
	
	if ( isset( $_POST['wt_meta_post_show_single_cats'] ) && $_POST['wt_meta_post_show_single_cats'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_show_single_cats', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_show_single_cats', 1 );	
	}
	
	if(isset($_POST['wt_meta_post_single_cat_title1'])){
		update_post_meta($post->ID, 'wt_meta_post_single_cat_title1', sanitize_text_field($_POST['wt_meta_post_single_cat_title1']));
	}
	
	if(isset($_POST['wt_meta_post_single_cat_title2'])){
		update_post_meta($post->ID, 'wt_meta_post_single_cat_title2', sanitize_text_field($_POST['wt_meta_post_single_cat_title2']));
	}
	
	if(isset($_POST['wt_meta_post_single_cat_title3'])){
		update_post_meta($post->ID, 'wt_meta_post_single_cat_title3', sanitize_text_field($_POST['wt_meta_post_single_cat_title3']));
	}
	
	if(isset($_POST['wt_meta_post_single_cat_title4'])){
		update_post_meta($post->ID, 'wt_meta_post_single_cat_title4', sanitize_text_field($_POST['wt_meta_post_single_cat_title4']));
	}
	
	if ( isset( $_POST['wt_meta_post_single_cat1'] )){
		update_post_meta( $post->ID, 'wt_meta_post_single_cat1', $_POST['wt_meta_post_single_cat1'] );	
	}
	
	if ( isset( $_POST['wt_meta_post_single_cat2'] )){
		update_post_meta( $post->ID, 'wt_meta_post_single_cat2', $_POST['wt_meta_post_single_cat2'] );	
	}
	
	if ( isset( $_POST['wt_meta_post_single_cat3'] )){
		update_post_meta( $post->ID, 'wt_meta_post_single_cat3', $_POST['wt_meta_post_single_cat3'] );	
	}
	
	if ( isset( $_POST['wt_meta_post_single_cat4'] )){
		update_post_meta( $post->ID, 'wt_meta_post_single_cat4', $_POST['wt_meta_post_single_cat4'] );	
	}
	
	if ( isset( $_POST['wt_meta_post_show_carousel'] ) && $_POST['wt_meta_post_show_carousel'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_show_carousel', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_show_carousel', 1 );	
	}
	
	if(isset($_POST['wt_meta_post_carousel_title'])){
		update_post_meta($post->ID, 'wt_meta_post_carousel_title', sanitize_text_field($_POST['wt_meta_post_carousel_title']));
	}
	
	if(isset($_POST['wt_meta_post_carousel_speed'])){
		update_post_meta($post->ID, 'wt_meta_post_carousel_speed', sanitize_text_field($_POST['wt_meta_post_carousel_speed']));
	}
	
	if ( isset( $_POST['wt_meta_post_carousel_cat'] )){
		update_post_meta( $post->ID, 'wt_meta_post_carousel_cat', $_POST['wt_meta_post_carousel_cat'] );	
	}
	
	if ( isset( $_POST['wt_meta_post_show_postlist'] ) && $_POST['wt_meta_post_show_postlist'] == 1) {
		update_post_meta( $post->ID, 'wt_meta_post_show_postlist', 1 );	
	} else {
		delete_post_meta( $post->ID, 'wt_meta_post_show_postlist', 1 );	
	}
	
	if(isset($_POST['wt_meta_post_postlist_title'])){
		update_post_meta($post->ID, 'wt_meta_post_postlist_title', sanitize_text_field($_POST['wt_meta_post_postlist_title']));
	}
	
	if ( isset( $_POST['wt_meta_post_postlist_cat'] )){
		update_post_meta( $post->ID, 'wt_meta_post_postlist_cat', $_POST['wt_meta_post_postlist_cat'] );	
	}
	
	
}
add_action( 'save_post', 'wt_post_meta_save_post_settings' );