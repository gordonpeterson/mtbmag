<?php
/**
 * mtb-mag functions
**/


function mtb_mag_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'secondary', __( 'Footer Menu', 'twentytwelve' ) );

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
			
			$item1_title = get_post_meta($post->ID,'wt_meta_post_review_item1_title', true);
			$item1_score = get_post_meta($post->ID,'wt_meta_post_review_item1_score', true);
				
			if( $item1_title && $item1_score && is_numeric( $item1_score )){
				
				if ( $item1_score > 50 ){
					$item1_score = 50;
				}
					
				if ( $item1_score < 0 ){
					$item1_score = 0;
				}
				
				$item1_stars = wt_calculate_stars($item1_score);			
				?>
				
				<div class="review-item">
					<div class="item-title"><?php echo $item1_title; ?></div>
					<div class="review-stars main-color"><?php echo $item1_stars; ?></div>
				</div>
				<?php			
			}
			
			$item2_title = get_post_meta($post->ID,'wt_meta_post_review_item2_title', true);
			$item2_score = get_post_meta($post->ID,'wt_meta_post_review_item2_score', true);
			
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
			$item3_score = get_post_meta($post->ID,'wt_meta_post_review_item3_score', true);
			
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
			$item4_score = get_post_meta($post->ID,'wt_meta_post_review_item4_score', true);
			
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
			$item5_score = get_post_meta($post->ID,'wt_meta_post_review_item5_score', true);
			
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
	$item6_score = get_post_meta($post->ID,'wt_meta_post_review_item6_score', true);	
	
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


// Implement Custom Header features.
// require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_stylesheet_directory() . '/inc/template-tags.php';
// require get_stylesheet_directory() . '/inc/nav-menu-template.php';

// Add Customizer functionality.
// require get_template_directory() . '/inc/customizer.php';


// echo "<h1 class='gordon'>this is the functions.php file</h1>";
// print( get_stylesheet_directory() );


