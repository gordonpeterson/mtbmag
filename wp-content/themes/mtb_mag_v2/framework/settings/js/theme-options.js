jQuery(document).ready(function($){
	$('select.styled').customSelect();
	
	$(".tab_block").hide();
	$(".tabs ul li:first").addClass("active").show();	
	$(".tab_block:first").show();
	
	$(".tabs ul li").click(function() {
		$(".tabs ul li").removeClass("active");
		$(this).addClass("active");
		$(".tab_block").hide();
		var activeTab = $(this).find("a").attr("href");
		$(activeTab).fadeIn(200);
		return false;
	});	
			
	$('#wt_bg_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_bg_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_bg_color').val('#'+hex);
		}
	});
		
	$('#wt_text_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_text_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_text_color').val('#'+hex);
		}
	});
											
	$('#wt_links_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_links_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_links_color').val('#'+hex);
		}
	});
	
	$('#wt_links_hover_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_links_hover_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_links_hover_color').val('#'+hex);
		}
	});	
	
	$('#wt_primary_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_primary_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_primary_color').val('#'+hex);
		}
	});
	
	$('#wt_second_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_second_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_second_color').val('#'+hex);
		}
	});
	
	
			
	$("#wt_custom_sidebar_add_button").click(function() {
		var custom_sidebar_name = $('#wt_custom_sidebar_name').val();
		if( custom_sidebar_name.length > 0){
			$('#wt_options_sidebar_list').append('<li><div class="sidebar-block">'+custom_sidebar_name+' <input id="tie_sidebars" name="wt_options[wt_custom_sidebars][]" type="hidden" value="'+custom_sidebar_name+'" /><a class="sidebar-remove"></a></div></li>');
			$('#custom-sidebars select').append('<option value="'+custom_sidebar_name+'">'+custom_sidebar_name+'</option>');
		}
		$('#wt_custom_sidebar_name').val('');

	});	
	
	$(".sidebar-remove").live("click" , function() {
		var option = $(this).parent().find('input').val();
		$(this).parent().parent().addClass('removered').fadeOut(function() {
			$(this).remove();
			$('#custom-sidebars select').find('option[value="'+option+'"]').remove();

		});
	});		
	

	$("#sidebar-position-options input:checked").parent().addClass("selected");
	$("#sidebar-position-options .checkbox-select").click(
		function(event) {
			event.preventDefault();
			$("#sidebar-position-options li").removeClass("selected");
			$(this).parent().addClass("selected");
			$(this).parent().find(":radio").attr("checked","checked");			 
		}
	);
	
	if ($('#wt_meta_post_show_review').is(':checked')) {		
		$('#wt-post-meta-review-options').css('display', 'block');
	}

	$('#wt_meta_post_show_review').click(function(){
		if (this.checked) {
		
			$('#wt-post-meta-review-options').slideDown();
		} else {
			$('#wt-post-meta-review-options').slideUp();
		}
	});	

	$('#wt_cat_color_selector').ColorPicker({								
		onChange: function (hsb, hex, rgb) {
				$('#wt_cat_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_cat_meta_color').val('#'+hex);
		}
	});
	
	$('#wt_meta_post_bg_selector').ColorPicker({								
		onChange: function (hsb, hex, rgb) {
				$('#wt_meta_post_bg_selector div').css('backgroundColor', '#' + hex);
				$('#wt_meta_post_bg_color').val('#'+hex);
		}
	});
	
	$('#wt_menu_item1_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_menu_item1_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_menu_item1_color').val('#'+hex);
		}
	});
	
	$('#wt_menu_item2_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_menu_item2_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_menu_item2_color').val('#'+hex);
		}
	});
	
	$('#wt_menu_item3_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_menu_item3_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_menu_item3_color').val('#'+hex);
		}
	});
	
	$('#wt_menu_item4_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_menu_item4_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_menu_item4_color').val('#'+hex);
		}
	});
	
	$('#wt_menu_item5_color_selector').ColorPicker({													
		onChange: function (hsb, hex, rgb) {
				$('#wt_menu_item5_color_selector div').css('backgroundColor', '#' + hex);
				$('#wt_menu_item5_color').val('#'+hex);
		}
	});
				
});

jQuery(document).ready(function ($) {
	setTimeout(function () {
		$(".fade").fadeOut("slow", function () {
			$(".fade").remove();
		});
	}, 2000);
});

jQuery(document).ready(function ($) {
	$("#wt-bg-default-pattern input:checked").parent().addClass("selected");
	$("#wt-bg-default-pattern .checkbox-select").click(
		function(event) {
			event.preventDefault();
			$("#wt-bg-default-pattern li").removeClass("selected");
			$(this).parent().addClass("selected");
			$(this).parent().find(":radio").attr("checked","checked");			 
		}
	);		
});