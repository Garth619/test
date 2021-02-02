// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'
// @codekit-prepend 'underscore.js'
// @codekit-prepend 'lazysizes.js'
// @codekit-prepend 'macy.js'

jQuery(document).ready(function ($) {
  $("body").addClass("ready");

/* Wistia - Call function when script needs to be loaded either by hover or waypoints
--------------------------------------------------------------------------------------- */

  // loads wistia on click to improve initial page speed
  $(".wistia_embed").click(function () {
    //make sure to only load if Wistia is not already loaded
    let self = this;
    if (typeof Wistia === "undefined") {
      jQuery.getScript(
        "https://fast.wistia.com/assets/external/E-v1.js",
        function (data, textStatus, jqxhr) {
          // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
          // a hook we can listen for. So we need to set an interval to check when it's ready
          var interval = setInterval(function () {
            if ($(self).attr("id") && window._wq) {
              _wq.push({
                id: "_all",
                onReady: function (video) {
                  video.play();
                },
              });
              clearInterval(interval);
            }
          }, 100);
        }
      );
    } else {
      console.log("wistia is already defined");
    }
  });

  /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            1000
          );
          return false;
        }
      }
    });
  });

  /* Waypoints
     --------------------------------------------------------------------------------------- */

  function createWaypoint(
    triggerElementId,
    animatedElement,
    className,
    offsetVal,
    functionName,
    reverse
  ) {
    if (jQuery("#" + triggerElementId).length) {
      var waypoint = new Waypoint({
        element: document.getElementById(triggerElementId),
        handler: function (direction) {
          if (direction === "down") {
            jQuery(animatedElement).addClass(className);

            if (typeof functionName === "function") {
              functionName();
              this.destroy();
            }
          } else if (direction === "up") {
            if (reverse) {
              jQuery(animatedElement).removeClass(className);
            }
          }
        },
        offset: offsetVal,
        // Integer or percent
        // 500 means when element is 500px from the top of the page, the event triggers
        // 50% means when element is 50% from the top of the page, the event triggers
      });
    }
  }

  
  // createWaypoint("section-three", "#sec-three-content", "visible", 300, null, true);

  
/* Sticky Header
--------------------------------------------------------------------------------------- */


$('header').clone().addClass('header-layout-two header-layout-three').removeClass('header-layout-one default-banner-layout').appendTo("#sticky-header");

$('.at-above-post').wrapInner('<span class="myshare">Share</span>');

  /* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */

  $(".preload-slider").on("init", function (event, slick) {
    $(".preload-section").addClass("load-after");
  });

  

  $("#sec-two-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:".sec-two-mobile-arrow-left",
    nextArrow:".sec-two-mobile-arrow-right",
    adaptiveHeight:true,
    dots: false,
    fade:true,
    speed:800,
    mobileFirst:true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          prevArrow:".sec-two-tablet-arrow-left",
          nextArrow:".sec-two-tablet-arrow-right",
        },
      },
    ],
  });

  $("#sec-four-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:".sec-four-mobile-arrow-left",
    nextArrow:".sec-four-mobile-arrow-right",
    //adaptiveHeight:true,
    dots: false,
    //fade:true,
    mobileFirst:true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          fade:false,
          arrows: true,
          adaptiveHeight:false,
          prevArrow:".sec-four-tablet-arrow-left",
          nextArrow:".sec-four-tablet-arrow-right",
        },
      },
        {
        breakpoint: 1170,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          fade:false,
          arrows: true,
          adaptiveHeight:false,
          prevArrow:".sec-four-tablet-arrow-left",
          nextArrow:".sec-four-tablet-arrow-right",
        },
      },
    ],
  });


/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */

  $("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");

  // not found go back button

  function goBack() {
    window.history.back();
  }

  $("span.go-back").on("click", function (e) {
    goBack();
  });

  /* Sidebar Current Class for Blog Sidebars
--------------------------------------------------------------------------------------- */

  // add active to blog widgets that dont show a built in current class

  var pgurl = window.location.href;

  $(".sidebar-blog .sidebar-box ul li").each(function () {
    if ($(this).find("a").attr("href") == pgurl)
      $(this).addClass("blog-active");
  });

  $(".sidebar-box ul.menu > li.menu-item-has-children > a").on(
    "click",
    function (e) {
      $(this).next("ul.sub-menu").toggleClass('active');

      $(this).parent().toggleClass("active");
    }
  );

  $(".sidebar-box ul.menu > li.current-menu-ancestor").addClass('active');

/* Featured Attorneys Show Next Five 
--------------------------------------------------------------------------------------- */

  var trs = $("a.single-featured-att");
  var btnMore = $("#att-more");
  //var btnLess = $("#att-less");
  var trsLength = trs.length;
  var currentIndex = 5;

  trs.hide();
  trs.slice(0, 5).show();
  checkButton();

  btnMore.click(function(e) {
    e.preventDefault();
    $("a.single-featured-att").slice(currentIndex, currentIndex + 5).fadeIn();
    currentIndex += 5;
    checkButton();
  });

  // btnLess.click(function(e) {
  //   e.preventDefault();
  //   $("a.single-featured-att").slice(currentIndex - 10, currentIndex).fadeOut();
  //   currentIndex -= 10;
  //   checkButton();
  // });

  function checkButton() {
    var currentLength = $("a.single-featured-att:visible").length;

    if (currentLength >= trsLength) {
      btnMore.hide();
    } else {
      btnMore.show();
    }

    // if (trsLength > 10 && currentLength > 10) {
    //   btnLess.show();
    // } else {
    //   btnLess.hide();
    // }

  }



/* Resize Nav Functions
--------------------------------------------------------------------------------------- */

  // resize - tablet and desktop top navigatons behave differently. These turn off click functions at certain window widths without reloading the page

  // nav

  //$('nav ul.menu > li.current-menu-ancestor > a').addClass('active');

  $(".menu-wrapper").on("click", function (e) {
    $(this).toggleClass('active');
    $("nav").toggleClass('nav-open');
  });

  $("nav .close").on("click", function (e) {
    $("nav").removeClass('nav-open');
  });

  function navDesktop() {
    $("header nav").addClass("nav-desktop");

    $("header nav li.menu-item-has-children > a")
      .next("ul.sub-menu")
      .removeClass("open");

    $("header nav").removeClass("nav-tablet");
  }

  function navTablet() {
    $("header nav").removeClass("nav-desktop");

    $("header nav").addClass("nav-tablet");
  }

  function tabletClick() {
    $(this).next('ul.sub-menu').slideToggle(350);

    $(this).next("ul.sub-menu").toggleClass("active");

    $(this).parent().toggleClass("active");

    $(this).toggleClass("active");
  }

  // nav
// can i make this a function? so there isnt redundant code below with the windo resizes?
  if ($(window).width() >= 1170) {
    navDesktop();
  }

  if ($(window).width() < 1170) {
    navTablet();

    $("header nav li.menu-item-has-children > a")
      .off()
      .on("click", tabletClick);
  }

  // resize window width and fire functions

  $(window).resize(
    _.debounce(function () {
      if ($(window).width() >= 1170) {
        navDesktop();

        // off

        $("header nav li.menu-item-has-children > a").off("click", tabletClick);
      }

      if ($(window).width() < 1170) {
        navTablet();

        // off

        $("header nav li.menu-item-has-children > a")
          .off()
          .on("click", tabletClick);
      }
    }, 100)
  );
}); // document ready
