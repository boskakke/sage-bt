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
    


    $("img.lazy").lazyload({
        // effect : "fadeIn",
        threshold : 200,
        placeholder : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAJCAYAAAA7KqwyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkRCNzE4OEY5MUMzQTExRTVCRTBGRDYzMTNENEQ4NTkwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkRCNzE4OEZBMUMzQTExRTVCRTBGRDYzMTNENEQ4NTkwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6REI3MTg4RjcxQzNBMTFFNUJFMEZENjMxM0Q0RDg1OTAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6REI3MTg4RjgxQzNBMTFFNUJFMEZENjMxM0Q0RDg1OTAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4vIkPyAAAAGUlEQVR42mJkYGCQYqAAMI4aMGoAEAAEGAAzLwD0BBXPIwAAAABJRU5ErkJggg=="
      });

    $('.send-tip a, .tip-form .close-layer').on('click', function(e){
      var activeItems = $('.li-active');
      e.preventDefault();
      $(activeItems).removeClass('li-active');
      $('#header-sitemap').removeClass('show');
      $('#tip-form').toggleClass('show');
    });
    
    $('.toggle-sitemap, .header-sitemap .close-layer').on('click', function(e){
        e.preventDefault();
        $('#tip-form').removeClass('show');
        $('#header-sitemap').toggleClass('show');
    });

    $('.toggle-tip-footer').on('click', function(e){
      
       $('.tip-form').addClass('show');
       $('.tip-form textarea').focus();
    });
    
    $('.load-more').on('click', function(e){
      e.preventDefault();
    });

    $('.menu-more').on('click', function(e){
      e.preventDefault();
      $(this).toggleClass('active');
    });

    
    // var tickerHeight = $('#topdeck').height() - 800;

    // $('#live-ticker > ul').css('height',tickerHeight);
    //$('#live-ticker > ul').css('height','800');


    
    $('.show-hide').on('click', function(e){
      var activeItems = $('.li-active');
      e.preventDefault();
      if (!$(this).closest('li').hasClass('li-active')) {
        $(activeItems).removeClass('li-active');  
      }
      
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


    $('.font-chooser').on('click','a', function(e){
      e.preventDefault();
      var link = $(this).attr('href');
      link = link.substring(1);
      $('body').removeClass();
      $('body').toggleClass(link);
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
