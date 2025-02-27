/* =====================================
All JavaScript fuctions Start
======================================*/
(function ($) {
	
    'use strict';
/*--------------------------------------------------------------------------------------------
	document.ready ALL FUNCTION START
---------------------------------------------------------------------------------------------*/	

	// Wow Animate function by = owl.js
    function wow_animate(){    	
		var wow = new WOW(
		  {
			boxClass:     'wow', 
			animateClass: 'animated',
			offset:0,    
			mobile: true,      
			live:true,   
			scrollContainer: null 
		  }
		);
		wow.init();
	}
	
	// Yoga Products Carousel function by = owl.js **************************************************
    function ao_yoga_prod_slider(){    
        jQuery('.ao-yoga-prod-slider').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            dots: false,
            navText: ['<i class="feather-chevron-left"></i>', '<i class="feather-chevron-right"></i>'],
            responsive:{
                0:{
                    items:1,
                    center:false,
                },
                767:{
                    items:2,
					center:false,
                },
                1200:{
                    items:3,
					center:false,
                }
            }
        });	
	}
		
// testimonial One Carousel Onefunction by = owl.js **************************************************
    function ao_our_testimo_slider(){    
        jQuery('.ao-our-testimo-slider').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            dots: false,
            navText: ['<i class="feather-chevron-left"></i>', '<i class="feather-chevron-right"></i>'],
            responsive:{
                0:{
                    items:1,
                },
                991:{
                    items:2,
                }
            }
        });
    }    
	
// Yoga Categori function by = owl.js **************************************************
    function ao_yoga_categori_slider(){    
        jQuery('.ao-yoga-categori-slider').owlCarousel({
            loop:true,
            margin:30,
            center:false,
            nav:false,
            dots: false,
			autoplay:true,
			autoplayTimeout:5000,
            navText: ['<i class="feather-chevron-left"></i>', '<i class="feather-chevron-right"></i>'],
            responsive:{
                0:{
                    items:1,
                },
                767:{
                    items:2,
                },
                991:{
                    items:3,
                },
                1280:{
                    items:4,
                },
                1600:{
                    items:5,
                }				
            }
        });
    }  	
	
	
	// Yoga Categori Two function by = owl.js **************************************************
    function ao_yoga_categori_slider2(){    
        jQuery('.ao-yoga-categori-slider2').owlCarousel({
            loop:true,
            margin:30,
            center:false,
            nav:false,
            dots: false,
			autoplay:true,
			autoplayTimeout:5000,
            navText: ['<i class="feather-chevron-left"></i>', '<i class="feather-chevron-right"></i>'],
            responsive:{
                0:{
                    items:1,
                },
                767:{
                    items:2,
                },
                991:{
                    items:3,
                },
                1280:{
                    items:4,
                },
                1600:{
                    items:5,
                }				
            }
        });
    }  	
	
	
		
	// Yoga Categori Tabs Hover function by = owl.js **************************************************
    function ao_yogacate_tabs_hover(){    
     	document.querySelectorAll('#myTab .nav-link').forEach(function(everyitem){ 	
		var tabTrigger = new bootstrap.Tab(everyitem)
		everyitem.addEventListener('mouseenter', function(){
			tabTrigger.show();
		});
	});
    }  
	
	
	
	
	
	
	
// Our Team Carousel function by = owl.js **************************************************
    function ao_our_team_slider(){    
        jQuery('.ao-our-team-slider').owlCarousel({
            loop:true,
            margin:90,
            center:true,
            nav:true,
            dots: false,
            navText: ['<i class="feather-chevron-left"></i>', '<i class="feather-chevron-right"></i>'],
            responsive:{
                0:{
                    items:1,
                    center:false,
                },
                1280:{
                    items:2,
					center:false,
                }
            }
        });
    }      
	
// testimonial One Carousel Onefunction by = owl.js **************************************************
function ao_our_testimo_slider2(){    
	jQuery('.ao-our-testimo-slider2').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="bi bi-arrow-left"></i>', '<i class="bi bi-arrow-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			991:{
				items:1,
			}
		}
	});
}
	
	
	
	
// > magnificPopup for video function	by = magnific-popup.js ===================== //	
	function magnific_video(){	
		jQuery('.mfp-video').magnificPopup({
			type: 'iframe',
		});
	}
	// > magnificPopup function	by = magnific-popup.js =========================== //
	function magnific_popup(){
		jQuery('.mfp-gallery').magnificPopup({
		delegate: '.mfp-link',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		}
	});
	}
// > Main menu sticky on top  when scroll down function by = custom.js ========== //		
	function sticky_header(){
		if(jQuery('.sticky-header').length){
			var sticky = new Waypoint.Sticky({
			  element: jQuery('.sticky-header')
			});
		}
	}
	// > Sidebar sticky  when scroll down function by = theia-sticky-sidebar.js ========== //		
	function sticky_sidebar(){		
		$('.rightSidebar')
			.theiaStickySidebar({
				additionalMarginTop: 100
			});		
	}
// > page scroll top on button click function by = custom.js ===================== //	
	function scroll_top(){
		jQuery("button.scroltop").on('click', function() {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
		jQuery(window).on("scroll", function() {
			var scroll = jQuery(window).scrollTop();
			if (scroll > 900) {
				jQuery("button.scroltop").fadeIn(1000);
			} else {
				jQuery("button.scroltop").fadeOut(1000);
			}
		});
	}
	
	
// > accordion active calss function by = custom.js ========================= //	
	function accordion_active() {
		$('.acod-head a').on('click', function() {
			$('.acod-head').removeClass('acc-actives');
			$(this).parents('.acod-head').addClass('acc-actives');
			$('.acod-title').removeClass('acc-actives'); //just to make a visual sense
			$(this).parent().addClass('acc-actives'); //just to make a visual sense
			($(this).parents('.acod-head').attr('class'));
		 });
	}	
	
	
	// > Nav submenu show hide on mobile by = custom.js
	function mobile_nav(){
		jQuery(".sub-menu").parent('li').addClass('has-child');
		jQuery("<div class='fa fa-angle-right submenu-toogle'></div>").insertAfter(".has-child > a");
		jQuery('.has-child a+.submenu-toogle').on('click',function(ev) {
			jQuery(this).parent().siblings(".has-child ").children(".sub-menu").slideUp(500, function(){
				jQuery(this).parent().removeClass('nav-active');
			});
			jQuery(this).next(jQuery('.sub-menu')).slideToggle(500, function(){
				jQuery(this).parent().toggleClass('nav-active');
			});
			ev.stopPropagation();
		});
	
	}
	
	// Mobile side drawer function by = custom.js
	function mobile_side_drawer(){
		jQuery('#mobile-side-drawer').on('click', function () { 
			jQuery('.mobile-sider-drawer-menu').toggleClass('active');
		});
	}	
    

//  Counter Section function by = counterup.min.js
	function counter_section(){
		jQuery('.counter').counterUp({
			delay: 10,
			time: 3000
		});	
	}	


	
//  Cursor Section Start function by = TweenMax.min.js//
function Cursor_section(){
	let cursor = document.querySelector(".cursor");
	let cursor2 = document.querySelector(".cursor2");
	let cursorScale = document.querySelectorAll(".cursor-scale");
	let mouseX = 0;
	let mouseY = 0;
	
	gsap.to({}, 0.016, {
	  repeat: -1,
	  onRepeat: function () {
		gsap.set(cursor, {
		  css: {
			left: mouseX,
			top: mouseY,
		  },
		});
		gsap.set(cursor2, {
		  css: {
			left: mouseX,
			top: mouseY,
		  },
		});
	  },
	});
	
	// Mouse Pointer
	
	window.addEventListener("mousemove", (e) => {
	  mouseX = e.clientX;
	  mouseY = e.clientY;
	});
	
	cursorScale.forEach((link) => {
	  link.addEventListener("mousemove", () => {
		cursor.classList.add("grow");
		if (link.classList.contains("small")) {
		  cursor.classList.remove("grow");
		  cursor.classList.add("grow-small");
		}
	  });
	
	  link.addEventListener("mouseleave", () => {
		cursor.classList.remove("grow");
		cursor.classList.remove("grow-small");
	  });
	});


}
//  Cursor Section End  function by = gsap.min.js//

			    
/*--------------------------------------------------------------------------------------------
	Window on load ALL FUNCTION START
---------------------------------------------------------------------------------------------*/
	

// > page loader function by = custom.js ========================= //		
	function page_loader() {
		jQuery('.loading-area').fadeOut(1000);
	}
		
	
/*--------------------------------------------------------------------------------------------
    Window on scroll ALL FUNCTION START
---------------------------------------------------------------------------------------------*/
    function color_fill_header() {
        var scroll = $(window).scrollTop();
        if(scroll >= 20) {
            $(".main-bar").addClass("color-fill");
			$(".sticky-header").addClass("is-fixed");
        } else {
            (scroll = 20); $(".main-bar").removeClass("color-fill");
			(scroll = 20); $(".sticky-header").removeClass("is-fixed");
        }
    }

	
	
	
	
/*--------------------------------------------------------------------------------------------
	document.ready ALL FUNCTION START
---------------------------------------------------------------------------------------------*/
	jQuery(document).ready(function() {
		
		// Wow Animate function by = owl.js
    	wow_animate(),  
	// Yoga Products Carousel function by = owl.js **************************************************
		ao_yoga_prod_slider(),
		// testimonial One Carousel function by = owl.js **************************************************
		ao_our_testimo_slider(),
		// Yoga Categori Carousel function by = owl.js **************************************************
		ao_yoga_categori_slider(), 
		// Yoga Categori Two function by = owl.js **************************************************
		ao_yoga_categori_slider2(),	
		// Yoga Categori Tabs Hover function by = owl.js **************************************************
		ao_yogacate_tabs_hover(), 
		// Our Team Carousel function by = owl.js **************************************************
		ao_our_team_slider(),  
		// testimonial One Carousel Onefunction by = owl.js **************************************************
		ao_our_testimo_slider2(), 
		// > magnificPopup for video function by = magnific-popup.js
		magnific_video(),
		// > magnificPopup function	by = magnific-popup.js =========================== //
		magnific_popup()
		// > Main menu sticky on top  when scroll down function by = custom.js		
		sticky_header(),
	    // > Sidebar sticky  when scroll down function by = theia-sticky-sidebar.js ========== //		
		sticky_sidebar(),
		// > page scroll top on button click function by = custom.js	
		scroll_top(),
        // > accordion active calss function by = custom.js ========================= //	
        accordion_active(),            
		// > Nav submenu on off function by = custome.js ===================//
		mobile_nav(),
		// Mobile side drawer function by = custom.js
		mobile_side_drawer(),
		//  Counter Section function by = counterup.min.js
		counter_section(),
		//  Cursor Section Start function by = TweenMax.min.js//
		Cursor_section()

			
	}); 	
/*--------------------------------------------------------------------------------------------
	Window Load START
---------------------------------------------------------------------------------------------*/
	jQuery(window).on('load', function () {
		// > page loader function by = custom.js		
		page_loader();
		// > Color Fill function by = custom.js	
		color_fill_header() 

});
 /*===========================
	Window Scroll ALL FUNCTION START
===========================*/
	jQuery(window).on('scroll', function () {
		// > Color Fill function by = custom.js	
		color_fill_header() 
	});
	
/*===========================
	Window Resize ALL FUNCTION START
===========================*/
	jQuery(window).on('resize', function () {
	});jQuery(window).resize();
	
	
})(window.jQuery);
