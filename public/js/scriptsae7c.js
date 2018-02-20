//default
jQuery(function() {
  //p:empty
  jQuery('p:empty').remove();
  //header
  if (jQuery('#header').length) {
    jQuery('#header a.toggle-form').on('click', function() {
      var id = jQuery(this).attr('data-form-id');
      jQuery('#header .collapsible-form').each(function() {
        if (jQuery(this).attr('id') == id && jQuery(this).hasClass('collapse')) {
          jQuery(this).prev('a.toggle-form').addClass('active');
          jQuery(this).removeClass('collapse');
        } else {
          jQuery(this).prev('a.toggle-form').removeClass('active');
          jQuery(this).addClass('collapse');
        }
      });
    });
    jQuery('#header a.switch-form').on('click', function() {
      var id = jQuery(this).attr('data-switch-form');
      if (jQuery(this).hasClass('switch-parent-form')) {
        jQuery('#header .hasform').each(function() {
          if (jQuery(this).attr('data-form') == id) {
            jQuery('a.item', this).addClass('active');
            jQuery('.collapsible-form', this).removeClass('collapse');
          } else {
            jQuery('a.item', this).removeClass('active');
            jQuery('.collapsible-form', this).addClass('collapse');
          }
        });
      } else {
        jQuery('#header #' + id + ' div[data-form]').each(function() {
          jQuery(this).toggleClass('collapse');
        });
      }
    });
    jQuery(document).on('click', function(e) {
      var is_collapse = 0;
      jQuery('.collapsible-form').each(function() {
        if (jQuery(this).hasClass('collapse')) is_collapse += 1;
      });
      if (is_collapse > 0) {
        var a = jQuery(e.target),
          b = a.parents();
        if (b.hasClass('hasform') || b.hasClass('menu-item-agent-login')) return;
        else {
          jQuery('a.toggle-form, #footer .menu-item-agent-login a').removeClass('active');
          jQuery('.collapsible-form').addClass('collapse');
        }
      } else return false;
    });
  }
  //ads
  if (jQuery('.ads-placeholder').length) {
    jQuery('.ads-placeholder').each(function() {
      if (jQuery(this).is(':empty')) jQuery(this).html('<img src="https://www.propertyhq.com.au/wp-content/themes/phq_2017/images/ads_default_01.jpg" alt="" />');
    });
  }
  //gform on page: list with us, contact us, about us
  if (jQuery('.gform-rewrapped').length) {
    jQuery('ul.gform_fields').each(function() {
      jQuery('.gfield-left', this).wrapAll('<li class="gfield-column left borderbox"><ul>');
      jQuery('.gfield-right', this).wrapAll('<li class="gfield-column left borderbox"><ul>');
    });
    if (jQuery('.forms-panel').length) {
      if (jQuery('.gform_validation_error').length) {
        var form_class = jQuery('.gform_validation_error form').attr('class'),
          form = form_class.split(" ");
        jQuery('.panel-items a[data-panel="' + form[0] + '"], .panels .panel[data-panel="' + form[0] + '"]').addClass('active');
      }
      if (jQuery('.gform_confirmation_wrapper').length) {
        var form = jQuery('.gform_confirmation_wrapper').closest('.panel').attr('data-panel');
        jQuery('.panel-items a[data-panel="' + form + '"], .panels .panel[data-panel="' + form + '"]').addClass('active');
      }
    }
  }
  //gform validation
  if (jQuery('.gform_validation_error').length) {
    var container = (jQuery('.gform_validation_error').hasClass('gform-rewrapped_wrapper')) ? jQuery('.panels') : jQuery('.gform_wrapper');
    jQuery('html, body').animate({
      scrollTop: container.offset().top - 40
    }, 300);
  }
  //post search form
  if (jQuery('form#search-blog').length) {
    jQuery('form#search-blog a.submit').on('click', function() {
      jQuery('form#search-blog').submit();
    });
  }
  //posts index
  if (jQuery('#post-results').length) {
    //img data
    jQuery('.post-items .post-image img').each(function() {
      if (jQuery(this).attr("src") == '' || jQuery(this).attr("src").indexOf('wp-rss-multi-importer') > -1) {
        jQuery(this).remove();
      } else {
        var theImage = new Image();
        theImage.src = jQuery(this).attr("src");
        jQuery(theImage).data("original", this);
        jQuery(theImage).load(function() {
          var imageWidth = this.width;
          var imageHeight = this.height;
          var imageRatio = (imageHeight / imageWidth) * 100;
          jQuery(jQuery(jQuery(this).data("original")).attr({
            'data-width': imageWidth,
            'data-height': imageHeight,
            'data-ratio': imageRatio
          }));
        });
      }
    });
    //img class
    jQuery(window).on('load', function() {
      jQuery('.post-items .post-image img').each(function() {
        if (jQuery(this).attr('data-ratio') > 61.2403) jQuery(this).attr('class', 'fit-width');
        else jQuery(this).attr('class', 'fit-height');
      });
    });
  }
  //zoowidget
  if (jQuery('form.zoowidget-form').length) {
    jQuery('form.zoowidget-form input[type="text"]').each(function() {
      var label = jQuery(this).siblings('label').text();
      jQuery(this).attr('placeholder', label);
    });
    jQuery('form.zoowidget-form input[type="file"]').each(function() {
      jQuery(this).closest('li').addClass('input-file');
    });
  }
  //footer
  if (jQuery('#agent-login-form').length) {
    jQuery('#footer .menu-item-agent-login a').on('click', function(e) {
      e.preventDefault();
      var button_width = jQuery(this).outerWidth(),
        button_offset_x = jQuery(this).position().left,
        agent_login_form = jQuery('#footer #agent-login-form');
      //deactivate header forms
      jQuery('#header a.toggle-form').removeClass('active');
      jQuery('#header .collapsible-form').addClass('collapse');
      //activate
      jQuery(this).toggleClass('active');
      if (agent_login_form.hasClass('collapse')) {
        agent_login_form.removeClass('collapse');
        var form_width = agent_login_form.width(),
          form_height = agent_login_form.height();
        agent_login_form.css({
          'left': button_offset_x + button_width - form_width
        })
      } else agent_login_form.addClass('collapse').removeAttr('style');
    });
    jQuery('#footer #agent-login-form a.switch-form').on('click', function() {
      jQuery('#agent-login-form div[data-form]').each(function() {
        jQuery(this).toggleClass('collapse');
      });
    });
    jQuery('#footer #agent-login-form a.switch-parent-form').on('click', function() {
      var id = jQuery(this).attr('data-switch-form'),
        agent_login_button = jQuery('#footer .menu-item-agent-login a'),
        agent_login_form = jQuery('#footer #agent-login-form');
      jQuery('html, body').animate({
        scrollTop: 0
      });
      agent_login_button.toggleClass('active');
      agent_login_form.toggleClass('collapse');
      jQuery('#header #' + id).toggleClass('collapse');
      jQuery('#header a.toggle-form[data-form-id="' + id + '"]').toggleClass('active');
    });
  }
});

//toggle
jQuery(function() {
  jQuery('.toggle[data-toggle]').on('click', function(e) {
    var target = jQuery(this).attr('data-toggle');
    jQuery('body').toggleClass('expand-' + target);
    jQuery('#' + target).toggleClass('collapse');
    jQuery(this).toggleClass('active');
  });
  jQuery('.toggle[data-toggle-close]').on('click', function(e) {
    var target = jQuery(this).attr('data-toggle-close');
    jQuery('body').toggleClass('expand-' + target);
    jQuery('#' + target).toggleClass('collapse');
    jQuery('.toggle[data-toggle="' + target + '"]').toggleClass('active');
  });
});

//tabs
jQuery(function() {
  jQuery('.panel-items a.item:not(.alt)').on('click', function() {
    var panel_id = jQuery(this).closest('[data-panel-id]').attr('data-panel-id');
    panel = jQuery(this).attr('data-panel');
    jQuery('[data-panel-id="' + panel_id + '"] .panel-items a').each(function() {
      if (jQuery(this).attr('data-panel') == panel) jQuery(this).addClass('active');
      else jQuery(this).removeClass('active');
    });
    jQuery('[data-panel-id="' + panel_id + '"] .panel').each(function() {
      if (jQuery(this).attr('data-panel') == panel) jQuery(this).addClass('active');
      else jQuery(this).removeClass('active');
    });
  });
});

//nav
jQuery(function() {
  jQuery('#main-menu ul.menu li').each(function() {
    if (jQuery('ul.sub-menu', this).length) {
      jQuery('> a', this).addClass('toggle-submenu');
      jQuery('<span class="trigger valign overlay aligncenter"><span class="holder"><span class="icon ti-angle-down"></span></span></span>').appendTo(jQuery('> a', this));
    }
  });
  jQuery('a.toggle-submenu span.trigger').on('click', function(e) {
    e.preventDefault();
    jQuery('#main-menu li').not(jQuery(this).parents('li')).removeClass('expand');
    jQuery(this).closest('li').toggleClass('expand');
  });
});
function carouselnavPosition() {
	if (jQuery('.owl-carousel .owl-nav').length) {
		var owl_button = jQuery('.owl-carousel .owl-nav > div'),
			owl_button_height = owl_button.height();
		owl_button.removeAttr('style').each(function() {
			var reference_height = jQuery('.owl-carousel .centerimage').outerHeight();
			// var reference_height = owl_button.closest('.owl-carousel').find('.centerimage').outerHeight();
			jQuery(this).css('top', (reference_height / 2));
			// jQuery(this).css('top', (reference_height / 2) - (owl_button_height / 2));
		});
	}
}
// jQuery(function(){
// 	carouselnavPosition();
// 	jQuery(window).ready(function() {
// 	  setTimeout(function() {
// 	    carouselnavPosition();
// 	  }, 400);
// 	});
// 	jQuery(window).resize(function() {
// 	  setTimeout(function() {
// 	    carouselnavPosition();
// 	  }, 400);
// 	});
// })
//header animate
jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > jQuery('#header').outerHeight(true)) jQuery('body').addClass('scrolled');
  else jQuery('body').removeClass('scrolled');
});

//dynamic resize
jQuery(window).on('load', function() {
  if (jQuery('.owl-carousel .owl-nav').length) {
    jQuery('.owl-carousel .owl-nav').addClass('loaded');
  }
});

jQuery(window).on('load resize', function() {
  var viewport = document.body.clientWidth;
  //owl nav
  // if(jQuery('.owl-carousel .owl-nav').length) {
  // 	var owl_button = jQuery('.owl-carousel .owl-nav > div'),
  // 		owl_button_height = owl_button.height();
  // 	owl_button.removeAttr('style').each(function() {
  //           var reference_height = owl_button.closest('.owl-carousel').find('.centerimage').outerHeight();
  // 					console.log(reference_height);
  // 		jQuery(this).css('top', (reference_height / 2));
  // 		// jQuery(this).css('top', (reference_height / 2) - (owl_button_height / 2));
  //       });
  // }
  //single
  /*if(jQuery('.post-single').length) {
  	jQuery('h1.title').css('max-width', jQuery('.post-title').width() - jQuery('.post-title .icons').width());
  }*/
  //sticky footer
  if (jQuery('#search-results').length == 0) {
    setTimeout(function() {
      var window_height = jQuery(window).height(),
        header_height = jQuery('#header').outerHeight(),
        content_height = jQuery('#content').outerHeight(),
        footer_height = jQuery('#footer').outerHeight();
      if (window_height > (header_height + content_height + footer_height))
        jQuery('body').addClass('sticky-footer');
      else jQuery('body').removeClass('sticky-footer');
    }, 400);
  }
  //page: list with us
  if (jQuery('#page.page-list-with-us').length || jQuery('#page.page-about-us').length) {
    jQuery('body').removeClass('sticky-footer');
  }
});
//magnific popup
jQuery(function() {
  if (jQuery('[class*="mfp-"]').length) {
    jQuery('.mfp-single-image').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      mainClass: 'mfp-image',
      image: {
        verticalFit: true
      }
    });
    jQuery('.mfp-lightbox').magnificPopup({
      type: 'ajax',
      alignTop: true,
      overflowY: 'scroll',
      mainClass: 'mfp-image',
    });
    jQuery('.mfp-gallery').each(function() {
      jQuery(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-image',
        gallery: {
          enabled: true
        }
      });
    });
    jQuery('.mfp-inline').magnificPopup({
      type: 'inline',
      //mainClass:'mf-flip',
      removalDelay: 300
    });
    jQuery('.mfp-ajax').magnificPopup({
      type: 'ajax',
      //mainClass:'mf-flip',
      removalDelay: 300
    });
    jQuery('.mfp-iframe').magnificPopup({
      type: 'iframe',
      //mainClass:'mf-flip',
      removalDelay: 300
    });
    jQuery('.mfp-page-popup').magnificPopup({
      type: 'ajax',
      showCloseBtn: false,
      closeOnBgClick: false,
      mainClass: 'mfp-page-popup',
      callbacks: {
        ajaxContentAdded: function() {
          var m = this;
          this.content.find('a.toggle.close').on('click', function(e) {
            e.preventDefault();
            m.close();
          });
        }
      }
    });
  }
});
