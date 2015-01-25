<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	

		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/jquery/dist/jquery.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/angular/angular.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/affix.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/alert.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/button.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/carousel.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/collapse.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/dropdown.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tab.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/transition.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/scrollspy.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/modal.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tooltip.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/popover.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/angular-animate/angular-animate.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/angular-cookies/angular-cookies.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/angular-resource/angular-resource.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/angular-route/angular-route.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/angular-sanitize/angular-sanitize.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/angular-touch/angular-touch.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/lodash/dist/lodash.compat.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/shifty/dist/shifty.min.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/underscore/underscore.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/rekapi/dist/rekapi.min.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/spark-scroll/src/spark-scroll.js"></script>
		<script src="/wp-content/themes/mtb_mag_v2/js/bower_components/animation-frame/AnimationFrame.js"></script>

		

		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<script src="/wp-content/themes/mtb_mag_v2/js/app.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ng-app="mtbMagApp">
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		<div class="right-nav">
			<span class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</span>
				<?php do_action('icl_language_selector'); ?>
			<span class="login-toggle" ng-mouseover="login=true", ng-mouseout="login=false">
				<div class="login-info"><a href="#login" >Login</a></div>
				<div class="login-form" ng-show="login"  ng-cloak>
					<form action="#">
						<input type="text">
						<input type="password">
					</form>
				</div>
			</span>
		</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		<!-- 
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<? //php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

				<div class="menu-inglese-container">
					<ul id="menu-inglese" class="nav-menu"><li id="menu-item-55080" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-55080"><a href="/category/mag-2/en/news-en-2/">NEWS</a></li>
						<li id="menu-item-66758" ng-mouseover='showArticles=true' ng-mouseout='showArticles=false' class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-66758"><a href="/category/mag-2/en/eurobike-2014-en/">EUROBIKE 2014</a></li>
						<li id="menu-item-55081" ng-mouseover='showArticles=true' ng-mouseout='showArticles=false' class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-55081"><a href="/category/mag-2/en/reviews-en/">REVIEWS</a></li>
						<li id="menu-item-55082" ng-mouseover='showArticles=true' ng-mouseout='showArticles=false' class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-55082"><a href="/category/mag-2/en/epics/">EPICS</a></li>
						<li id="menu-item-61346" ng-mouseover='showArticles=true' ng-mouseout='showArticles=false' class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-61346"><a href="/category/mag-2/en/interviews/">INTERVIEWS</a></li>
						<li id="menu-item-55083" ng-mouseover='showArticles=true' ng-mouseout='showArticles=false' class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-55083"><a href="/category/mag-2/en/tech-corner-en/">TECH</a></li>
						<li id="menu-item-55084" ng-mouseover='showArticles=true' ng-mouseout='showArticles=false' class="menu-item menu-item-type-custom menu-item-object-custom menu-item-55084"><a href="http://tc.mtb-forum.it/index.php?lang=en">TRAINING CAMP</a></li>
					</ul>
				</div>
			</nav>
		-->
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="article-nav" ng-show='showArticles'  ng-cloak ng-mouseover="showArticles=true" ng-mouseout="showArticles=false">
			<article class="small"></article>
			<article class="small"></article>
			<article class="small"></article>
			<article class="small"></article>
			<article class="small"></article>
			<article class="small"></article>
			<article class="small"></article>
			<article class="small"></article>
			<article class="small"></article>
			<article class="small"></article>
		</div>


	</header><!-- #masthead -->

	<div id="main" class="site-main">
