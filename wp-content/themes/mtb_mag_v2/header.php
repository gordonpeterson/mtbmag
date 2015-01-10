<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package  WellThemes
 * @file     header.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->


<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- gordons header.php -->

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'wellthemes' ), max( $paged, $page ) );

	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	
	
?>


</head>
<body <?php body_class(); ?>>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=116905355012808&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div id="container" class="hfeed">
		<div class="lang">
		<?php do_action('icl_language_selector'); ?>
		</div>
	
	<header id="header">
			
		
		<div class="logo-wrap">
			
			<div class="logo">			
				<?php if (wt_get_option( 'wt_logo_url' )) { ?>
					<h1>
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
							<img src="<?php echo wt_get_option( 'wt_logo_url' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
						</a>
					</h1>	
				<?php } else {?>
					<h1 class="site-title">
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
							<?php bloginfo('name'); ?>
						</a>
					</h1>					
				<?php } ?>	
				
			
			</div>
			
			<div class="links">
			
			<?php	if(ICL_LANGUAGE_CODE == 'en'){ ?>
				<script type='text/javascript'>
				var googletag = googletag || {};
				googletag.cmd = googletag.cmd || [];
				(function() {
				var gads = document.createElement('script');
				gads.async = true;
				gads.type = 'text/javascript';
				var useSSL = 'https:' == document.location.protocol;
				gads.src = (useSSL ? 'https:' : 'http:') + 
				'//www.googletagservices.com/tag/js/gpt.js';
				var node = document.getElementsByTagName('script')[0];
				node.parentNode.insertBefore(gads, node);
				})();
				</script>

				<script type='text/javascript'>
				googletag.cmd.push(function() {
				googletag.defineSlot('/1031065/MTBMAG-EN-Header', [[728, 90], [950, 150]], 'div-gpt-ad-1402004698859-0').addService(googletag.pubads());
				googletag.pubads().enableSingleRequest();
				googletag.enableServices();
				});
				</script>
				<!-- MTBMAG-EN-Header -->
				<div id='div-gpt-ad-1402004698859-0'>
				<script type='text/javascript'>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1402004698859-0'); });
				</script>
				</div>
			<?php	}
				else {?>
					<script type='text/javascript'>
					var googletag = googletag || {};
					googletag.cmd = googletag.cmd || [];
					(function() {
					var gads = document.createElement('script');
					gads.async = true;
					gads.type = 'text/javascript';
					var useSSL = 'https:' == document.location.protocol;
					gads.src = (useSSL ? 'https:' : 'http:') + 
					'//www.googletagservices.com/tag/js/gpt.js';
					var node = document.getElementsByTagName('script')[0];
					node.parentNode.insertBefore(gads, node);
					})();
					</script>

					<script type='text/javascript'>
					googletag.cmd.push(function() {
					googletag.defineSlot('/1031065/MTBMAG-Header-home', [[728, 90], [950, 150]], 'div-gpt-ad-1402004398340-0').addService(googletag.pubads());
					googletag.pubads().enableSingleRequest();
					googletag.enableServices();
					});
					</script>
					<!-- MTBMAG-Header-home -->
					<div id='div-gpt-ad-1402004398340-0'>
					<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('div-gpt-ad-1402004398340-0'); });
					</script>
					</div>
				
			<?php } ?>
			
				
			</div>
		
				
		</div>		
		
	</header>
	
	
	<div class="menu-section clearfix">
		<nav id="main-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '0', 'fallback_cb' => 'wellthemes_main_menu_fallback',) ); ?>
			<div class="clearfix"></div>
		</nav>
		
		<div class="search">
			<?php get_search_form(); ?>
		</div>
			
	</div>

	<section id="main">
	
	<?php
		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}
		
		if (is_page_template('page-featured.php')&& $paged < 2 ){		
			$show_slider_section = get_post_meta($post->ID, 'wt_meta_post_show_feat_slider', true);
						
			if ( $show_slider_section == 1 ){
				get_template_part( 'includes/slider-section' );
			}
		}
	?>