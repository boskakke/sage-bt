!function(e){var t=e(".site-header").offset().top,a=function(){var a=e(window).scrollTop();a>t?e(".menu-sticky").addClass("fixed-menu"):e(".menu-sticky").removeClass("fixed-menu")};a(),e(window).on("resize scroll",function(){a()}).resize(),e("img.lazy").lazyload({effect:"fadeIn",placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA9JREFUeNpiYGBgkAIIMAAAHwAbZIBtGgAAAABJRU5ErkJggg=="}),e(".send-tip a, .tip-form .close-layer").on("click",function(t){var a=e(".li-active");t.preventDefault(),e(a).removeClass("li-active"),e("#header-sitemap").removeClass("show"),e("#tip-form").toggleClass("show")}),e(".toggle-sitemap, .header-sitemap .close-layer").on("click",function(t){t.preventDefault(),e("#tip-form").removeClass("show"),e("#header-sitemap").toggleClass("show")}),e(".load-more").on("click",function(e){e.preventDefault()}),e(".menu-more").on("click",function(t){t.preventDefault(),e(this).toggleClass("active")});var l=e("#topdeck").height()-800;e("#live-ticker > ul").css("height",l),e(".show-hide").on("click",function(t){var a=e(".li-active");t.preventDefault(),e(this).closest("li").hasClass("li-active")||e(a).removeClass("li-active"),e(this).closest("li").toggleClass("li-active")}),e(".tab-comments span").on("click",function(t){return t.preventDefault(),e("#tab-content-comments").addClass("tab-content-active"),e(this).closest("li").addClass("tab-active"),e(".tab-teasers").removeClass("tab-active"),e("#tab-content-teasers").removeClass("tab-content-active"),e.ajax({type:"GET",url:"http://elskak.disqus.com/embed.js",dataType:"script",cache:!0}),!1}),e(".tab-teasers a").on("click",function(t){t.preventDefault(),e(this).closest("li").addClass("tab-active"),e(".tab-comments").removeClass("tab-active"),e("#tab-content-comments").removeClass("tab-content-active"),e("#tab-content-teasers").addClass("tab-content-active")}),e(".liveticker1").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker")}),e(".liveticker2").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker-alt")}),e(".liveticker3").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker-alt-2")})}(jQuery),$(window).load(function(){$(".article-gallery").royalSlider({fullscreen:{enabled:!0,nativeFS:!0},autoHeight:!0,imageAlignCenter:!1,arrowsNav:!0,fadeinLoadedSlide:!1,controlNavigationSpacing:0,controlNavigation:"bullets",controlsInside:!1,imageScaleMode:"none",loop:!1,loopRewind:!1,numImagesToPreload:2,keyboardNavEnabled:!0,usePreloader:!0})});
//# sourceMappingURL=main.js.map