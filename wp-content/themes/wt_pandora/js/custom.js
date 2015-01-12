jQuery(document).ready(function($) {
	/* $('.menu-section').waypoint('sticky'); */
	
	var height = $('.menu-section').outerHeight();
    $(window).scroll(function() {
		if($(this).scrollTop() > height)
		{
			$('.menu-section').addClass('sticky-top');;
			$('body').css('padding-bottom',height+'px');
		}
		else if($(this).scrollTop() <= height)
		{
			$('.menu-section').removeClass('sticky-top');
			$('body').css('padding-bottom','0');
		}
    });
    $(window).scroll();
	
	
	$(".form-submit input#submit").before('<div class="submit-icon main-color-bg"><i class="icon-location-arrow"></i></div>');

	$(".tabs-title-container .tab-titles li").click(function() {
		$(".tab-titles li").removeClass('active');
		$(this).addClass("active");
		$(".tabs-content-container .tab-content").hide();
		var selected_tab = $(this).find("a").attr("href");
		$(selected_tab).show();
		return false;
	});
	
		
	$('.top-menu .menu').mobileMenu({
			defaultText: 'Navigate to...',					//default text for select menu
			className: 'select-menu',						//class name
			subMenuDash: '&nbsp;&nbsp;&nbsp;&ndash;'		//submenu separator
	});
	
	$('#main-menu .menu').mobileMenu({
			defaultText: 'Navigate to...',					//default text for select menu
			className: 'select-menu',						//class name
			subMenuDash: '&nbsp;&nbsp;&nbsp;&ndash;'		//submenu separator
	});
	
	$("#main-menu").show();	
	$('#main-menu ul.menu').superfish({				// main menu settings
		hoverClass:  'over', 								// the class applied to hovered list items 
		delay:       100,                            		// one second delay on mouseout 
		animation:   {opacity:'show',height:'show'},  		// fade-in and slide-down animation 
		speed:       150,                          			// faster animation speed 
		autoArrows:  false,                           		// disable generation of arrow mark-up 
		dropShadows: true,                            		// disable drop shadows 
		delay       : 0		
	});	
	
	$('.tabs-title-container .comments a').click(function(){
		 $('html, body').animate({
			scrollTop: $(this.hash).offset().top
		}, 800);
		return false;
	});
    
	$(".widget_video iframe").each(function(){
      var ifr_source = $(this).attr('src');
      var wmode = "wmode=transparent";
      if(ifr_source.indexOf('?') != -1) $(this).attr('src',ifr_source+'&'+wmode);
      else $(this).attr('src',ifr_source+'?'+wmode);
	});	
	
});