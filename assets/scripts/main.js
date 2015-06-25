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


    // DISQUSS

    $('.show-comments').on('click', function(){
          var disqus_shortname = 'elskak'; // Replace this value with *your* username.
 
          // ajax request to load the disqus javascript
          $.ajax({
                  type: "GET",
                  url: "http://" + disqus_shortname + ".disqus.com/embed.js",
                  dataType: "script",
                  cache: true
          });
          // hide the button once comments load
          $(this).fadeOut();
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
