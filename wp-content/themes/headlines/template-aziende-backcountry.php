<?php
/*
Template Name: Sezione Backcountry
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
				<tr><td style="text-aligncenter"><img src="http://www.mtb-forum.it/images/backcountry-it.jpg" <br><br></br>
				
				Via Amedeo d'Aosta 6<br>
				20129 Milano<br>
				Tel. +39 022043031<br>
				info@backcountry.it<br>
					<a href="http://www.backcountry.it/">Backcountry.it</a><br><br> </td></tr>
		
			</table>
		  </td>
		 </tr>
		</table>
		
		 	<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
			 <tr>
			  <td style="width:22px">&nbsp;</td>
			  <td>
				<table style="" border="0" cellpadding="0" cellspacing="0" class="widget">
					<tr><td style="text-aligncenter">
					<img src="http://www.mtb-forum.it/images/backcountry/1.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/2.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/3.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/4.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/5.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/6.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/7.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/8.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/9.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/10.jpg"><br><br>
					<img src="http://www.mtb-forum.it/images/backcountry/11.jpg"><br><br>
						 </td></tr>

				</table>
			  </td>
			 </tr>
			</table>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
