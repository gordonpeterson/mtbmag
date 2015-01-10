<?php
/*
Template Name: Sezione Alpi Bike Resort
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
				<tr><td style="text-alignleft"><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/59023.jpg" <br><br></br>
					Turismo Torino e Provincia - Convention Visitors Bureau</br>
					Pinerolo</br>
					Viale Giolitti, 7 / 9</br></br>

					Tel. +39.0121.794003</br>
					
					info@alpibikeresort.com</br>
				
					
					<a href="http://http://www.alpibikeresort.com/">www.alpibikeresort.com</a><br><br> </td></tr>
		
			</table>
		  </td>
		 </tr>
		</table>
		
		 

    </div><!-- /#content -->
		
<?php get_footer(); ?>
