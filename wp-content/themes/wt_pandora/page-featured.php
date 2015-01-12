<?php
/**
 * Template Name: Featured Page
 * Description: A Page Template to display featured page content
 *
 * @package  WellThemes
 * @file     page-featured.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
?>
<?php get_header(); ?>

<link type='text/css' href='/wp-content/themes/wt_pandora/css/simplemodal.css' rel='stylesheet' media='screen' />



<div id="content" class="featured-page">
	<?php
	
		
		if ($paged < 2 ){
		
			
			//Tabs section
			$show_tabs = get_post_meta($post->ID, 'wt_meta_post_show_feat_tabs', true);		
			
			if ($show_tabs == 1) {
				get_template_part( 'includes/feat-tabs' );				
			}
			
			$post_banner1 = get_post_meta($post->ID, 'wt_meta_post_banner1', true);	
			if (!empty($post_banner1)) { ?>
					
				<div class="entry-ad section">
					<div class="ad-inner-wrap">
						<?php echo $post_banner1; ?>
					</div>			
				</div>
					
			<?php }
			
			//Featured post section
			$show_feat_post = get_post_meta($post->ID, 'wt_meta_post_show_feat_post', true);
			
			if ($show_feat_post == 1) {
				get_template_part( 'includes/feat-post' );				
			}
			
			//Single categories section
			$show_single_cats = get_post_meta($post->ID, 'wt_meta_post_show_single_cats', true);
			
			if ($show_single_cats == 1) {
				get_template_part( 'includes/single-cats' );				
			}
			
			//Carousel section
			$show_carousel = get_post_meta($post->ID, 'wt_meta_post_show_carousel', true);
			
			if ($show_carousel == 1) {
				get_template_part( 'includes/feat-carousel' );				
			}
			
			$post_banner2 = get_post_meta($post->ID, 'wt_meta_post_banner2', true);	
			
			if (!empty($post_banner2)) { ?>					
				<div class="entry-ad section">
					<div class="ad-inner-wrap">
						<?php echo $post_banner2; ?>
					</div>			
				</div>					
			<?php }			
		}
		
		//Post list
		$show_postlist = get_post_meta($post->ID, 'wt_meta_post_show_postlist', true);
		
		if ($show_postlist == 1) {
			get_template_part( 'includes/feat-postlist' );				
		}
		
	?>
	
</div>

<?php get_sidebar(); ?>

<div id="language-chooser">
    <h2>CHOOSE YOUR LANGUAGE</h2>
    <ul align="center">
        <li><a class="iclflag modal-chooser" alt="it"><img src="http://www.mtb-mag.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/it-black.jpg" alt="it" title="Italiano"></a></li>
        <li><a class="iclflag modal-chooser" alt="en"><img src="http://www.mtb-mag.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/us-black.jpg" alt="en" title="English"></a></li>
    </ul>
</div>

<script type="text/javascript" src="/wp-content/themes/wt_pandora/js/jquery.simplemodal.js"></script>
<script type="text/javascript" src="/wp-content/themes/wt_pandora/js/jquery.cookie-1.4.1.min.js"></script>
<script>
    jQuery(document).ready(function(){
        var baseurl = 'http://www.mtb-mag.com/'; // test
//         var baseurl = 'http://www.mtb-mag.com/'; // produzione
        var cookiename = 'chosenlanguage';
        jQuery('.iclflag').click(function() {
            var lang = jQuery(this).attr('alt');
            jQuery.cookie(cookiename, lang, { expires: 365, path: '/' });
            // solo se la iclflag era dentro il modal chooser, chiudo il modal e reindirizzo
            // altrimenti hanno cliccato le bandierine in alto e ci pensa da solo ad andare sulla pagina giusta
            if (jQuery(this).hasClass('modal-chooser')) {
                jQuery.modal.close();
                var url = baseurl;
                if (lang != 'it') {
                    url += lang;
                }
                window.location.replace(url);
            }
        });
        if (!jQuery.cookie(cookiename)) {
            setTimeout(function() {
                jQuery('#language-chooser').modal();
            }, 500);
        } else if (jQuery.cookie(cookiename) === 'en' && window.location.pathname === '/') {
            window.location.replace(baseurl + 'en');
        } else if (jQuery.cookie(cookiename) === 'it' && window.location.pathname === '/en/') {
            window.location.replace(baseurl);
        }
    });               
</script>

<?php get_footer(); ?>