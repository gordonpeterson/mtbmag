<?php
/**
 * mtb-mag functions
**/


function mtb_mag_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'secondary', __( 'Footer Menu', 'twentytwelve' ) );

	// New widgetized sidebar area for pages
	register_sidebar( array(
		'name' => __( 'Page Sidebar', 'twentytwelve' ),
		'id' => 'sidebar-4',
		'description' => __( 'Appears on pages only', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
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

// Add Customizer functionality.
// require get_template_directory() . '/inc/customizer.php';


// echo "<h1 class='gordon'>this is the functions.php file</h1>";
// print( get_stylesheet_directory() );


