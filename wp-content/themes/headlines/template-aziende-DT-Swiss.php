<?php
/*
Template Name: Sezione DT Swiss
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
				<tr><td style="text-aligncenter"><img src="http://www.mtb-forum.it/images/DTswiss.jpg" <br><br></br>
				Via Manzoni 25/3</br>
				20089 Rozzano (MI)</br>
				+39 348 6665262 </br>
				service.it @ dtswiss.com</br>
				<a href="http://www.dtswiss.com/">DT Swiss</a><br><br> </td></tr>
		
			</table>
		  </td>
		 </tr>
		</table>
		<br/>
		
		  	<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
			 <tr>
			  <td style="width:22px">&nbsp;</td>
			  <td>
				<table style="" border="0" cellpadding="0" cellspacing="0" class="widget">
					<tr><td style="text-aligncenter"><img src="http://www.mtb-forum.it/images/dt-swiss.gif"  </td></tr>

				</table>
			  </td>
			 </tr>
			</table>
			<br/>
	

    </div><!-- /#content -->
		
<?php get_footer(); ?>
