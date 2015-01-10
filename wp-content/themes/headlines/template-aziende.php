<?php
/*
Template Name: Sezioni aziendali
*/
?>
<?php get_header(); ?>
<!-- MTB-Background-Pages -->
<script type='text/javascript'>
GA_googleFillSlot("MTB-Background-Pages");
</script>
       
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
                                                                          
                      											  
                                                                          
                    
                                                                          
                  
    
                    </div><!-- /.entry -->
                                
                </div><!-- /.post -->                 
			</div><!-- /.box -->                
        </div><!-- /#main -->

		<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
		 <tr>
		  <td style="width:22px">&nbsp;</td>
		  <td style="background-color:#FEFEFE; padding-top:12px; padding-bottom:12px"><center>
		<form action="http://www.mtb-forum.it/risultati-ricerca/" id="cse-search-box">
		  <div>
		    <input type="hidden" name="cx" value="partner-pub-4921136079852098:1593116183" />
		    <input type="hidden" name="cof" value="FORID:10" />
		    <input type="hidden" name="ie" value="UTF-8" />
		    <input type="text" name="q" size="45" />
		    <input type="submit" name="sa" value="Cerca" />
		  </div>
		</form>

		<script type="text/javascript" src="http://www.google.it/coop/cse/brand?form=cse-search-box&amp;lang=it"></script>



		</center></td>
		</tr>
		</table></br>

		<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
		 <tr>
		  <td style="width:22px">&nbsp;</td>
		  <td style="background-color:#FEFEFE; padding-top:12px; padding-bottom:12px"><center>
		 <script type='text/javascript'>
		GA_googleFillSlot("MTB-home");
		</script>
		</center></td>
		</tr>
		</table>
		</br>

	<table style="width:360px;" border="0" cellpadding="0" cellspacing="0" >
 <tr>
  <td style="width:22px">&nbsp;</td>
  <td style="background-color:#FEFEFE; padding-top:12px; padding-bottom:12px"><center>
<!-- MTB-home-Multiplayer -->
<script type='text/javascript'>
GA_googleFillSlot("MTB-home-Multiplayer");
</script>
</center></td>
</tr>
</table>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
