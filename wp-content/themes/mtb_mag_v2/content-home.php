<?php
/**
 * Template Name: MTB-MAG 2.0 Article Template
 */
?>

<article id="post-<?php the_ID(); ?>" class="articoli-home">
	
	<?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
	<div class="articolo-picture" style="background:transparent url(<?php echo $featuredImage[0]; ?>) center center no-repeat; background-size:cover;">
		<div class="articolo-cat"><?php the_category(' | '); ?></div>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="/wp-content/themes/mtb_mag_v2/blank.png" height="200" width="300" /></a>
	</div>

	<div class="post-info post_<?php the_ID(); ?> articolo-anteprima">
		<div class="articolo-autore"><?php the_author_posts_link(); ?></div>
		<header class="articolo-titolo"><h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1></header>
		<div class="articolo-anteprima-txt"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_excerpt(); ?></a></div>
	</div> <!-- .post-info -->
</article><!-- #post-## -->
