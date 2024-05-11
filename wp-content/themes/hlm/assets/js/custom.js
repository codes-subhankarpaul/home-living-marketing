// JavaScript Document
jQuery('#custom-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
jQuery('#quick-service-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
});
jQuery('#video-inner-owl').owlCarousel({
    loop:true,
    margin:20,
    autoplay: true,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
});
jQuery('#video-business-owl').owlCarousel({
    loop:true,
    margin:20,
    autoplay: true,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
});

jQuery(document).ready(function(){
    jQuery('li:has(ul.custom-submenu)').addClass('has_sub_menu');
    jQuery('li.nav-item > ul.custom-submenu').addClass('lebel-1');
    jQuery('ul.custom-submenu > li > ul.custom-submenu').removeClass('lebel-1');
    jQuery('ul.custom-submenu:has(ul.custom-submenu)').addClass('lebel-1');
    jQuery('ul.custom-submenu > li > ul.custom-submenu').addClass('lebel-2');

    jQuery('.has_sub_menu > a').click(function(){
        jQuery(this).siblings('.custom-submenu').slideToggle('active')
    });



});


jQuery(document).ready(function() {

  jQuery(window).scroll(function() {

      var height = jQuery('.custom-header').height();
      var scrollTop = jQuery(window).scrollTop();

      if (scrollTop >= height - 40) {
        jQuery('.custom-header').addClass('solid-nav');
      } else {
        jQuery('.custom-header').removeClass('solid-nav');
      }

  });
});




new WOW().init();
