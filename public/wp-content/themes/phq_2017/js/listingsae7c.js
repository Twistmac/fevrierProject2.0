//default
jQuery(function() {

	//page: search results
	if(jQuery('#page.search_results, #page.near_me').length) {

		//set body class
		if(jQuery('#map-mode').length) {
			var viewport = document.body.clientWidth;
			if(viewport>=1250) jQuery('body').addClass('map-mode-active');
			else jQuery('body').addClass('thumbnails-mode-active');
		}

		//functions call
		jQuery(window).on('load resize',function(){
			if(jQuery('#map-mode').length) {
				properties_height('#map-mode');
				zoogooglemaps_resize();
			} else {
				properties_height('#thumbnails-mode');
			}
			listing_slide_width();
			load_listing_image(jQuery(window).height());
		});

		//set thumbnails as default view on < 1152
		jQuery(window).on('load',function(){
			var viewport = document.body.clientWidth;
			if(viewport<=1250) {
				jQuery('.toolbar a.item[data-panel="thumbnails-mode"]').click();
			}
			jQuery('body').addClass('listings-loaded');
		});

		jQuery(window).on('resize',function(){
			properties_height('#thumbnails-mode');
		});

	}

	//page: favourite, office
	if(jQuery('#page.page-favourite-property').length || jQuery('#page.page-office-detail').length) {
		jQuery(window).on('load resize',function(){
			var element_properties = jQuery('#thumbnails-mode .properties');
			jQuery('body').addClass('thumbnails-mode-active overflowed');
			load_listing_image(element_properties.offset().top + element_properties.height());
			listing_slide_width();
		});
	}

	//page: all
	listing_slider_control();
	listing_slider_hover();

});

//tabs
jQuery(function() {
	//tabs
	jQuery('div#search-results .tools a.view-mode').on('click',function() {
		
		var panel = jQuery(this).attr('data-panel');
		
		jQuery('div#search-results .tools a.view-mode').each(function() {
            if(jQuery(this).attr('data-panel') == panel) 
				jQuery(this).addClass('active');
			else 
				jQuery(this).removeClass('active');
        });
		
		jQuery('div#search-results .panel').each(function() {
            if(jQuery(this).attr('id') == panel) 
				jQuery(this).removeClass('hidden').addClass('active');
			else 
				jQuery(this).addClass('hidden').removeClass('active');
        });
		
		if(jQuery(this).attr('data-panel') == 'thumbnails-mode')  {
			jQuery('body').removeClass('map-mode-active').addClass('thumbnails-mode-active');
			properties_height('#thumbnails-mode');
			listing_slide_width();
			load_listing_image(jQuery(window).height());
		}
		
		if(jQuery(this).attr('data-panel') == 'map-mode')  {
			jQuery('body').addClass('map-mode-active').removeClass('thumbnails-mode-active');
			if(jQuery('#map-mode #canvas').length) zoogooglemaps_resize();
		}
		
	});
	//quicksearch 2 toggling
	jQuery('div#search-results .tools a.toggle-search').on('click', function(){
		jQuery('.quicksearch-2').toggleClass('expand');
	});
	//phone number toggling
	jQuery('.listing span.contact span.phone').on('click',function(){
		var phone_number = jQuery(this).attr('data-phone');
		jQuery(this).html('<a href="tel:'+phone_number+'" title="'+phone_number+'">'+phone_number+'</a>');
	});
});

//properties height
function properties_height(panel) {
	if(jQuery(panel).hasClass('active')) {
		var element_page				= jQuery('#page'),
			element_header				= jQuery('#header'),
			element_breadcrumbs			= jQuery('#breadcrumbs'),
			element_panel_properties	= jQuery(panel + ' .properties');
		
		var window_height			= jQuery(window).outerHeight(true), 
			listings_offset			= element_panel_properties.offset().top,
			header_height			= element_header.outerHeight(true),
			breadcrumbs_height		= element_breadcrumbs.outerHeight(true),
			hidden_height			= header_height + breadcrumbs_height - 24,
			onload_height			= window_height - listings_offset,
			onscroll_height			= onload_height + hidden_height;

		element_panel_properties.removeAttr('style').css('height', onload_height).data({
			'hidden-height'		: hidden_height,
			'onload-height'		: onload_height,
			'onscroll-height'	: onscroll_height
		});
	}
}

//listing slide width
function listing_slide_width() {
	jQuery('div#search-results .panel.active .listing').each(function() {
		var slide_width = jQuery(this).width();
		jQuery('.slide', this).css({'width': slide_width});
	}).addClass('slide-width-updated');
}

//load listing images
function load_listing_image(offset, extend) {
	var element			= jQuery('div#search-results .panel.active .listing:not(.visible)'),
		viewport_bottom = offset,
		extend			= (extend) ? extend : 0;
	element.each(function() {
		if(jQuery(this).offset().top <= viewport_bottom + extend) {
			jQuery(this).addClass('visible');
			jQuery('.slide:first-child img',this).attr('src', jQuery('.slide:first-child img',this).attr('data-src'));
		}
	});
}

//listing slider control
function listing_slider_control() {
	jQuery('.slider-controls .control').on('click',function(e){
		e.stopPropagation();
		var id				= jQuery(this).closest('.listing').attr('data-listing-id');
			target			= jQuery(this).closest('.listing[data-listing-id="'+id+'"]').find('.slider'),
			width			= jQuery(this).closest('.listing[data-listing-id="'+id+'"]').find('.images').width(),
			images_number	= parseInt(jQuery(this).closest('.listing[data-listing-id="'+id+'"]').find('.images').attr('data-images-count')),
			direction		= jQuery(this).attr('data-direction'),
			counter			= parseInt(jQuery(this).attr('data-count'));
		jQuery(this).closest('.listing[data-listing-id="'+id+'"]').find('.slide img').each(function() {
			var src = jQuery(this).attr('data-src');
			if(!jQuery(this).attr('src')) 
				jQuery(this).attr('src',src);
		});
		if(direction == 'prev') {
			if(counter > 0) {
				jQuery(this).attr('data-count', counter - 1);
				jQuery(this).siblings('.next').attr('data-count', counter);
				target.css('left', '-' + (counter - 1) * width + 'px');
			} else return;
		} else {
			if(counter <= images_number-1) {
				jQuery(this).attr('data-count',counter+1);
				jQuery(this).siblings('.prev').attr('data-count', counter);
				target.css('left', '-' + counter * width + 'px');
			} else return;
		}
	});
}

//listing slider control
function listing_slider_hover() {
	jQuery('.slider-controls .control').hover(
		function(){
			jQuery(this).closest('.container').addClass('slider-hover');
		},
		function(){
			jQuery(this).closest('.container').removeClass('slider-hover');
		}
	);
}





