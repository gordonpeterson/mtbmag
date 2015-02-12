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

<!-- start -->
			<?php 
				// define("ICL_LANGUAGE_CODE", "en");
			 ?>
			
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
				
			<?php } ?>

			<!-- end -->

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
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>

			<div class="right-nav">
				<span class="search-toggle">
					<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
				</span>
					<?php do_action('icl_language_selector'); ?>
				<span class="login-toggle" ng-mouseover="login=true" ng-mouseout="login=false">
					<div class="login-info">
						<a href="" ><?php 
						if ( is_user_logged_in() ) {
							$current_user = wp_get_current_user();
							// print_r( $current_user );
							echo 'Hi ' . $current_user->display_name. '!';
						} else {
							echo 'Log In';
						}
						?></a>
						</div>
					<div class="login-form" ng-show="login"  ng-cloak>
					<?php

						if ( is_user_logged_in() ) {
							?>
							<div class="logout">
								<a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">Logout</a>
							</div>
							<?php 
						}	else {
							?>
							<?php 
							wp_login_form(); 
						}
					 ?>
					</div>
				</span>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle" ng-click="toggleMenu = !toggleMenu">
					<span>{{toggleMenu}}</span>
					<?php _e( 'Primary Menu', 'twentyfourteen' ); ?>
				</button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<div class="menu-links-container">
				<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

	<?php //..........start gordons nav
	$menu_name = 'primary';
	$locations = get_nav_menu_locations();

		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

	// $menu_items = wp_get_nav_menu_items($menu->term_id);
	$menu_items = wp_get_nav_menu_items($menu);
	
	echo '<ul id="menu-' . $menu_name . '" class="gordon-menu menu-nav" ng-class="{\'show\': toggleMenu}">';

	?>
		<script type="text/javascript">
				var menuItems =  JSON.parse('<?php echo json_encode( $menu_items ) ?>');
				console.log('----start----');
				console.log( menuItems );
			</script>
	<?php 


	$selected_parent = -1;
	$count = 0;
	$sub_count = 0;

	foreach ( (array) $menu_items as $key => $menu_item ) {
			$item_id = $menu_item->ID;
			$title = $menu_item->title;
			$url = $menu_item->url;
			$type = $menu_item->object;
			$url =$menu_item->url;
			$post_status = $menu_item->post_status;
			$url_obj = parse_url($url);
			$url_base = basename($url_obj["path"]);
			$articleCount = 0;
			$custom_class = "";
			$classes = implode(" ", $menu_item->classes);

			
			$url_target = $menu_item->TARGET;
			$category_ul = '';

			$parent = $menu_item->menu_item_parent;
			$menu_order = $menu_item->menu_order;
			$menu_index = $menu_order-1;

			$previous_item = $menu_items[ $menu_index-1 ];
			$next_item = $menu_items[ $menu_index+1 ];

			if ( !$previous_item ) {
				// echo "<!-- -------------------the first --------------------- -->";
				$custom_class = "is-first";
			} else if ( $selected_parent != -1 && $menu_item->menu_item_parent != $selected_parent ) {
					// echo "<!-- <<<<<<<<<<< end the container >>>>>>>>>>>>> -->";
				echo "</ul> <!-- end the .sub-menu -->";
				echo "</li> <!-- close the parent -->";
				$selected_parent = -1;
			}


			?>

			<li class="menu-item <?php echo $type ?>-container <?php echo $custom_class ?> <?php echo $classes ?>">
				<a href="<?php echo $url ?>" target="<?php $url_target ?>">
					<span class="title"><?php echo $title; ?></span>
					<span class="type-label" style="display:none;"><?php echo "($type)" ?></span>
				</a>

			<?php 
			// ...........create a categories ul
			if ( $post_status == 'publish' && $type == "category" ) {
				$category_query = get_posts( "category_name=$url_base&posts_per_page=17" ); 
				if ( $category_query ) {?>
					<ul class='category'>
					<!-- start the loop -->
					<?php foreach ( $category_query as $post ) : setup_postdata( $post ); ?>
						<li class="article">
							<?php get_template_part('content', 'nav') //...show content-nav.php template ?>
						</li>
					<?php endforeach; ?>
					<!-- end the loop -->
					</ul> <!-- end ul.category -->
				<?php 
				} else {
					echo "<ul> <li class='error'>could not query the category:$url_base</li> </ul>";
				}
			} 
			
				


			if ( !$next_item ) {
				echo "<!-- -------------------the last --------------------- -->";
			} else if( $next_item->menu_item_parent == $item_id ){
				$selected_parent = $item_id;
					// echo "<!-- <<<<<<<<<<< start the container >>>>>>>>>>>>> -->";
				echo "<ul class='sub-menu'>";
			} else {
				?> </li>  <!-- end li.menu-item --> <?php
			}


			$count++;
			wp_reset_postdata();
	}
	echo '</ul>'; //...close the main ul;
		} else {
	echo '<ul><li class="error">the "' . $menu_name . '" menu is not defined.</li></ul>';
		} 
		//...........end gordons nav
		?>



				</div> <!-- end menu-links-container -->
			</nav>  <!-- end primary-navigation -->
	
		</div> <!-- end header-main -->

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>


	</header><!-- #masthead -->

	<div id="main" class="site-main">



	<?php
		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}
		
	?>




