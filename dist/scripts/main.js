!function(e){var t=e(".site-header").offset().top,l=function(){var l=e(window).scrollTop();l>t?e(".menu-sticky").addClass("fixed-menu"):e(".menu-sticky").removeClass("fixed-menu")};l(),e(window).on("resize scroll",function(){l()}).resize(),e("img.lazy").lazyload({threshold:200,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAJCAYAAAA7KqwyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkRCNzE4OEY5MUMzQTExRTVCRTBGRDYzMTNENEQ4NTkwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkRCNzE4OEZBMUMzQTExRTVCRTBGRDYzMTNENEQ4NTkwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6REI3MTg4RjcxQzNBMTFFNUJFMEZENjMxM0Q0RDg1OTAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6REI3MTg4RjgxQzNBMTFFNUJFMEZENjMxM0Q0RDg1OTAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4vIkPyAAAAGUlEQVR42mJkYGCQYqAAMI4aMGoAEAAEGAAzLwD0BBXPIwAAAABJRU5ErkJggg=="}),e(".send-tip a, .tip-form .close-layer").on("click",function(t){var l=e(".li-active");t.preventDefault(),e(l).removeClass("li-active"),e("#header-sitemap").removeClass("show"),e("#tip-form").toggleClass("show")}),e(".toggle-sitemap, .header-sitemap .close-layer").on("click",function(t){t.preventDefault(),e("#tip-form").removeClass("show"),e("#header-sitemap").toggleClass("show")}),e(".toggle-tip-footer").on("click",function(t){e(".tip-form").addClass("show"),e(".tip-form textarea").focus()}),e(".load-more").on("click",function(e){e.preventDefault()}),e(".menu-more > a").on("click",function(t){t.preventDefault(),e(this).parent().toggleClass("active")}),e(".show-terms").on("click",function(t){t.preventDefault(),e(".tip-terms").toggle(1)}),e(".show-hide").on("click",function(t){var l=e(".li-active");t.preventDefault(),e(this).closest("li").hasClass("li-active")||e(l).removeClass("li-active"),e(this).closest("li").toggleClass("li-active")}),e(".tab-teasers a").on("click",function(t){t.preventDefault(),e(this).closest("li").addClass("tab-active"),e(".tab-comments").removeClass("tab-active"),e("#tab-content-comments").removeClass("tab-content-active"),e("#tab-content-teasers").addClass("tab-content-active")}),e(".liveticker1").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker")}),e(".liveticker2").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker-alt")}),e(".liveticker3").on("click",function(t){t.preventDefault(),e("#live-ticker").removeClass().toggleClass("live-ticker-alt-2")})}(jQuery),$(window).load(function(){$(".article-gallery").royalSlider({fullscreen:{enabled:!0,nativeFS:!0},autoHeight:!0,imageAlignCenter:!1,arrowsNav:!0,fadeinLoadedSlide:!1,controlNavigationSpacing:0,controlNavigation:"bullets",controlsInside:!1,imageScaleMode:"none",loop:!1,loopRewind:!1,numImagesToPreload:2,keyboardNavEnabled:!0,usePreloader:!0})});
//# sourceMappingURL=main.js.map