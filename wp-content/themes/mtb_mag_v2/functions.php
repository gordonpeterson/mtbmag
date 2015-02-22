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
		'description' => __( 'The first 300x250 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Ad2 300x250', 'twentytwelve' ),
		'id' => 'ad-widget2',
		'description' => __( 'The second 300x250 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Ad3 727x90', 'twentytwelve' ),
		'id' => 'ad-widget3',
		'description' => __( 'The third 727x90 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad727x90 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Ad4 300x250', 'twentytwelve' ),
		'id' => 'ad-widget4',
		'description' => __( 'The second 300x250 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'Ad5 300x250', 'twentytwelve' ),
		'id' => 'ad-widget5',
		'description' => __( 'The fifth 300x250 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad ad300x250 %2$s"><div class="ad-inner-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Ad6 300x250', 'twentytwelve' ),
		'id' => 'ad-widget6',
		'description' => __( 'The sixth 300x250 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
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

//[ad_row1]
function get_ads( $atts ){


	// return "<div class='ads-row'> <div class='ad300x250 ad'> <script type='text/javascript'> var googletag = googletag || {}; googletag.cmd = googletag.cmd || []; (function() {var gads = document.createElement('script'); gads.async = true; gads.type = 'text/javascript'; var useSSL = 'https:' == document.location.protocol; gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js'; var node = document.getElementsByTagName('script')[0]; node.parentNode.insertBefore(gads, node); })(); </script> <script type='text/javascript'> googletag.cmd.push(function() {googletag.defineSlot('/1031065/MTB-home', [[300, 250], [300, 450], [300, 500]], 'div-gpt-ad-1422880044994-0').addService(googletag.pubads()); googletag.pubads().enableSingleRequest(); googletag.enableServices(); }); </script> <!-- MTB-home --> <div id='div-gpt-ad-1422880044994-0'> <script type='text/javascript'> googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422880044994-0'); }); </script> </div> </div> <div class='ad300x250 ad'> <script type='text/javascript'> var googletag = googletag || {}; googletag.cmd = googletag.cmd || []; (function() {var gads = document.createElement('script'); gads.async = true; gads.type = 'text/javascript'; var useSSL = 'https:' == document.location.protocol; gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js'; var node = document.getElementsByTagName('script')[0]; node.parentNode.insertBefore(gads, node); })(); </script> <script type='text/javascript'> googletag.cmd.push(function() {googletag.defineSlot('/1031065/MTB-home-Multiplayer', [[300, 250], [300, 450], [300, 500], [300, 600]], 'div-gpt-ad-1422880096354-0').addService(googletag.pubads()); googletag.pubads().enableSingleRequest(); googletag.enableServices(); }); </script> <!-- MTB-home-Multiplayer --> <div id='div-gpt-ad-1422880096354-0'> <script type='text/javascript'> googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422880096354-0'); }); </script> </div> </div> </div>";

	$adText = "<div class='ads-row'>";
	$adText .= get_dynamic_sidebar( 'ad-widget2' );
	$adText .= get_dynamic_sidebar( 'ad-widget1' );

	// $adText .= "<div class='ad300x250 ad'> <script type='text/javascript'> var googletag = googletag || {}; googletag.cmd = googletag.cmd || []; (function() {var gads = document.createElement('script'); gads.async = true; gads.type = 'text/javascript'; var useSSL = 'https:' == document.location.protocol; gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js'; var node = document.getElementsByTagName('script')[0]; node.parentNode.insertBefore(gads, node); })(); </script> <script type='text/javascript'> googletag.cmd.push(function() {googletag.defineSlot('/1031065/MTB-home', [[300, 250], [300, 450], [300, 500]], 'div-gpt-ad-1422880044994-0').addService(googletag.pubads()); googletag.pubads().enableSingleRequest(); googletag.enableServices(); }); </script> <!-- MTB-home --> <div id='div-gpt-ad-1422880044994-0'> <script type='text/javascript'> googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422880044994-0'); }); </script> </div> </div>";
	// $adText .= "<div class='ad300x250 ad'> <script type='text/javascript'> var googletag = googletag || {}; googletag.cmd = googletag.cmd || []; (function() {var gads = document.createElement('script'); gads.async = true; gads.type = 'text/javascript'; var useSSL = 'https:' == document.location.protocol; gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js'; var node = document.getElementsByTagName('script')[0]; node.parentNode.insertBefore(gads, node); })(); </script> <script type='text/javascript'> googletag.cmd.push(function() {googletag.defineSlot('/1031065/MTB-home-Multiplayer', [[300, 250], [300, 450], [300, 500], [300, 600]], 'div-gpt-ad-1422880096354-0').addService(googletag.pubads()); googletag.pubads().enableSingleRequest(); googletag.enableServices(); }); </script> <!-- MTB-home-Multiplayer --> <div id='div-gpt-ad-1422880096354-0'> <script type='text/javascript'> googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422880096354-0'); }); </script> </div> </div> ";
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


