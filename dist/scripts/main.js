!function(e){var t=e(".site-header").offset().top,a=function(){var a=e(window).scrollTop();a>t?e(".menu-sticky").addClass("fixed-menu"):e(".menu-sticky").removeClass("fixed-menu")};a(),e(window).on("resize scroll",function(){a()}).resize(),e("img.lazy").lazyload({effect:"fadeIn",placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA9JREFUeNpiYGBgkAIIMAAAHwAbZIBtGgAAAABJRU5ErkJggg=="}),e(".load-more").on("click",function(e){e.preventDefault()}),e(".menu-more").on("click",function(t){t.preventDefault(),e(this).toggleClass("active")});var c=e("#topdeck").height()-380;e("#live-ticker > ul").css("height",c),e(".show-hide").on("click",function(t){t.preventDefault(),e(this).closest("li").toggleClass("li-active")}),e(".tab-comments span").on("click",function(t){return t.preventDefault(),e("#tab-content-comments").addClass("tab-content-active"),e(this).closest("li").addClass("tab-active"),e(".tab-teasers").removeClass("tab-active"),e("#tab-content-teasers").removeClass("tab-content-active"),e.ajax({type:"GET",url:"http://elskak.disqus.com/embed.js",dataType:"script",cache:!0}),!1}),e(".tab-teasers a").on("click",function(t){t.preventDefault(),e(this).closest("li").addClass("tab-active"),e(".tab-comments").removeClass("tab-active"),e("#tab-content-comments").removeClass("tab-content-active"),e("#tab-content-teasers").addClass("tab-content-active")}),e(".liveticker1").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker")}),e(".liveticker2").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker-alt")}),e(".liveticker3").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker-alt-2")})}(jQuery);
//# sourceMappingURL=main.js.map