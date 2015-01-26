<?php
/**
 * Template Name: MTB-MAG 2.0 homepage template
 */
?>
<?php get_header('gordon'); ?>


<h2 class="gordon">this is the page-landing template</h2>

<!-- <link type='text/css' href='/wp-content/themes/wt_pandora/css/simplemodal.css' rel='stylesheet' media='screen' /> -->

<div class="site-content" id="primary">
	<div id="content" role="main">
	<?php 
		$blah = icl_get_home_url();
		echo "$blah";

			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', 'small' );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				// get_template_part( 'content', 'none' );
				echo "*******NO POSTS*********";

			endif;
		?>
	</div>
</div>


<?php get_footer(); ?>