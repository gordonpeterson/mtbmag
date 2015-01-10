<?php get_header(); ?>
<!-- MTB-Background-Pages -->
<script type='text/javascript'>
GA_googleFillSlot("MTB-Background-Pages");
</script>

    <div id="content" class="col-full">
		<div id="main" class="col-left">

	            
            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>
                                                                        
                <div class="box">
                    <div class="post">
    
                        <h1 class="title"><?php the_title(); ?></h1>
                        
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                                                
						<div class="fix"></div>
                    </div><!-- /.post -->
                                        
                    <?php edit_post_link( __('{ Edit }', 'woothemes'), '<span class="edit-post-link">', '</span>' ); ?>
                </div><!-- /.box -->
                
          
                                                    
			<?php endwhile; else: ?>
                <div class="box">
                    <div class="post">
                        <p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
                    </div><!-- /.post -->            
				</div>                     
            <?php endif; ?>  
        
		</div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>