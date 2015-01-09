    <!-- Footer Widget Area Starts -->
	<div id="footer-widgets">
		<div class="container col-full">
            <div class="block">
                <?php woo_sidebar('footer-1'); ?>		           
            </div>
            <div class="block">
                <?php woo_sidebar('footer-2'); ?>		           
            </div>
            <div class="block last">
                <?php woo_sidebar('footer-3'); ?>		           
            </div>
   			<div class="fix"></div>
		</div>    
    </div>
    <!-- Footer Widget Area Ends -->

	<div id="footer">
		<div class="col-full">
            <div id="copyright" class="col-left">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo(); ?>. <?php _e('All Rights Reserved.', 'woothemes') ?></p>
            </div>
            
            <div id="credit" class="col-right">
                    <p> <a href="http://www.mtb-forum.it/community/forum/sendmessage.php">Contatto</a> | <a href="http://www.mtb-forum.it/legali">Legali</a> | <a href="http://www.mtb-forum.it/pubblicita/">Pubblicità</a> | <a href="javascript:dCookie();">Mobile </a> </p>
            </div>
		</div>
	</div>
	<!-- footer Ends -->
	
</div><!-- /#container -->

<?php wp_footer(); ?>

<?php if ( get_option('woo_twitter') && get_option('woo_ad_top') <> "true") { ?>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo get_option('woo_twitter'); ?>.json?callback=twitterCallback2&amp;count=1"></script>
<?php } ?>

<script type="text/javascript" src="http://s.skimresources.com/js/22522X810285.skimlinks.js"></script>





</body>
</html>