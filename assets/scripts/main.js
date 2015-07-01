/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

    
    // STICKY HEADER
    var sticky_navigation_offset_top = $('.site-header').offset().top;
    
    var sticky_navigation = function()  {
        
        var scroll_top = $(window).scrollTop(); 

        if (scroll_top > sticky_navigation_offset_top) {
            $('.menu-sticky').addClass('fixed-menu');
        } else {
            $('.menu-sticky').removeClass('fixed-menu');
        }
    };
           
    sticky_navigation();
      $(window).on('resize scroll', function() {
      sticky_navigation();
      }).resize();
    
  

    


    // $('.article-gallery-small').royalSlider({
    //   fullscreen: {
    //     enabled: true,
    //     nativeFS: true
    //   },
    //   keyboardNavEnabled: true,
    //   imgHeight: '348',
    //   imgWidth: '620',
    //   globalCaption: true,

    // });


    $("img.lazy").lazyload({
        effect : "fadeIn",
        placeholder : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA9JREFUeNpiYGBgkAIIMAAAHwAbZIBtGgAAAABJRU5ErkJggg=="
      });

    $('.send-tip a, .tip-form .close-tip').on('click', function(e){
      e.preventDefault();
      $('#tip-form').toggle();
    });
    
    $('.load-more').on('click', function(e){
      e.preventDefault();
    });

    $('.menu-more').on('click', function(e){
      e.preventDefault();
      $(this).toggleClass('active');
    });

    var tickerHeight = $('#topdeck').height() - 800;

     $('#live-ticker > ul').css('height',tickerHeight);
    //$('#live-ticker > ul').css('height','800');


    
    $('.show-hide').on('click', function(e){
      e.preventDefault();
      $(this).closest('li').toggleClass('li-active');
    });
    

      // tab-active tab-teasers
      // tab-comments

      $('.tab-comments span').on('click', function(e){
          e.preventDefault();
          $('#tab-content-comments').addClass('tab-content-active');
          $(this).closest('li').addClass('tab-active');
          $('.tab-teasers').removeClass('tab-active');
          $('#tab-content-teasers').removeClass('tab-content-active');
          $.ajax({
              type: "GET",
              url: "http://elskak.disqus.com/embed.js",
              dataType: "script",
              cache: true
          });
          return false;
      });

      
      $('.tab-teasers a').on('click', function(e){
          e.preventDefault();
          $(this).closest('li').addClass('tab-active');
          $('.tab-comments').removeClass('tab-active');
          $('#tab-content-comments').removeClass('tab-content-active');
          $('#tab-content-teasers').addClass('tab-content-active');
          

      });

    // DEMO MENU - DO NOT COPY!!! :-) :

    $('.liveticker1').on('click', function(e) {
        e.preventDefault();
        $('#live-ticker').removeClass().toggleClass('live-ticker');
    });

    $('.liveticker2').on('click', function(e) {
        e.preventDefault();
        $('#live-ticker').removeClass().toggleClass('live-ticker-alt');
    });
    $('.liveticker3').on('click', function(e) {
        e.preventDefault();
        $('#live-ticker').removeClass().toggleClass('live-ticker-alt-2');
    });

// END DEMO



})(jQuery); // Fully reference jQuery after this point.
$( window ).load(function() {
  $('.article-gallery').royalSlider({
        fullscreen: {
          enabled: true,
          nativeFS: true
        },
        // autoScaleSliderHeight: '600',
        // keyboardNavEnabled: true,
        // globalCaption: true,
        // autoScaleSlider: true,
        // autoHeight: true
    autoHeight: true,
    imageAlignCenter: false,
    arrowsNav: true,
    fadeinLoadedSlide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
    controlsInside: false,
    imageScaleMode: 'none',
    loop: false,
    loopRewind: false,
    numImagesToPreload: 2,
    keyboardNavEnabled: true,
    usePreloader: true
    });

});
