(function ($) {
  "use strict";

  // *** On ready *** //
  $(document).on("ready", function () {
    bannerSlider();
    ourServicesTabs();
    popularPackagesSlider();
    tourGuideSlider();
    bannerScrollEffect(); // Reintroduzido
    scrollProgress(); // Reintroduzido
  });

  // *** On load *** //
  $(window).on("load", function () {
    sliderImageBG();
    parallaxStellar(); // Reintroduzido
  });

  // *** On resize *** //
  $(window).on("resize", function () {
    optimizeSliderImageBG();
  });

  // *** On scroll *** //
  $(window).on("scroll", function () {
    scrollProgress(); // Reintroduzido
    bannerScrollEffect(); // Reintroduzido
  });

  // *** Banner Slider *** //
  function bannerSlider() {
    var bannerSlider = $(".banner-slider > .owl-carousel");
    bannerSlider.owlCarousel({
      items: 1,
      rtl: false,
      autoplay: false,
      autoplaySpeed: 600,
      autoplayTimeout: 3000,
      dragEndSpeed: 500,
      autoplayHoverPause: true,
      loop: true,
      slideBy: 1,
      margin: 10,
      stagePadding: 0,
      nav: false,
      dots: true,
      navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>',
      ],
      responsive: {
        0: {},
        480: {},
        768: {},
      },
      autoHeight: false,
      autoWidth: false,
      navRewind: true,
      center: false,
      dotsEach: 1,
      dotData: false,
      lazyLoad: false,
      smartSpeed: 600,
      fluidSpeed: 5000,
      navSpeed: 500,
      dotsSpeed: 500,
    });

    bannerSlider.on("translated.owl.carousel", function () {
      var b = bannerSlider.find(".owl-item.active .banner-center-box");
      setTimeout(function () {
        b.children("h1")
          .css("top", 100)
          .animate({ opacity: 1 }, { duration: 400, queue: false })
          .animate({ top: 0 }, { duration: 600, easing: "easeOutExpo" });
        b.children(".description")
          .css("top", 100)
          .animate({ opacity: 1 }, { duration: 400, queue: false })
          .animate({ top: 0 }, { duration: 600, easing: "easeOutExpo" });
        b.children(".btn")
          .css("top", 100)
          .animate({ opacity: 1 }, { duration: 400, queue: false })
          .animate({ top: 0 }, { duration: 600, easing: "easeOutExpo" });
      }, 150);
    });
  }

  // *** Banner Scroll Effect *** //
  function bannerScrollEffect() {
    var scrollTop = $(window).scrollTop();
    $(".banner-slider .overlay-colored").css(
      "background-color",
      "rgba(0, 0, 0, " + Math.min(scrollTop / 500, 0.5) + ")"
    );
  }

  // *** Scroll Progress *** //
  function scrollProgress() {
    var scrollTop = $(window).scrollTop();
    var docHeight = $(document).height();
    var winHeight = $(window).height();
    var scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
    $(".scroll-progress-bar").css("width", scrollPercent + "%");
  }

  // *** Parallax Stellar *** //
  function parallaxStellar() {
    if ($.fn.stellar) {
      $(window).stellar({
        horizontalScrolling: false,
        responsive: true,
        parallaxBackgrounds: true,
        parallaxElements: true,
        scrollProperty: "scroll",
        positionProperty: "position",
      });
    }
  }

  // *** Slider Image BG *** //
  function sliderImageBG() {
    $(".slider-img-bg .owl-item > li").each(function () {
      var imgSrc = $(this).find(".slide").children("img").attr("src");
      $(this).css({
        "background-image": "url('" + imgSrc + "')",
        "background-color": "#ccc",
        "background-position": "top center",
        "background-size": "cover",
        "background-repeat": "no-repeat",
      });
    });
  }

  // *** Optimize Slider Image BG *** //
  function optimizeSliderImageBG() {
    $(".slider-img-bg").each(function () {
      var imgHeight = $(this).closest("div").height();
      $(this).find(".owl-item > li .slide").children("img").css({
        display: "block",
        height: imgHeight,
        opacity: 0,
      });
    });
  }

  // *** Our Services Tabs *** //
  function ourServicesTabs() {
    var clickedTab = $(".os-tabs > .active");
    var tabWrapper = $(".os-tabs-content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();

    activeTab.show();
    tabWrapper.height(activeTabHeight);

    $(".os-tabs > li").on("click", function () {
      if (!$(this).hasClass("active")) {
        $(".os-tabs > li").removeClass("active");
        $(this).addClass("active");
        clickedTab = $(".os-tabs .active");

        activeTab.fadeOut(200, function () {
          $(".os-tabs-content > li").removeClass("active");
          var clickedTabIndex = clickedTab.index();
          $(".os-tabs-content > li").eq(clickedTabIndex).addClass("active");
          activeTab = $(".os-tabs-content > .active");
          activeTabHeight = activeTab.outerHeight();
          tabWrapper
            .stop()
            .delay(0)
            .animate(
              {
                height: activeTabHeight,
              },
              200,
              function () {
                activeTab
                  .delay(50)
                  .css("top", 30)
                  .animate({ top: 0 }, { duration: 250, queue: false })
                  .fadeIn(200);
              }
            );
        });
      }
    });
  }

  // *** Most Popular Slider *** //
  function popularPackagesSlider() {
    var popularPackagesSlider = $(".popular-packages-slider > .owl-carousel");
    popularPackagesSlider.owlCarousel({
      rtl: false,
      autoplay: false,
      autoplaySpeed: 600,
      autoplayTimeout: 3000,
      dragEndSpeed: 500,
      autoplayHoverPause: true,
      loop: false,
      slideBy: 1,
      margin: 30,
      stagePadding: 0,
      nav: false,
      dots: true,
      navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1200: {
          items: 3,
        },
      },
      autoHeight: false,
      autoWidth: false,
      navRewind: true,
      center: false,
      dotsEach: 1,
      dotData: false,
      lazyLoad: false,
      smartSpeed: 600,
      fluidSpeed: 5000,
      navSpeed: 500,
      dotsSpeed: 500,
    });
  }

  // *** Our Adventures Slider *** //
  function tourGuideSlider() {
    var tourGuideSlider = $(".tour-guide-slider > .owl-carousel");
    tourGuideSlider.owlCarousel({
      rtl: false,
      autoplay: false,
      autoplaySpeed: 600,
      autoplayTimeout: 3000,
      dragEndSpeed: 500,
      autoplayHoverPause: true,
      loop: false,
      slideBy: 1,
      margin: 30,
      stagePadding: 0,
      nav: false,
      dots: true,
      navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1200: {
          items: 3,
        },
      },
      autoHeight: false,
      autoWidth: false,
      navRewind: true,
      center: false,
      dotsEach: 1,
      dotData: false,
      lazyLoad: false,
      smartSpeed: 600,
      fluidSpeed: 5000,
      navSpeed: 500,
      dotsSpeed: 500,
    });
  }
})(jQuery);
