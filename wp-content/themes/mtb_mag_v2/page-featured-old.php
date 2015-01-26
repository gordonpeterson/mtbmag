<?php
/**
 * Template Name: Featured Page
 * Description: A Page Template to display featured page content
 *
 * @package  WellThemes
 * @file     page-featured.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<?php get_header('gordon'); ?>


<h2 class="gordon">this is the page-featured template</h2>

<!-- <link type='text/css' href='/wp-content/themes/wt_pandora/css/simplemodal.css' rel='stylesheet' media='screen' /> -->

<div class="site-content" id="primary">
	<div id="content" role="main">
		<?php while (have_posts()) : the_post(); ?>	
				<?php get_template_part('content', 'small' ); ?>
  			<a href="#video-<?php the_ID(); ?>" title="<?php the_title(); ?>">
  				<?php the_title(); ?>
  			</a>
  	<?php endwhile; ?>
	</div>
</div>


<?php get_footer(); ?>