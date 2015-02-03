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
		'before_widget' => '<div id="%1$s" claadss="ad1 300x250 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Ad2 300x250', 'twentytwelve' ),
		'id' => 'ad-widget2',
		'description' => __( 'The second 300x250 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad2 ad300x250 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Ad3 727x90', 'twentytwelve' ),
		'id' => 'ad-widget3',
		'description' => __( 'The third 727x90 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad3 ad727x90 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'Ad5 300x250', 'twentytwelve' ),
		'id' => 'ad-widget5',
		'description' => __( 'The fifth 300x250 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad5 ad300x250 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="ad-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Ad6 300x250', 'twentytwelve' ),
		'id' => 'ad-widget6',
		'description' => __( 'The sixth 300x250 ad slot for category pages. Add the javascript code here using a text widget.', 'twentytwelve' ),
		'before_widget' => '<div id="%1$s" class="ad6 ad300x250 %2$s">',
		'after_widget' => '</div>',
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
		'before_widget' => '<div id="%1$s" class="social-media %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="ad-title">',
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



// Implement Custom Header features.
// require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_stylesheet_directory() . '/inc/template-tags.php';
// require get_stylesheet_directory() . '/inc/nav-menu-template.php';

// Add Customizer functionality.
// require get_template_directory() . '/inc/customizer.php';


// echo "<h1 class='gordon'>this is the functions.php file</h1>";
// print( get_stylesheet_directory() );


