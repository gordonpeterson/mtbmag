<?php get_header(); ?>
<!-- MTB-Background-Archives -->
<script type='text/javascript'>
GA_googleFillSlot("MTB-Background-Archives");
</script>

       
    <div id="content" class="col-full">
		<div id="main" class="col-left">
            
		<?php if (have_posts()) : $count = 0; ?>
        
            <?php if (is_category()) { ?>
            <span class="archive_header"><span class="fl cat"><?php _e('Archive', 'woothemes'); ?> | <?php echo single_cat_title(); ?></span> <span class="fr catrss"><?php $cat_obj = $wp_query->get_queried_object(); $cat_id = $cat_obj->cat_ID; echo '<a href="'; get_category_rss_link(true, $cat, ''); ?>"><?php _e('RSS feed for this section', 'woothemes'); ?></a></span></span>        
        
            <?php } elseif (is_day()) { ?>
            <span class="archive_header"><?php _e('Archive', 'woothemes'); ?> | <?php the_time(get_option('date_format')); ?></span>

            <?php } elseif (is_month()) { ?>
            <span class="archive_header"><?php _e('Archive', 'woothemes'); ?> | <?php the_time('F, Y'); ?></span>

            <?php } elseif (is_year()) { ?>
            <span class="archive_header"><?php _e('Archive', 'woothemes'); ?> | <?php the_time('Y'); ?></span>

			<?php } elseif (is_author()) { ?>
            <span class="archive_header"><?php _e('Archive by Author', 'woothemes'); ?></span>

            <?php } elseif (is_tag()) { ?>
            <span class="archive_header"><?php _e('Tag Archives:', 'woothemes'); ?> <?php echo single_tag_title('', true); ?></span>
            
            <?php } ?>
            
            <div class="fix"></div>
        
        <?php while (have_posts()) : the_post(); $count++; ?>
                                                                    
            <div class="box">
                    <div class="post">
                        
						<?php 
						if (!woo_get_embed('embed','590','420')) 
							woo_get_image('image',$GLOBALS['thumb_width'],$GLOBALS['thumb_height'],'thumbnail '.$GLOBALS['align']); 
						else
							echo woo_get_embed('embed','590','420');
						?> 
                        <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-meta">
							<img src="<?php bloginfo('template_directory'); ?>/images/ico-time.png" alt="" /><?php the_time(get_option('date_format')); ?>
                            di <a href="/community/forum/member.php?u=<?php echo the_author_ID(); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ) ?></a>
							<span class="comments"><img src="<?php bloginfo('template_directory'); ?>/images/ico-comment.png" alt="" />
						     <a href="<?php comments_link(); ?>"><?php 
							 	$vbridge_views = Comment_Handler($post->ID); 
							 	echo count($vbridge_views[replies]);
							 	?>
							 	<?php _e('Comments', 'woothemes'); ?></a>
						     </span>
</span>
<img src="<?php bloginfo('template_directory'); ?>/images/views.png" alt="" / valign="bottom"><?php		                    
									                    $vbridge_views = Comment_Handler($post->ID);
									                    if ($vbridge_views[id] > 0) {
															$db_vb = new mysqli('10.0.0.2', 'wusr0001', 'ayowi133', 'db_forum');
															$result = $db_vb->query("SELECT `views` FROM `vb3_thread` WHERE `threadid` = $vbridge_views[id];");
															$row = $result->fetch_assoc();
															$db_vb->close();
															echo 'Views: '.$row["views"];
														}
														?> in <?php the_category(', ') ?>
                        </p>
                        <div class="entry">
                            
                            <?php if ( get_option('woo_archive_content') == "true" ) { ?>
							<?php the_content(__('Read more...', 'woothemes')); ?>
                            <?php } else { ?>
							<?php the_excerpt(); ?>
                            <?php } ?>
                            
                        </div>
                        <div class="fix"></div>
                    </div><!-- /.post -->
                                                        
                    <div class="post-bottom">
                        <div class="fl"><span class="cat"><?php the_category(', ') ?></span></div>
                        <div class="fr"><?php the_tags('<span class="tags">', ', ', '</span>'); ?></div> 
                        <div class="fix"></div>                       
                    </div>
            </div>        
                                                    
            <?php endwhile; else: ?>
            <div class="box">
                <div class="post">
                    <p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
                </div><!-- /.post -->
            </div>        
            <?php endif; ?>  

            <div class="more_entries">
                <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>
                <div class="fl"><?php previous_posts_link(__('Newer Entries', 'woothemes')) ?></div>
                <div class="fr"><?php next_posts_link(__('Older Entries', 'woothemes')) ?></div>
                <br class="fix" />
                <?php } ?> 
            </div>		
                
		</div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>