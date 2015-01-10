<?php
/*
Template: tech corner
*/
?>


<?php get_header(); ?>

<!-- MTB-Background-Techcorner -->
<script type='text/javascript'>
GA_googleFillSlot("MTB-Background-Techcorner");
</script>
     
    <div id="content-techcorner" class="col-full" >



		<div id="main" class="techcorner" >


            
 


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



			                        <div class="entry">
			                        	<?php wp_link_pages(); ?>
												<?php
												if (! empty($_COOKIE['mtb_forumuserid']) && ! empty($_COOKIE['mtb_forumpassword'])){ ?>

												<?php
												} else {
												?>
												<div style="display:block;float:left;margin: 0px 5px 5px 0px;">

													   <!-- MTB-home-Multiplayer -->
													                                                            <script type='text/javascript'>
													                                                            GA_googleFillSlot("MTB-home-Multiplayer");
													                                                            </script>
												</div>
												<?php
												}
												?>
										<?php the_content(); ?>
										<div class="fr"><?php wp_link_pages(); ?></div>					
			                        </div>

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
		

			<?php include "footer-techcorner.php"; ?>
					
