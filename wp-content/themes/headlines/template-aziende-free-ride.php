<?php
/*
Template Name: Sezione Free-ride
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
				<tr><td style="text-aligncenter"><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53648.jpg" <br><br></br>Free-Ride<br>
				Via Chiarellotto, 26<br>
				46027 San Benedetto Po (MN)<br>
				+ 39 (0) 376 615599 <br>
				info@free-ride.it<br>
					<a href="http://www.free-ride.it">www.free-ride.it</a><br><br> </td></tr>
		
			</table>
		  </td>
		 </tr>
		</table>
		
		 	<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
			 <tr>
			  <td style="width:22px">&nbsp;</td>
			  <td>
				<table style="" border="0" cellpadding="0" cellspacing="0" class="widget">
					<tr><td style="text-aligncenter"><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53642.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53646.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53639.jpg" <br></br>
						
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53640.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53641.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53643.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53644.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53645.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53647.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53649.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53650.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53651.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53652.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53653.jpg" <br></br>
						<img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/53654.jpg" <br></br>
						 </td></tr>

				</table>
			  </td>
			 </tr>
			</table>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
