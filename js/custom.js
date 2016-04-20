jQuery(document).ready(function() {
   jQuery(".search-icon").click(function() {
      jQuery(".search-box").toggleClass('active');
   });

   jQuery(".close").click(function() {
      jQuery(".search-box").removeClass('active');
   });

   /******** bx-slider ***********/
   jQuery('.bxslider').bxSlider({
      pagerCustom: '.bx-pager',
      controls:false,
      auto:true
   });

   jQuery('.carousel-slider').bxSlider({
      minSlides: 5,
      maxSlides: 8,
      slideWidth: 133,
      slideMargin: 7,
      pager:false,
   });

   jQuery('.category-toggle-block').click(function() {
      jQuery('.category-menu').slideToggle();
   });

   jQuery('#site-navigation .menu-toggle').click(function() {
      jQuery('#site-navigation .menu').slideToggle('slow');
   });

   jQuery('#site-navigation .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>');

   jQuery('#site-navigation .sub-toggle').click(function() {
      jQuery(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
      jQuery(this).children('.fa-angle-right').first().toggleClass('fa-angle-down');
   });

   // scroll up setting
   jQuery("#scroll-up").hide();
   jQuery(function () {
      jQuery(window).scroll(function () {
         if (jQuery(this).scrollTop() > 800) {
            jQuery('#scroll-up').fadeIn();
         } else {
            jQuery('#scroll-up').fadeOut();
         }
      });
      jQuery('a#scroll-up').click(function () {
         jQuery('body,html').animate({
            scrollTop: 0
         }, 1400);
         return false;
      });
   });

   /* FitVids Setting */
   jQuery(".fitvids-video").fitVids();

});