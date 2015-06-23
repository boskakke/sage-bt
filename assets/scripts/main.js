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

  
    $("img.lazy").lazyload({
        effect : "fadeIn",
        placeholder : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA9JREFUeNpiYGBgkAIIMAAAHwAbZIBtGgAAAABJRU5ErkJggg=="
      });

    
    $('.load-more').on('click', function(e){
    	e.preventDefault();
    });

    $('.menu-more').on('click', function(e){
    	e.preventDefault();
    	$(this).toggleClass('active');
    });

    var tickerHeight = $('#topdeck').height() - 380;

    $('#live-ticker > ul').css('height',tickerHeight);



// DEMO menu :
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

})(jQuery); // Fully reference jQuery after this point.
