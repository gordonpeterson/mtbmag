<?php

/**
 * Tell WordPress to run wellthemes_theme_setup() when the 'after_setup_theme' hook is run.
 */
 
add_action( 'after_setup_theme', 'wellthemes_theme_setup' );

if ( ! function_exists( 'wellthemes_theme_setup' ) ):

function wellthemes_theme_setup() {

	/**
	 * Load up our required theme files.
	 */
	require( get_template_directory() . '/framework/settings/theme-options.php' );
	require( get_template_directory() . '/framework/settings/option-functions.php' );
	
	require( get_template_directory() . '/framework/meta/meta_post.php' );
	require( get_template_directory() . '/framework/meta/meta_category.php' );
	require( get_template_directory() . '/framework/meta/meta_functions.php' );
	/**
	 * Load our theme widgets
	 */
	require( get_template_directory() . '/framework/widgets/widget_adsblock.php' );
	require( get_template_directory() . '/framework/widgets/widget_adsingle.php' );
	require( get_template_directory() . '/framework/widgets/widget_contact_form.php' );
	require( get_template_directory() . '/framework/widgets/widget_flickr.php' );
	require( get_template_directory() . '/framework/widgets/widget_popular_posts.php' );
	require( get_template_directory() . '/framework/widgets/widget_recent_posts.php' );
	require( get_template_directory() . '/framework/widgets/widget_popular_posts_text.php' );
	require( get_template_directory() . '/framework/widgets/widget_video.php' );
	require( get_template_directory() . '/framework/widgets/widget_facebook.php' );
	require( get_template_directory() . '/framework/widgets/widget_carousel.php' );
	require( get_template_directory() . '/framework/widgets/widget_aboutus.php' );
	require( get_template_directory() . '/framework/widgets/widget_pinterest.php' );
	require( get_template_directory() . '/framework/widgets/widget_recent_comments.php' );
	require( get_template_directory() . '/framework/widgets/widget_google.php' );
	require( get_template_directory() . '/framework/widgets/widget_subscribe.php' );
	require( get_template_directory() . '/framework/widgets/widget_popular_categories.php' );
	require( get_template_directory() . '/framework/widgets/widget_top_reviews.php' );
	require( get_template_directory() . '/framework/widgets/widget_top_reviews_text.php' );
	require( get_template_directory() . '/framework/widgets/widget_subscribers_count.php' );
	require( get_template_directory() . '/framework/widgets/widget_most_read.php' );
	
	/* Add translation support.
	 * Translations can be added to the /languages/ directory.
	 */
	load_theme_textdomain( 'wellthemes', get_template_directory() . '/languages' );
	
	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	if ( ! isset( $content_width ) )
		$content_width = 600;
		
	/** 
	 * Add default posts and comments RSS feed links to <head>.
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/**
	 * This theme styles the visual editor with editor-style.css to match the theme style.
	 */
	add_editor_style();
	
	/**
	 * Register menus
	 *
	 */
	register_nav_menus( array(
		'top-menu' => __( 'Top Menu', 'wellthemes' ),
		'primary-menu' => __( 'Primary Menu', 'wellthemes' )					
	) );
	
	/**
	 * Add support for the featured images (also known as post thumbnails).
	 */
	if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' );
	}
	
	/**
	 * Add custom image sizes
	 */
	add_image_size( 'wt780_450', 780, 450, true );		//main slider
	add_image_size( 'wt460_260', 460, 260, true );		//main slider	
	add_image_size( 'wt360_210', 360, 210, true );		//feat category
	add_image_size( 'wt300_140', 300, 140, true );		//sider, widgets
	add_image_size( 'wt260_125', 260, 125, true );		//feat post
	add_image_size( 'wt135_80', 135, 80, true );		//feat category
}
endif; // wellthemes_theme_setup

/**
 * A safe way of adding JavaScripts to a WordPress generated page.
 */

if (!is_admin()){
    add_action('wp_enqueue_scripts', 'wellthemes_js');
}

if (!function_exists('wellthemes_js')) {

    function wellthemes_js() {
		wp_enqueue_script('wt_hoverIntent', get_template_directory_uri().'/js/hoverIntent.js',array('jquery'),'', true);
		wp_enqueue_script('wt_superfish', get_template_directory_uri().'/js/superfish.js',array('hoverIntent'),'', true);
		wp_enqueue_script('wt_slider', get_template_directory_uri() . '/js/flexslider-min.js', array('jquery'),'', true); 
		wp_enqueue_script('wt_lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'),'', true); 		
		wp_enqueue_script('wt_jflickrfeed', get_template_directory_uri() . '/js/jflickrfeed.min.js', array('jquery'),'', true); 
		wp_enqueue_script('wt_mobilemenu', get_template_directory_uri() . '/js/jquery.mobilemenu.js', array('jquery'),'', true); 
		wp_enqueue_script('wt_touchSwipe', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array('jquery'),'', true); 
		wp_enqueue_script('wt_carousel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array('jquery')); 
		wp_enqueue_script('wt_mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array('jquery'),'', true);	
		wp_enqueue_script('wt_custom', get_template_directory_uri() . '/js/custom.js', array('jquery'),'', true);		
    }
	
}

/**
 * Enqueues styles for front-end.
 *
 */ 
if (!function_exists('wellthemes_css')) {
	function wellthemes_css() {
		wp_enqueue_style( 'wt-style', get_stylesheet_uri() );
		wp_enqueue_style( 'wt-font-awesome', get_template_directory_uri().'/css/font-awesome/css/font-awesome.min.css' );		
	}
}
add_action( 'wp_enqueue_scripts', 'wellthemes_css' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
 
if ( function_exists('register_sidebar') ) {
		
	register_sidebar( array(
		'name' => __( 'Sidebar', 'wellthemes' ),
		'id' => 'sidebar-1',
		'description' => __( 'Main sidebar area', 'wellthemes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="widget-title"><h4>',
		'after_title' => '</h4></div>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'Footer Widget 1', 'wellthemes' ),
		'id' => 'footer-1',
		'description' => __( 'Widget 1 area in the footer', 'wellthemes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="widget-title"><h4>',
		'after_title' => '</h4></div>'
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget 2', 'wellthemes' ),
		'id' => 'footer-2',
		'description' => __( 'Widget 2 area in the footer', 'wellthemes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="widget-title"><h4>',
		'after_title' => '</h4></div>'
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget 3', 'wellthemes' ),
		'id' => 'footer-3',
		'description' => __( 'Widget 3 area in the footer', 'wellthemes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="widget-title"><h4>',
		'after_title' => '</h4></div>'
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget 4', 'wellthemes' ),
		'id' => 'footer-4',
		'description' => __( 'Widget 4 area in the footer', 'wellthemes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="widget-title"><h4>',
		'after_title' => '</h4></div>'
	) );
}

/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own wellthemes_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 */
if ( ! function_exists( 'wellthemes_comment' ) ) :
function wellthemes_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	global $post;
	
	switch ( $comment->comment_type ) :
		case '' :
		
		if($comment->user_id == $post->post_author) {
			$author_text = '<span class="author-comment main-color-bg">Author</span>';
		} else {
			$author_text = '';
		}
		
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>">
		
			<div class="author-avatar">
				<a href="<?php comment_author_url()?>"><?php echo get_avatar( $comment, 60 ); ?></a>
			</div>			
		
			<div class="comment-right">
				
				<div class="comment-header">
						<h5><?php printf( __( '%s', 'wellthemes' ), sprintf( '<cite class="fn cufon">%s</cite>', get_comment_author_link() ) ); ?></h5>
						<?php echo $author_text; ?>
				</div>
					
				<div class="comment-meta">					
					
					<span class="comment-time">
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
						<?php
							/* translators: 1: date, 2: time */
							printf( __( '%1$s at %2$s', 'wellthemes' ), get_comment_date(),  get_comment_time() ); ?></a>
					</span>
					<span class="sep">-</span>
					<span class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'wellthemes' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</span>
									
					<?php edit_comment_link( __( '[ Edit ]', 'wellthemes' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- /comment-meta -->
			
				<div class="comment-text">
					<?php comment_text(); ?>
				</div>
		
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<p class="moderation"><?php _e( 'Your comment is awaiting moderation.', 'wellthemes' ); ?></p>
				<?php endif; ?>

				<!-- /reply -->
		
			</div><!-- /comment-right -->
		
		</article><!-- /comment  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'wellthemes' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '[ Edit ]', 'wellthemes' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php	
			break;
	endswitch;
}
endif;	//ends check for wellthemes_comment()


/**
 * Pagination for archive, taxonomy, category, tag and search results pages
 *
 * @global $wp_query http://codex.wordpress.org/Class_Reference/WP_Query
 * @return Prints the HTML for the pagination if a template is $paged
 */
if ( ! function_exists( 'wt_pagination' ) ) :
function wt_pagination() {
	global $wp_query;
 
	$big = 999999999; // This needs to be an unlikely integer
 
	// For more options and info view the docs for paginate_links()
	// http://codex.wordpress.org/Function_Reference/paginate_links
	$paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'mid_size' => 5
	) );
 
	// Display the pagination if more than one page is found
	if ( $paginate_links ) {
		echo '<div class="pagination">';
		echo $paginate_links;
		echo '</div><!--// end .pagination -->';
	}
}
endif; // ends check for wt_pagination()


if ( ! function_exists( 'wellthemes_main_menu_fallback' ) ) :
	
	function wellthemes_main_menu_fallback() { ?>
		<ul class="menu">
			<?php
				wp_list_categories(array(
					'number' => 5,
					'exclude' => '1',		//exclude uncategorized posts
					'title_li' => '',
					'orderby' => 'count',
					'order' => 'DESC'  
				));
			?>  
		</ul>
    <?php
	}

endif; // ends check for wellthemes_main_menu_fallback()


if ( ! function_exists( 'wellthemes_top_menu_fallback' ) ) :
	
	function wellthemes_top_menu_fallback() { ?>
		
    <?php
	}

endif; // ends check for wellthemes_top_menu_fallback()



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

function get_overall_score(){
	global $post ;
	$enable_review = get_post_meta($post->ID,'wt_meta_post_show_review', true);	
	
	if (empty($enable_review)){
		return false;
	}
	
	$review_score_val = get_post_meta($post->ID,'wt_meta_post_review_item6_score', true);	
	
	$overall_score  = wt_calculate_stars($review_score_val);
	
	if ($overall_score){
		return $overall_score;
	} else {
		return false;
	}	
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

/* function wt_get_first_cat(){
	$category = get_the_category();
	if ($category){	
	
		if (isset($category[0]->term_id)){
			
			$cat1_color = "";		
			$options = get_option('wt_options');		
			$cat1_color = $options['wt_primary_color'];
				
			$cat1_id = $category[0]->term_id;
						
			return '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->name.'</a>';
		}
		
	}
} */

/* function wt_get_cat_nowrap($cat_id = NULL){
	
	if (!$cat_id){
		$category = get_the_category();		
		if ($category){
			if (isset($category[0]->term_id)){
				$cat_id = $category[0]->term_id;
			}
		}
	}
	
	$wt_category_meta = get_option( "wt_category_meta_color_$cat_id" );
	if (isset($wt_category_meta['wt_cat_meta_icon'])){
		$cat_icon = $wt_category_meta['wt_cat_meta_icon'];	
		return $cat_icon;
	}	
	
} */


function wt_get_post_title_icon(){
	$category = get_the_category();
	if ($category){	
	
		if (isset($category[0]->term_id)){
							
			$cat_id = $category[0]->term_id;
			
			$wt_category_meta = get_option( "wt_category_meta_color_$cat_id" );
						
			if (isset($wt_category_meta['wt_cat_meta_icon'])){
				$output = "";
				$cat_icon = $wt_category_meta['wt_cat_meta_icon'];				
				$output = '<span class="title-icon main-color cat'.$cat_id.'-color"><i class="'. $cat_icon.'"></i></span>';				
				return $output;
			}			
			return false;			
		}		
	}
}

function wt_get_post_cat_icon(){
	$category = get_the_category();
	if ($category){	
	
		if (isset($category[0]->term_id)){
							
			$cat_id = $category[0]->term_id;
			
			$wt_category_meta = get_option( "wt_category_meta_color_$cat_id" );
						
			if (isset($wt_category_meta['wt_cat_meta_icon'])){
				$output = "";
				$cat_icon = $wt_category_meta['wt_cat_meta_icon'];				
				$output = '<div class="cat-icon main-color cat'.$cat_id.'-color"><i class="'. $cat_icon.'"></i></div>';				
				return $output;
			}			
			return false;			
		}		
	}
}

function wt_get_cats_with_icons(){
	$category = get_the_category();
	
	if ($category){		
	
		$output = "";
		if (isset($category[0]->term_id)){
			
			$cat1_id = $category[0]->term_id;			
			$wt_category_meta = get_option( "wt_category_meta_color_$cat1_id" );
			
			if (isset($wt_category_meta['wt_cat_meta_icon'])){
				$cat1_icon = $wt_category_meta['wt_cat_meta_icon'];				
			}else{
				$cat1_icon = 'icon-folder-close';			
			}
			
			$output .= '<span class="entry-cat main-color cat'.$cat1_id.'-color">';			
			$output .= '<i class="'.$cat1_icon.'"></i>';			
			$output .= '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->name.'</a>';
			$output .= '<span class="count">('.$category[0]->count.')</span>';
			$output .= '</span>';
		}
		
		if (isset($category[1]->term_id)){
			
			$cat2_id = $category[1]->term_id;			
			$wt_category_meta = get_option( "wt_category_meta_color_$cat2_id" );
			
			if (isset($wt_category_meta['wt_cat_meta_icon'])){
				$cat2_icon = $wt_category_meta['wt_cat_meta_icon'];				
			}else{
				$cat2_icon = 'icon-folder-close';			
			}
			
			$output .= '<span class="entry-cat main-color cat'.$cat2_id.'-color">';			
			$output .= '<i class="'.$cat2_icon.'"></i>';			
			$output .= '<a href="' . get_category_link( $category[1]->term_id ) . '">' . $category[1]->name.'</a>';	
			$output .= '<span class="count">('.$category[1]->count.')</span>';
			$output .= '</span>';
			
		}
		
		echo $output;
				
	}
}

function set_category_styles(){
	$categories = get_categories();
		$cat_css = "";
		foreach($categories as $category) {
			
			$cat_id = $category->term_id;
			$wt_category_meta = get_option( "wt_category_meta_color_$cat_id" );
			
			if (isset($wt_category_meta['wt_cat_meta_color'])){
				$cat_color = $wt_category_meta['wt_cat_meta_color'];
				$cat_css .=".cat".$cat_id."-bg{background:".$cat_color."} ";
				$cat_css .=".cat".$cat_id."-color{color:".$cat_color."} ";
			}		
				
		}
				
		wp_add_inline_style('wt-style', $cat_css);	
	
}
add_action( 'wp_enqueue_scripts', 'set_category_styles',11 );

