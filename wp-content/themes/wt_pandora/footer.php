<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package  WellThemes
 * @file     footer.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
	</section><!-- /main -->

	<footer id="footer">
		
		<div class="footer-widgets">
			<div class="inner-wrap">
			
				<div class="col col-255">			
					<?php 
						if ( ! dynamic_sidebar( 'footer-1' ) ) : 			
						endif;
					?>
				</div>
				
				<div class="col col-255">	
					<?php 
						if ( ! dynamic_sidebar( 'footer-2' ) ) : 			
						endif;
					?>
				</div>
				
				<div class="col col-255">	
					<?php 
						if ( ! dynamic_sidebar( 'footer-3' ) ) : 			
						endif;
					?>
				</div>
				
				<div class="col col-255 col-last">
					<?php 
						if ( ! dynamic_sidebar( 'footer-4' ) ) : 			
						endif;					
					?>
				</div>
			
			</div><!-- /inner-wrap -->			
			
		</div><!-- /footer-widgets -->
		
		<div class="footer-info">
			<div class="inner-wrap">
				<?php if (wt_get_option( 'wt_footer_text_left' )){ ?> 
					<div class="footer-left">
						<?php echo wt_get_option( 'wt_footer_text_left' ); ?>			
					</div>
				<?php } ?>
				
				
			</div><!-- /inner-wrap -->			
		</div> <!--/footer-info -->
		
	</footer><!-- /footer -->
</div><!-- /container -->
<?php wp_footer(); ?>

</body>
</html>