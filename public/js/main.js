jQuery(function($) {
  "use strict";

  //Responsive Nav
  $("li.dropdown")
    .find(".fa-angle-down")
    .each(function() {
      $(this).on("click", function() {
        if ($(window).width() < 768) {
          $(this)
            .parent()
            .next()
            .slideToggle();
        }
        return false;
      });
    });

  //Change navbar´s colours
  $(window).scroll(function() {
    if ($(window).scrollTop() >= 350) {
      $(".navbar").css({
        "background-color": "#2c2c32"
      });
      $("#logo_text").css({
        color: "#00aeef"
      });
      $("#logo_img").attr("src", "images/logo_leon_invertido.png");
      $(".menu-item").css({
        color: "#F0F8FF"
      });
    } else {
      $(".navbar").css("background", "#fff");
      $("#logo_img").attr("src", "images/logo_leon.png");
      $("#logo_text").css({
        color: "#686868"
      });
      $(".menu-item").css({
        color: "#00aeef"
      });
    }
  });

  //Fit Vids
  if ($("#video-container").length) {
    $("#video-container").fitVids();
  }

  //Smooth links animations
  $(document).ready(function() {
    $('a[href^="#"]').click(function() {
      var destino = $(this.hash);
      if (destino.length == 0) {
        destino = $('a[name="' + this.hash.substr(1) + '"]');
      }
      if (destino.length == 0) {
        destino = $("html");
      }
      $("html, body").animate(
        {
          scrollTop: destino.offset().top
        },
        500
      );
      return false;
    });
  });

  //Initiat WOW JS
  new WOW().init();

  //Portfolio filter
  $(window).load(function() {
    $(".main-slider").addClass("animate-in");
    $(".preloader").remove();
    //End Preloader

    if ($(".masonery_area").length) {
      $(".masonery_area").masonry(); //Masonry
    }

    var $portfolio_selectors = $(".portfolio-filter >li>a");

    if ($portfolio_selectors.length) {
      var $portfolio = $(".portfolio-items");
      $portfolio.isotope({
        itemSelector: ".portfolio-item",
        layoutMode: "fitRows"
      });

      $portfolio_selectors.on("click", function() {
        $portfolio_selectors.removeClass("active");
        $(this).addClass("active");
        var selector = $(this).attr("data-filter");
        $portfolio.isotope({
          filter: selector
        });
        return false;
      });
    }
  });

  $(".nav-tabs a").click(function() {
    $(this).tab("show");
  });

  $(".timer").each(count);

  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data("countToOptions") || {});
    $this.countTo(options);
  }

  // Progress Bar
  $.each($("div.progress-bar"), function() {
    $(this).css("width", $(this).attr("data-transition") + "%");
  });

  
  //Gmaps
  if ($("#gmap").length) {
    var map;

    map = new GMaps({
      el: "#gmap",
      lat: 43.04446,
      lng: -76.130791,
      scrollwheel: false,
      zoom: 16,
      zoomControl: false,
      panControl: false,
      streetViewControl: false,
      mapTypeControl: false,
      overviewMapControl: false,
      clickable: false
    });

    map.addMarker({
      lat: 43.04446,
      lng: -76.130791,
      animation: google.maps.Animation.DROP,
      verticalAlign: "bottom",
      horizontalAlign: "center",
      backgroundColor: "#3e8bff"
    });
  }
  

});
