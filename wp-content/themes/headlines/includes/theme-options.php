<?php



function options(){
// VARIABLES
$themename = "Headlines";
$manualurl = 'http://www.woothemes.com/support/theme-documentation/headlines';
$shortname = "woo";



$GLOBALS['template_path'] = get_bloginfo('template_directory');

//Access the WordPress Categories via an Array
$woo_categories = array();  
$woo_categories_obj = get_categories('hide_empty=0');
foreach ($woo_categories_obj as $woo_cat) {
    $woo_categories[$woo_cat->cat_ID] = $woo_cat->cat_name;}
$categories_tmp = array_unshift($woo_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$woo_pages = array();
$woo_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($woo_pages_obj as $woo_page) {
    $woo_pages[$woo_page->ID] = $woo_page->post_name; }
$woo_pages_tmp = array_unshift($woo_pages, "Select a page:");       


//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

//Stylesheets Reader
$alt_stylesheet_path = TEMPLATEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$all_uploads_path = get_bloginfo('home') . '/wp-content/uploads/';
$all_uploads = get_option('woo_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");

// THIS IS THE DIFFERENT FIELDS
$options = array();   

$options[] = array( "name" => "General Settings",
                    "icon" => "general",
                    "type" => "heading");
                        
$options[] = array( "name" => "Theme Stylesheet",
					"desc" => "Select your themes alternative color scheme.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "default.css",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array( "name" => "Custom Logo",
					"desc" => "Upload a logo for your theme, or specify an image URL directly.",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "upload");    

$options[] = array( "name" => "Text Title",
					"desc" => "Enable text-based Site Title and Tagline. Setup title & tagline in Settings->General.",
					"id" => $shortname."_texttitle",
					"std" => "false",
					"class" => "collapsed",
					"type" => "checkbox");

$options[] = array( "name" => "Site Title",
					"desc" => "Change the site title (must have 'Text Title' option enabled).",
					"id" => $shortname."_font_site_title",
					"std" => array('size' => '36','unit' => 'px','face' => 'Arial','style' => 'bold','color' => '#ffffff'),
					"class" => "hidden",
					"type" => "typography");  

$options[] = array( "name" => "Site Description",
					"desc" => "Change the site description (must have 'Text Title' option enabled).",
					"id" => $shortname."_font_tagline",
					"std" => array('size' => '11','unit' => 'px','face' => 'Arial','style' => '','color' => '#bbbbbb'),
					"class" => "hidden last",
					"type" => "typography");  
                                                                                     
$options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px <a href='http://www.faviconr.com/'>ico image</a> that will represent your website's favicon.",
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload"); 
                                               
$options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");        

$options[] = array( "name" => "RSS URL",
					"desc" => "Enter your preferred RSS URL. (Feedburner or other)",
					"id" => $shortname."_feedburner_url",
					"std" => "",
					"type" => "text");
                    
$options[] = array( "name" => "E-Mail URL",
					"desc" => "Enter your preferred E-mail subscription URL. (Feedburner or other)",
					"id" => $shortname."_feedburner_id",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Contact Form E-Mail",
					"desc" => "Enter your E-mail address to use on the Contact Form Page Template.",
					"id" => $shortname."_contactform_email",
					"std" => "",
					"type" => "text");



$options[] = array( "name" => "Custom CSS",
                    "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                    "id" => $shortname."_custom_css",
                    "std" => "",
                    "type" => "textarea");
                    
$options[] = array( "name" => "Styling Options",
					"type" => "heading",
					"icon" => "styling");   
                    

$options[] = array( "name" =>  "Custom Top Background Color",
					"desc" => "Add a custom hex color for the header area e.g. #697e09",
					"id" => "woo_custom_color",
					"std" => "",
					"type" => "color");  

$options[] = array( "name" =>  "Custom Link Color",
					"desc" => "Add a custom hex color for the links in your site e.g. #697e09",
					"id" => "woo_custom_link",
					"std" => "",
					"type" => "color");                    
    
$options[] = array( "name" => "Navigation Options",
                    "icon" => "nav",
					"type" => "heading");    

$options[] = array( "name" => "Top Page Nav",
					"desc" => "Move the page navigation to the top of the page, above the logo.",
					"id" => $shortname."_nav_top",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Category Description",
					"desc" => "Show category descriptions in navigation. Add your description by editing the category (Posts -> Categories).",
					"id" => $shortname."_menu_desc",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Exclude Pages or Categories from Navigation",
					"desc" => "Enter a comma-separated list of <a href='http://support.wordpress.com/pages/8/'>ID's</a> that you'd like to exclude from the top navigation. (e.g. 12,23,27,44)",
					"id" => $shortname."_nav_exclude",
					"std" => "",
					"type" => "text"); 

$options[] = array( "name" => "Disable Search Field",
					"desc" => "Remove the Search Field in the right side of nav, to make room for more categories.",
					"id" => $shortname."_search_disable",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Featured Panel",
                    "icon" => "featured",
					"type" => "heading");    

$options[] = array( "name" => "Enable Featured",
					"desc" => "Show the featured panel on the front page.",
					"id" => $shortname."_featured",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Featured Tag",
                    "desc" => "Add comma separated list for the tags that you would like to have displayed in the featured section on your homepage. For example, if you add 'tag1, tag3' here, then all posts tagged with either 'tag1' or 'tag3' will be shown in the featured area.",
                    "id" => $shortname."_featured_tags",
                    "std" => "",
                    "type" => "text");

$options[] = array(    "name" => "Featured Entries",
                    "desc" => "Select the number of entries that should appear in the Featured panel.",
                    "id" => $shortname."_featured_entries",
                    "std" => "3",
                    "type" => "select",
                    "options" => $other_entries);

$options[] = array( "name" => "Show Featured Banner",
					"desc" => "Show the featured banner on the left side of the panel.",
					"id" => $shortname."_featured_banner",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array(    "name" => "Auto Start",
                    "desc" => "Set the slider to start sliding automatically. Adjust the speed of sliding underneath.",
                    "id" => $shortname."_slider_auto",
                    "std" => "false",
                    "type" => "checkbox");   

$options[] = array(    "name" => "Animation Speed",
                    "desc" => "The time in <b>seconds</b> the animation between frames will take e.g. 0.6",
                    "id" => $shortname."_slider_speed",
                    "std" => 0.6,
                    "type" => "text");
                    
$options[] = array(    "name" => "Auto Slide Interval",
                    "desc" => "The time in <b>seconds</b> each slide pauses for, before sliding to the next. Only when using Auto Start option above.",
                    "id" => $shortname."_slider_interval",
                    "std" => 4.0,
                    "type" => "text"); 


$options[] = array( "name" => "Layout Options",
                    "icon" => "layout",
					"type" => "heading");    

$options[] = array( "name" => "Twitter Username",
					"desc" => "Enter your Twitter username if you want to display latest tweet in header",
					"id" => $shortname."_twitter",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Social Bookmarks",
					"desc" => "Add social bookmarks to the bottom of single posts",
					"id" => $shortname."_social",
					"std" => "true",
					"type" => "checkbox");    

$options[] = array( "name" => "Enable Cufon font",
					"desc" => "Enable <a href=\"http://cufon.shoqolate.com/generate/\">Cufon</a> font replacement. Replaces Headers to <a href=\"http://www.fontsquirrel.com/fonts/Liberation-Sans\">Liberation Sans</a> font.",
					"id" => $shortname."_cufon",
					"std" => "true",
					"type" => "checkbox");    

$options[] = array( "name" => "Full Content Home",
					"desc" => "Show the full content in posts on homepage instead of the excerpt.",
					"id" => $shortname."_home_content",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Full Content Archive",
					"desc" => "Show the full content in posts on archive pages instead of the excerpt.",
					"id" => $shortname."_archive_content",
					"std" => "false",
					"type" => "checkbox");    
					
$options[] = array( "name" =>  "Disable Post Author",
					"desc" => "Disable post author below post?",
					"id" => $shortname."_disable_post_author",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Sidebar",
                    "icon" => "sidebar",
					"type" => "heading");    

$options[] = array( "name" => "Left Sidebar",
					"desc" => "Show sidebar on the left instead of right.",
					"id" => $shortname."_left_sidebar",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array(	"name" => "Video Category",
					"desc" => "Select the category to use with your Video Player Widget (video category will be excluded from home page).",
					"id" => $shortname."_video_category",
					"std" => "Select a category:",
					"type" => "select",
					"options" => $woo_categories);

$options[] = array( "name" => "Dynamic Images",
					"type" => "heading",
					"icon" => "image");    
				    				   
$options[] = array( "name" => "Enable WordPress Post Thumbnail Support",
					"desc" => "Use WordPress post thumbnail support to assign a post thumbnail.",
					"id" => $shortname."_post_image_support",
					"std" => "true",
					"class" => "collapsed",
					"type" => "checkbox"); 

$options[] = array( "name" => "Dynamically Resize Post Thumbnail",
					"desc" => "The post thumbnail will be dynamically resized using native WP resize functionality. <em>(Requires PHP 5.2+)</em>",
					"id" => $shortname."_pis_resize",
					"std" => "true",
					"class" => "hidden",
					"type" => "checkbox"); 									   
					
$options[] = array( "name" => "Hard Crop Post Thumbnail",
					"desc" => "The image will be cropped to match the target aspect ratio.",
					"id" => $shortname."_pis_hard_crop",
					"std" => "true",
					"class" => "hidden last",
					"type" => "checkbox"); 									   

$options[] = array( "name" => "Enable Dynamic Image Resizer",
					"desc" => "This will enable the thumb.php script which dynamically resizes images on your site.",
					"id" => $shortname."_resize",
					"std" => "true",
					"type" => "checkbox");    
                    
$options[] = array( "name" => "Automatic Image Thumbs",
					"desc" => "If no image is specified in the 'image' custom field then the first uploaded post image is used.",
					"id" => $shortname."_auto_img",
					"std" => "false",
					"type" => "checkbox");  

$options[] = array( "name" => "Show Image in RSS feed",
					"desc" => "Will show the image uploaded to 'image' custom field in the RSS feed.",
					"id" => $shortname."_rss_thumb",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Featured Image alignment",
					"desc" => "Select how to align your images with featured posts.",
					"id" => $shortname."_align_feat",
					"std" => "alignleft",
					"type" => "radio",
					"options" => $options_radio); 

$options[] = array( "name" => "Featured Image Dimensions",
					"desc" => "Enter an integer value i.e. 250 for the image size. Max width is 576.",
					"id" => $shortname."_image_dimensions",
					"std" => "",
					"type" => array( 
									array(  'id' => $shortname. '_thumb_width_feat',
											'type' => 'text',
											'std' => 200,
											'meta' => 'Width'),
									array(  'id' => $shortname. '_thumb_height_feat',
											'type' => 'text',
											'std' => 200,
											'meta' => 'Height')
								  ));

$options[] = array( "name" => "Image alignment",
					"desc" => "Select how to align your images with posts (front page and archives).",
					"id" => $shortname."_align",
					"std" => "alignleft",
					"type" => "radio",
					"options" => $options_radio); 

$options[] = array( "name" => "Image Dimensions",
					"desc" => "Enter an integer value i.e. 250 for the image size. Max width is 576.",
					"id" => $shortname."_image_dimensions",
					"std" => "",
					"type" => array( 
									array(  'id' => $shortname. '_thumb_width',
											'type' => 'text',
											'std' => 200,
											'meta' => 'Width'),
									array(  'id' => $shortname. '_thumb_height',
											'type' => 'text',
											'std' => 200,
											'meta' => 'Height')
								  ));
                                                                                                
$options[] = array( "name" => "Show in Single Posts",
					"desc" => "Show the attached image in the single post page. <strong>Note:</strong> You must disable content ad.",
					"id" => $shortname."_image_single",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Single Image Dimensions",
					"desc" => "Enter an integer value i.e. 250 for the image size. Max width is 576.",
					"id" => $shortname."_image_dimensions",
					"std" => "",
					"type" => array( 
									array(  'id' => $shortname. '_single_width',
											'type' => 'text',
											'std' => 200,
											'meta' => 'Width'),
									array(  'id' => $shortname. '_single_height',
											'type' => 'text',
											'std' => 200,
											'meta' => 'Height')
								  ));

//Advertising
$options[] = array( "name" => "Top Ad (468x60px)",
                    "icon" => "ads",
                    "type" => "heading");

$options[] = array( "name" => "Enable Ad",
					"desc" => "Enable the ad space",
					"id" => $shortname."_ad_top",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Adsense code",
					"desc" => "Enter your adsense code (or other ad network code) here.",
					"id" => $shortname."_ad_top_adsense",
					"std" => "",
					"type" => "textarea");

$options[] = array( "name" => "Image Location",
					"desc" => "Enter the URL to the banner ad image location.",
					"id" => $shortname."_ad_top_image",
					"std" => "http://www.woothemes.com/ads/468x60b.jpg",
					"type" => "upload");

$options[] = array( "name" => "Destination URL",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_top_url",
					"std" => "http://www.woothemes.com",
					"type" => "text");                        

$options[] = array( "name" => "Content Ad (200x200px)",
                    "icon" => "ads",
					"type" => "heading");

$options[] = array( "name" => "Enable Ad",
					"desc" => "Enable the ad space",
					"id" => $shortname."_ad_content",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Adsense code",
					"desc" => "Enter your adsense code (or other ad network code) here.",
					"id" => $shortname."_ad_content_adsense",
					"std" => "",
					"type" => "textarea");

$options[] = array( "name" => "Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_content_image",
					"std" => "http://www.woothemes.com/ads/200x200a.jpg",
					"type" => "upload");

$options[] = array( "name" => "Destination URL",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_content_url",
					"std" => "http://www.woothemes.com",
					"type" => "text");                        

$options[] = array(	"name" => "Widget Ads (125x125)",
                    "icon" => "ads",
					"type" => "heading");

$options[] = array(	"name" => "Rotate banners?",
					"desc" => "Check this to randomly rotate the banner ads.",
					"id" => $shortname."_ads_rotate",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Banner Ad #1 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_1",
					"std" => "http://www.woothemes.com/ads/125x125b.jpg",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #1 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_1",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Banner Ad #2 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_2",
					"std" => "http://www.woothemes.com/ads/125x125b.jpg",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #2 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_2",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #3 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_3",
					"std" => "http://www.woothemes.com/ads/125x125b.jpg",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #3 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_3",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #4 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_4",
					"std" => "http://www.woothemes.com/ads/125x125b.jpg",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #4 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_4",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #5 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_5",
					"std" => "http://www.woothemes.com/ads/125x125b.jpg",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #5 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_5",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #6 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_6",
					"std" => "http://www.woothemes.com/ads/125x125b.jpg",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #6 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_6",
					"std" => "http://www.woothemes.com",
					"type" => "text");

update_option('woo_template',$options);      
update_option('woo_themename',$themename);   
update_option('woo_shortname',$shortname);
update_option('woo_manual',$manualurl);

                                     
// Woo Metabox Options
                    

$woo_metaboxes = array(

        "image" => array (
            "name"  => "image",
            "std"  => "",
            "label" => "Custom Thumbnail Image",
            "type" => "upload",
            "desc" => "Upload an image to show with your post."
        ),
        "embed" => array (
            "name"  => "embed",
            "std"  => "",
            "label" => "Embed Code",
            "type" => "textarea",
            "desc" => "Enter the video embed code for your video (YouTube, Vimeo or similar)"
        )
    );
    
update_option('woo_custom_template',$woo_metaboxes);      

/*
function woo_update_options(){
        $options = get_option('woo_template',$options);  
        foreach ($options as $option){
            update_option($option['id'],$option['std']);
        }   
}

function woo_add_options(){
        $options = get_option('woo_template',$options);  
        foreach ($options as $option){
            update_option($option['id'],$option['std']);
        }   
}


//add_action('switch_theme', 'woo_update_options'); 
if(get_option('template') == 'wooframework'){       
    woo_add_options();
} // end function 
*/


}

add_action('init','options');  

?>