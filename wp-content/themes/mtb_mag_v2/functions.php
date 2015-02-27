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
function get_ads( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget1' );
	$adText .= get_dynamic_sidebar( 'ad-widget2' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad12', 'get_ads' );

//[ad45]
function get_ads( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget4' );
	$adText .= get_dynamic_sidebar( 'ad-widget5' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad45', 'get_ads' );

//[ad_row3]
function get_ads( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget6' );
	$adText .= get_dynamic_sidebar( 'ad-widget7' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad_row3', 'get_ads' );

//[ad_row1]
function get_ads( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget2' );
	$adText .= get_dynamic_sidebar( 'ad-widget1' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad_row1', 'get_ads' );

//[ad_row1]
function get_ads( $atts ){
	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget2' );
	$adText .= get_dynamic_sidebar( 'ad-widget1' );
	$adText .= "</div>";
	return $adText;
}
add_shortcode( 'ad_row1', 'get_ads' );




function get_dynamic_sidebar($index = 1) {
	$sidebar_contents = "";
	ob_start();
	dynamic_sidebar($index);
	$sidebar_contents = ob_get_contents();
	ob_end_clean();
	return $sidebar_contents;
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


