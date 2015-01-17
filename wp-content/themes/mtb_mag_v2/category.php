<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">


			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

			<div id="content" class="site-content" role="main">
			
			<?php
					// Start the Loop.
					$count = 0;
					$increment = 0;
					$adArray = array(3,4,5,11,15);

					$post_banner1 = get_post_meta($post->ID, 'wt_meta_post_banner1', true);	
					$post_banner2 = get_post_meta($post->ID, 'wt_meta_post_banner2', true);	
					$post_banner3 = get_post_meta($post->ID, 'wt_meta_post_banner3', true);	

					while ( have_posts() ) : the_post();
						$count++;

						// $blah = count( $adArray );
						// var_dump( $blah );

						if (array_key_exists($increment, $adArray)) {
							$currentIndex = $adArray[$increment];
						}
						

						if( $count == $currentIndex ){

							if( $currentIndex == 5 ){ //...the 727x90 banner
								// echo "<div class='ad ad2'>$adArray[$increment]</div>";
								if (empty($post_banner1)) { ?>
									<div class="ad ad1">
										<div class="ad-inner-wrap">
											<h1>ad1: 727x90</h1>
											<?php echo $post_banner1; ?>
										</div>			
									</div>
										
								<?php }
							} elseif ($currentIndex == 11) { //...the 727x400 banner
								// echo "<div class='ad ad3'>$adArray[$increment]</div>";
								if (empty($post_banner3)) { ?>
									<div class="ad ad3">
											<h1>ad3: 727x400</h1>
										<div class="ad-inner-wrap">
											<?php echo $post_banner3; ?>
										</div>			
									</div>
										
								<?php }
							} else { //...the 300x250 banners
								// echo "<div class='ad'>$adArray[$increment]</div>";
								if (empty($post_banner2)) { ?>
									<div class="ad ad2">
											<h1>ad2: 300x250</h1>
										<div class="ad-inner-wrap">
											<?php echo $post_banner2; ?>
										</div>			
									</div>
										
								<?php }
							}


							$increment++;
						}

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						// get_template_part( 'content', get_post_format() );
						get_template_part( 'content', 'small' ); //....this gets the content-small.php template part

					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->
<!-- <h1>------------this is the category.php file------------</h1> -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
