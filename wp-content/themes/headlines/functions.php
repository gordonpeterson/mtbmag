<?php

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// Set path to WooFramework and theme specific functions
$functions_path = TEMPLATEPATH . '/functions/';
$includes_path = TEMPLATEPATH . '/includes/';

// WooFramework
require_once ($functions_path . 'admin-init.php');			// Framework Init

// Theme specific functionality
require_once ($includes_path . 'theme-options.php'); 		// Options panel settings and custom settings
require_once ($includes_path . 'theme-functions.php'); 		// Custom theme functions
require_once ($includes_path . 'theme-comments.php'); 		// Custom comments/pingback loop
require_once ($includes_path . 'theme-js.php');				// Load javascript in wp_head
require_once ($includes_path . 'sidebar-init.php');			// Initialize widgetized areas
require_once ($includes_path . 'theme-widgets.php');		// Theme widgets

/*-----------------------------------------------------------------------------------*/
/* End WooThemes Functions - You can add custom functions below */
/*-----------------------------------------------------------------------------------*/
function field_func($atts) {
   global $post;
   $name = $atts['name'];
   if (empty($name)) return;

   return get_post_meta($post->ID, $name, true);
}

add_shortcode('field', 'field_func');

function language_selector_flags(){
    $languages = icl_get_languages('orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />'; 
            if(!$l['active']) echo '</a>';
        }
    }
}

if(ICL_LANGUAGE_CODE == 'en'){
   switch_theme( 'headlines', 'style.css');
}
if(ICL_LANGUAGE_CODE == 'it'){
   switch_theme( 'wt_pandora', 'style.css');
}

?>