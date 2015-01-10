<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   
<!--[if IE 6]>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/pngfix.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/menu.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" />
<![endif]-->	

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" />
<![endif]-->
   
<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<?php woo_head(); ?>

<!--[if lte IE 7]>
<script type="text/javascript">
jQuery(function() {
	var zIndexNumber = 1000;
	jQuery('div').each(function() {
		jQuery(this).css('zIndex', zIndexNumber);
		zIndexNumber -= 1;
	});
});
</script>
<![endif]-->

<?php if ( !$paged && get_option('woo_featured') == "true" ) { ?>
<script type="text/javascript">
jQuery(window).load(function(){
	jQuery("#loopedSlider").loopedSlider({
	<?php
		$autoStart = 0;
		$slidespeed = 600;
		if ( get_option("woo_slider_auto") == "true" ) 
		   $autoStart = get_option("woo_slider_interval") * 1000;
		else 
		   $autoStart = 0;
		if ( get_option("woo_slider_speed") <> "" ) 
			$slidespeed = get_option("woo_slider_speed") * 1000;
	?>
		autoStart: <?php echo $autoStart; ?>, 
		slidespeed: <?php echo $slidespeed; ?>, 
		autoHeight: true
	});
});
</script>
<?php } ?>

<script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'>
</script>
<script type='text/javascript'>
GS_googleAddAdSenseService("ca-pub-4921136079852098");
GS_googleEnableAllServices();
</script>
<script type='text/javascript'>
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-home");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-home-300x250-sponsor");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Home-Sponsor2");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Home-Sponsor3");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-home-Multiplayer");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Home2");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Home-3");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Home-4");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Home-merchandising");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Background-Archives");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Background-Home");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Background-Pages");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Background-Single");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Background-Techcorner");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Header-728x90");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-404");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-videocontent-160x600");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-LIVE-728x90top");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-FDA-SkinWP");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-VDA2012");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-Background-Notbad");
GA_googleAddSlot("ca-pub-4921136079852098", "MTB-home-commenti");
</script>
<script type='text/javascript'>
GA_googleFetchAds();
</script>

<?php
if (is_home() && !is_paged()) {
	$target_value = 'Homepage';
} elseif (is_category()) {
	$cat = single_cat_title('', false);
	$cat = preg_replace('!s|W!', '', $cat);
	$target_value = 'Category_' . $cat;
} elseif ($post) {
	$target_key = 'PostID';
	$target_value = $post->ID;
}
?>

<!-- Dieses Tag in den Head-Bereich oder direkt vor dem schließenden Body-Tag einfügen -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'it'}
</script>





</head>


<?php woo_globals(); // Set global variables ?>

<body <?php body_class(); ?>>




<div id="container">
       
	<div id="top">
    
		<?php if ( get_option('woo_nav_top') == "true" ) include( TEMPLATEPATH . '/includes/page-nav.php' ); ?>

        <div id="header" class="col-full">
       
            <div id="logo">
               
                <?php if (get_option('woo_texttitle') <> "true") { ?><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>"><img class="title" src="<?php if ( get_option('woo_logo') <> "" ) { echo get_option('woo_logo'); } else { bloginfo('template_directory'); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?>" /></a><?php } ?> 
                
                <?php if(is_single() || is_page()) : ?>
                    <span class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span>
                <?php else: ?>
                    <h1 class="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
                
                    <span class="site-description"><?php bloginfo('description'); ?></span>
                
            </div><!-- /#logo -->
               
			<?php if (get_option('woo_ad_top') == "true") { ?>
		    <div id="topad">
   

<!-- MTB-Header-728x90 -->
<script type='text/javascript'>
GA_googleFillSlot("MTB-Header-728x90");
</script>
	
            </div><!-- /#topad -->
            <?php } elseif (get_option('woo_twitter')) { ?>
            <div id="twitter-top">
            	<div class="logo">
                    <a href="http://www.twitter.com/<?php echo get_option('woo_twitter'); ?>" title="<?php _e('Follow on Twitter', 'woothemes'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ico-twitter.png" alt="<?php _e('Twitter', 'woothemes'); ?>" /></a>                
                </div>
                <div class="tweet">
	                <ul id="twitter_update_list"><li></li></ul>
                </div>
            </div><!-- /#topad -->
			<?php } ?>
                       
        </div><!-- /#header -->
        
        <div id="navigation">
        
			<?php if ( get_option('woo_nav_top') <> "true" ) include( TEMPLATEPATH . '/includes/page-nav.php' ); ?>
                        
            <div id="cat-nav">
                <div class="col-full">
					<?php
					if ( function_exists('has_nav_menu') && has_nav_menu('secondary-menu') ) {
						wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'secnav', 'menu_class' => 'fl', 'theme_location' => 'secondary-menu' ) );
					} else {
					?>
                    <ul id="secnav" class="fl">
                    
					<?php 
                    if ( get_option('woo_custom_nav_menu') == 'true' && function_exists('woo_custom_navigation_output') ) {
						if ( get_option('woo_menu_desc') == "true" ) $desc = 1;
						woo_custom_navigation_output("name=Woo Menu 2&desc=".$desc);
                    } else { ?>
                    
						<?php foreach ( (get_categories('hide_empty=0&exclude='.get_option('woo_nav_exclude') ) ) as $category ) { if ( $category->category_parent == '0' ) { ?>      
                        <li>
                            <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?><?php if ( $GLOBALS[desc] ) { ?><br/><span><?php echo $category->category_description; ?></span><?php } ?></a>
                            
                            <?php if (get_category_children($category->cat_ID) ) { ?>
                            <ul><?php wp_list_categories('title_li&child_of=' . $category->cat_ID ); ?></ul>
                            <?php } ?>
                        </li>        
                        <?php } } ?>
                        
					<?php }	?>
                        
                    </ul><!-- /#nav2 -->
                    <?php } ?>
                    <?php if ( get_option('woo_search_disable') <> "true" ) : ?>
                    <div id="search" class="fr">
                        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                            <input type="text" class="field" name="s" id="s"  value="<?php _e('Enter keywords...', 'woothemes') ?>" onfocus="if (this.value == '<?php _e('Enter keywords...', 'woothemes') ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Enter keywords...', 'woothemes') ?>';}" />
                            <input class="submit btn" type="image" src="<?php bloginfo('template_directory'); ?>/images/ico-search.png" value="Go" />
                        </form>
                    </div><!-- /#search -->
                    <?php endif; ?>
                </div><!-- /.col-full -->
            </div><!-- /#cat-nav -->
            
        </div><!-- /#navigation -->
    
    </div><!--/#top-->
<?php if (! empty($_COOKIE['mtb_forumuserid']) && ! empty($_COOKIE['mtb_forumpassword'])) : ?>
<?php else : ?>
<?php endif; ?>

<script type="text/javascript">
function dCookie()
{
    var d = new Date();
    d.setTime(d.getTime()+(3650*24*60*60*1000));
    document.cookie = "mtb_forum_mobile=yes;path=/;domain=mtb-forum.it;expires=" + d.toGMTString() + ";";
    window.location="http://www.mtb-forum.it";
}
</script>



<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function() {
var refreshId = setInterval(function() {
      $("#responsecontainer").children().eq(0).find("iframe").first().attr("src", $("#responsecontainer").children().eq(0).find("iframe").first().attr("src"));
   }, 60000);
});
</script>