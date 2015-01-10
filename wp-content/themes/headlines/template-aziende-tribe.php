<?php
/*
Template Name: Sezione Tribe
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
				<tr ><td style="text-align:left" cellpadding="15" cellspacing="15"><a href="http://www.tribedistribution.com/"><img src="http://fotoalbum.mtb-forum.it/albums/1/thumbs_800/49606.jpg"></a> <br><br>
					DISTRIBUZIONE ESCLUSIVA<br>
					<b>Transition, Kali, Funn, Blacx, Carbocage, Csixx, RRP, Strider</b><br><br>
					Tribe Distribution s.r.l<br>
					Via Cuneo,74<br>
					12084 Mondovì CN Italy<br>
					Tel: +39 0174 33 01 52<br>
					Fax:+39 0174 55 34 49 <br>
					<a href="http://www.tribedistribution.com/">tribedistribution.com</a><br> </td></tr>
		
			</table>
		  </td>
		 </tr>
		</table>
		


    </div><!-- /#content -->
		
<?php get_footer(); ?>
