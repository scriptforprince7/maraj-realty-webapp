(function ($) {
    "use strict";

    new WOW().init();  

    /*---background image---*/
	function dataBackgroundImage() {
		$('[data-bgimg]').each(function () {
			var bgImgUrl = $(this).data('bgimg');
			$(this).css({
				'background-image': 'url(' + bgImgUrl + ')', // + meaning concat
			});
		});
    }
    
    $(window).on('load', function () {
        dataBackgroundImage();
    });
    
    /*---stickey menu---*/
    $(window).on('scroll',function() {    
       var scroll = $(window).scrollTop(),
           screensize = $(window).width();
        if(screensize >= 480){
           if (scroll < 100 ) {
            $(".sticky-header").removeClass("sticky");
           }else{
            $(".sticky-header").addClass("sticky");
           }
        }
    });
    
    // Slick Slider Activation
    var $sliderActvation = $('.slick_slider_activation');
    if($sliderActvation.length > 0){
        $sliderActvation.slick({
          prevArrow:'<button class="prev_arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
          nextArrow:'<button class="next_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        });
    };
    
    /*swiper container activation*/
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        clickable: true,
        spaceBetween: 30,
        breakpoints: {
            1200: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 3,
            },
            768: {
              slidesPerView: 2,
            },
            576: {
              slidesPerView: 2,
            },
            300: {
              slidesPerView: 1,
            }
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
            
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    
    
    
     /*swiper container2 activation*/
    var swiper = new Swiper('.swiper-container2', {
        slidesPerView: 4,
        clickable: true,
        spaceBetween: 30,
        breakpoints: {
            1200: {
              slidesPerView: 4,
            },
            992: {
              slidesPerView: 4,
            },
            768: {
              slidesPerView: 3,
            },
            480: {
              slidesPerView: 2,
            },
            300: {
              slidesPerView: 1,
            }
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
            
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    
    
     /*swiper container3 activation*/
    var swiper = new Swiper('.swiper-container3', {
        slidesPerView: 5,
        clickable: true,
        spaceBetween: 30,
        breakpoints: {
            1200: {
              slidesPerView: 5,
            },
            992: {
              slidesPerView: 4,
            },
            768: {
              slidesPerView: 3,
            },
            480: {
              slidesPerView: 2,
            },
            300: {
              slidesPerView: 1,
            }
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
            
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

       
    
    /*swiper container3 activation*/
    var swiper = new Swiper('.swiper-banner-gallery', {
        slidesPerView: 1,
        clickable: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
            
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    

    /*--- niceSelect---*/
     $('.select_option').niceSelect();
    

    /*---  ScrollUp Active ---*/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-double-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });   
    
    
    /*--- counterup activation ---*/
    $('.counter').counterUp({
        delay: 20,
        time: 2000
    });
    
    
    /*---MailChimp---*/
    $('#mc-form').ajaxChimp({
        language: 'en',
        callback: mailChimpResponse,
        // ADD YOUR MAILCHIMP URL BELOW HERE!
        url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'

    });
    function mailChimpResponse(resp) {

        if (resp.result === 'success') {
            $('.mailchimp-success').addClass('active')
            $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
            $('.mailchimp-error').fadeOut(400);

        } else if(resp.result === 'error') {
            $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
        }  
    }

    
    /*---slidetoggle area---*/
    $(".advanced_search a").on("click", function() {
        $(this).toggleClass('active');
        $('.advanced_filter_option').slideToggle('medium');
    }); 
    
    
    
    /*---canvas menu activation---*/
    $('.canvas_open,.off_canvars_overlay').on('click', function(){
        $('.offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
    });
    
    $('.canvas_close,.off_canvars_overlay').on('click', function(){
        $('.offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
    });
    


    /*---Off Canvas Menu---*/
    var $offcanvasNav = $('.offcanvas_main_menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');
    
    $offcanvasNavSubMenu.slideUp();
    
    $offcanvasNav.on('click', 'li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.siblings('ul').slideUp('slow');
            }else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if( $this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/) ){
        	$this.parent().toggleClass('menu-open');
        }else if( $this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/) ){
        	$this.toggleClass('menu-open');
        }
    });

    
    /*---shop grid activation---*/
    $('.properties_toolbar_btn > button').on('click', function (e) {
        
		e.preventDefault();
        
        $('.properties_toolbar_btn > button').removeClass('active');
		$(this).addClass('active');
        
		var parentsDiv = $('.properties_shop_wrapper');
		var viewMode = $(this).data('role');
        
        
		parentsDiv.removeClass('grid_2 grid_3 grid_list').addClass(viewMode);
        
        if(viewMode == 'grid_2'){
			parentsDiv.children().addClass('col-lg-6 col-md-6 col-sm-6').removeClass('col-lg-4 col-12');
            
		}

		if(viewMode == 'grid_3'){
			parentsDiv.children().addClass('col-lg-4 col-md-6 col-sm-6').removeClass('col-lg-6  col-12');
            
		}

        
        if(viewMode == 'grid_list'){
			parentsDiv.children().addClass('col-12').removeClass('col-lg-4 col-lg-6 col-md-6 col-sm-6');
		}
            
	});
    
    
    
    
})(jQuery);	
