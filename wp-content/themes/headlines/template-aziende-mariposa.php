<?php
/*
Template Name: Sezione effetto mariposa
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
				<tr><td style="text-alignleft"><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49978.jpg" <br><br></br>
					Effetto Mariposa di De Gioannini Alberto</br>
					Via F.lli Carando 62</br>
					12042 Bra (CN), Italia</br></br>

					Tel.:    +39 01721795149</br>
					Fax:    +39 0172523112</br>
					info@effettomariposa.com</br>
					<a href="http://www.youtube.com/effettom">youtube/effettom</a></br>
					 <a href="http://www.facebook.com/effettomariposa">facebook/effettomariposa</a></br>
					
					<a href="http://www.effettomariposa.it">www.effettomariposa.it</a><br><br> </td></tr>
		
			</table>
		  </td>
		 </tr>
		</table>
		
		 

    </div><!-- /#content -->
		
<?php get_footer(); ?>
