<?php
/*
Template Name: Sezione 4Guimp
*/
?>
<?php get_header(); ?>
       
    <div id="content" class="col-full">
		<div id="main" class="col-left">
    	            
            <div class="box">
                <div class="post">
                    
                    <div class="entry">
                    
                        <h2><?php the_title(); ?></h2>                  
                    
                     
                                                                          
                     	<?php
						  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
						  if ($children) { ?>
						  <ul>
						  <?php echo $children; ?>
						  </ul>
						  <?php } ?>											  
                                                                          
                        <?php the_content(); ?>	  
                                                                          
                      											  
                                                                          
                    
                                                                          
                  <?php edit_post_link( __('{ Edit }', 'woothemes'), '<span class="edit-post-link">', '</span>' ); ?>
    
                    </div><!-- /.entry -->
                                
                </div><!-- /.post -->                 
			</div><!-- /.box -->                
        </div><!-- /#main -->

      	<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
		 <tr>
		  <td style="width:22px">&nbsp;</td>
		  <td>
			<table style="" border="0" cellpadding="0" cellspacing="0" class="widget">
				<tr><td style="text-alignleft" ><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/59031.jpg" <br><br></br>4Guimp Srl<br>
				Via Pillea 17<br>
				16153 Genova<br>
			Tel. 0108935035<br>
				info@4guimp.com<br>
					<a href="http://www.4guimp.it">www.4guimp.it</a><br><br> </td></tr>
		
			</table>
		  </td>
		 </tr>
		</table>
		
		 	<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
			 <tr>
			  <td style="width:22px">&nbsp;</td>
			  <td>
				<table style="" border="0" cellpadding="0" cellspacing="0" class="widget">
					<tr><td style="text-aligncenter"><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/59032.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/59033.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/59029.jpg" <br></br>
						
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/59030.jpg" <br></br>
					
						 </td></tr>

				</table>
			  </td>
			 </tr>
			</table>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
