<?php
/*
Template Name: Sezione Rose Bikes
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
				<tr><td style="text-alignleft"><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49601.jpg" <br><br></br>Rose Italia
								Service Center<br>
				via al monteggiolo 6i<br>
				23823 Colico (LC)<br>
				+393383305116<br>
				sergio@rosebikes.it<br>
					<a href="http://www.rosebikes.it/">Rose Bikes Italia</a><br><br> </td></tr>
		
			</table>
		  </td>
		 </tr>
		</table>
		
		 	<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
			 <tr>
			  <td style="width:22px">&nbsp;</td>
			  <td>
				<table style="" border="0" cellpadding="0" cellspacing="0" class="widget">
					<tr><td style="text-aligncenter"><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49616.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49618.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49617.jpg" <br></br>
						
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49623.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49624.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49625.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49626.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49627.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49628.jpg" <br></br>
						 </td></tr>

				</table>
			  </td>
			 </tr>
			</table>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
