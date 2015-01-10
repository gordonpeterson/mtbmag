<?php
/*
Template Name Posts: Redbull Rampage 12 win
*/
?>

<?php get_header(); ?>
      
<div id="content" class="col-full">
		<div id="main" class="fullwidth">
		
		           
            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>
            <?php $GLOBALS['saved_author'] = $authordata; // Save author data for sidebar widget ?>

                <div class="box">
                    <div class="post">
    
						<?php 
						// Show image or ad content
						if ( get_option('woo_image_single') == "true" && !woo_get_embed('embed','590','420') && get_option('woo_ad_content') <> "true" ) 
							woo_get_image('image',get_option('woo_single_width'),get_option('woo_single_height'),'thumbnail alignright'); 
                        elseif ( !woo_get_embed('embed','590','420') && get_option('woo_ad_content') == "true" ) 
							include ( TEMPLATEPATH . '/ads/content_ad.php' );											
						?>
                           
                        <h1 class="title"><?php the_title(); ?></h1>
                        
                        <p class="post-meta">
								<img src="<?php bloginfo('template_directory'); ?>/images/ico-time.png" alt="" /><?php the_time(get_option('date_format')); ?>  di <a href="/community/forum/member.php?u=<?php echo the_author_ID(); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ) ?></a>
								 	 <span class="comments"><img src="<?php bloginfo('template_directory'); ?>/images/ico-comment.png" alt="" />
									 <a href="<?php comments_link(); ?>"><?php 
									 	$vbridge_views = Comment_Handler($post->ID); 
									 	echo count($vbridge_views[replies]);
									 	?>
									 	<?php _e('Comments', 'woothemes'); ?></a>
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
		                    <?php edit_post_link( __('{ Edit }', 'woothemes'), '<span class="edit-post-link">', '</span>' ); ?>
                        </p>

										
												
						<?php echo woo_get_embed('embed','590','420'); ?>
						<?php if ( woo_get_embed('embed','590','420') && get_option('woo_ad_content') == "true" ) include ( TEMPLATEPATH . '/ads/content_ad.php' ); ?>		
						
						
						<table style="width:100%;" border="0" cellpadding="0" cellspacing="0" align="center" ><tr><td style="vertical-align:top">
							<div style="display:none"></div><script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script><script type="text/javascript" src="http://admin.brightcove.com/js/APIModules_all.js"></script><object id="myExperience1154759062001" class="BrightcoveExperience"><param name="debuggerID" value="" /><param name="playerKey" value="AQ~~,AAAA1vDIGdk~,NR1bCsD6UB4vvTuHvJsbvNWSFKTbLqyP" /><param name="dynamicStreaming" value="true" /><param name="playerID" value="1154759062001" /><param name="purl" value="http://www.redbullusa.com/cs/Satellite/en_US/Video/rampag-2012-winning-run-021243267308520" /><param name="flashID" value="myExperience1243267308520" /><param name="isVid" value="true" /><param name="startTime" value="1349681379307" /><param name="@videoPlayer" value="ref:1243267308520" /><param name="linkBaseURL" value="http://www.redbullusa.com/cs/Satellite/en_US/Video/rampag-2012-winning-run-021243267308520" /><param name="height" value="349" /><param name="autoStart" value="true" /><param name="isUI" value="true" /><param name="labels" value="http://www.redbull.com/cs/RedBull/brightcove/labels/en_US_labels.xml" /><param name="bgcolor" value="#000000" /><param name="secureConnections" value="true" /><param name="isRTL" value="false" /><param name="width" value="620" /></object><script type="text/javascript">brightcove.createExperiences();</script>
							</br></br>
	
	
						</br></br>
						     <div class="entry">
		                        	<?php wp_link_pages(); ?>
									<?php the_content(); ?>	
									<div class="fr"><?php wp_link_pages(); ?></div>					
		                        </div>
						</td>
						</tr>
						</table>
						</br></br>
		
							
															
           
						
                        <div class="fix"></div>

                        <?php if ( get_option('woo_social') == "true" ) { ?>
                        <div id="share">
							<div class="banner"><?php _e('Share', 'woothemes'); ?></div>
                            <?php woo_social(); ?>
 
                        </div>
                        <?php } ?>

                                              
        <g:plusone size="small"></g:plusone>                                           
                    </div><!-- /.post -->
                    
                    <div class="post-bottom">
                        <div class="fl"><span class="cat"><?php the_category(', ') ?></span></div>
                        <div class="fr"><?php the_tags('<span class="tags">', ', ', '</span>'); ?></div> 
                        <div class="fix"></div>                       
                    </div>
                    
                </div><!-- /.box -->
                
				<?php
				if ( is_single() && get_option('woo_disable_post_author') <> "true" ) {
				global $post;
				$author_id=$post->post_author;
				?>
				<div id="post-author">
					<div class="profile-image"><?php echo get_avatar( $author_id, '80' ); ?></div>
					<div class="profile-content">
						<h4><?php printf( esc_attr__( 'About %s', 'woothemes' ), get_the_author_meta( 'display_name', $author_id ) ); ?></h4>
				<?php echo get_the_author_meta( 'description', $author_id ) ?>
				<?php if (is_singular()) : ?>
						<div class="profile-link">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID', $author_id ) ); ?>">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'woothemes' ), get_the_author_meta( 'display_name', $author_id ) ); ?>
							</a>
						</div><!-- #profile-link	-->
				<?php endif; ?>
					</div>
				<div class="fix"></div>
				</div><!-- /#post-author -->
				<?php 
				}
				?>

                <div class="more_entries">
					<div class="fl"><?php previous_post_link('%link') ?></div>
					<div class="fr"><?php next_post_link('%link') ?></div>
                    <div class="fix"></div>                       
				</div>               
                
                <?php if ( 'open' == $post->comment_status ) :  ?>
	                <?php comments_template(); ?>
                <?php endif; ?>
                                                    
			<?php endwhile; else: ?>
                <div class="box">
                    <div class="post">
                        <p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
                    </div><!-- /.post -->            
				</div>                     
           	<?php endif; ?>  
        
		</div><!-- /#main -->
    </div><!-- /#content -->
		
<?php get_footer(); ?>