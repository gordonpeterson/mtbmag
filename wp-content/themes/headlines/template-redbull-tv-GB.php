<?php
/*
Template Name Posts: Redbull TV GB
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
							 <span class="comments"><img src="<?php bloginfo('template_directory'); ?>/images/ico-comment.png" alt="" /><?php comments_popup_link(__('0 Comments', 'woothemes'), __('1 Comment', 'woothemes'), __('% Comments', 'woothemes')); ?></span>                            
		                    
		
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
						
						
						<table style="width:100%;" border="0" cellpadding="0" cellspacing="0" >
						
							<tr><td style="vertical-align:top">
								<!-- Start of Brightcove Player - UCI Fort William -->

								<div style="display:none">

								</div>

								<!--
								By use of this code snippet, I agree to the Brightcove Publisher T and C 
								found at https://accounts.brightcove.com/en/terms-and-conditions/. 
								-->

								<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>

								<object id="myExperience1626322562001" class="BrightcoveExperience">
								  <param name="bgcolor" value="#FFFFFF" />
								  <param name="width" value="640" />
								  <param name="height" value="360" />
								  <param name="playerID" value="1398061561001" />
								  <param name="playerKey" value="AQ~~,AAAApYJ7UqE~,xqr_zXk0I-zzNndy8NlHogrCb5QdyZRf" />
								  <param name="isVid" value="true" />
								  <param name="isUI" value="true" />
								  <param name="dynamicStreaming" value="true" />

								  <param name="@videoPlayer" value="1626322562001" />
								</object>

								<!-- 
								This script tag will cause the Brightcove Players defined above it to be created as soon
								as the line is read by the browser. If you wish to have the player instantiated only after
								the rest of the HTML is processed and the page load is complete, remove the line.
								-->
								<script type="text/javascript">brightcove.createExperiences();</script>

								<!-- End of Brightcove Player -->
						</br></br>
						     <div class="entry">
		                        	<?php wp_link_pages(); ?>
									<?php the_content(); ?>	
									<div class="fr"><?php wp_link_pages(); ?></div>					
		                        </div>
						</td>
						<td style="width:300px; vertical-align:top; padding:0px 0px 0px 5px">
							<span style="font-weight:bold; font-variant:small-caps">Facebook chat</span>
							<!-- FACEBOOK COMMENTS START -->
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1&appId=189864777739733";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>								
								<div class="fb-live-stream" data-event-app-id="116905355012808" data-width="300" data-via-url="http://www.mtb-forum.it/live-dh-worldcup-fort-william/" data-xid="GB" data-height="800" data-always-post-to-friends="false"></div>
								<!-- FACEBOOK COMMENTS END -->
						</td></tr>
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