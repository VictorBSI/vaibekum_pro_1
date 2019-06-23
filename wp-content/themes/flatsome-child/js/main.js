$(document).ready(function($) {
  $("body").addClass("preloader-site");
});
$(window).on("load", function() {
  $(".lds-ring").fadeOut("slow", function() {
    $("body").removeClass("preloader-site");
  });
});
jQuery(function($) {
  $("#main_menu li").addClass("nav-item");
  $("#main_menu li a").addClass("nav-link");
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 6000,
    animateOut: "fadeIn",
    animateIn: "fadeIn",
    autoplayHoverPause: true,
    navText: [
      '<span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="carousel-control-text">Previous</span>',
      '<span class="carousel-control-next-icon" aria-hidden="true"></span><span class="carousel-control-text">Previous</span>'
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
  $(window).scroll(function() {
    $(".scrollToTop").css({ display: "block" });
    if ($(window).scrollTop() > 10) {
      $(".sticky-wrapper").addClass("fixedTop");
      $(".scrollToTop").css({ bottom: "5px" });
      $("#navbarNav").css({ justifyContent: "flex-start" });
    } else {
      $(".sticky-wrapper").removeClass("fixedTop");
      $(".scrollToTop").css({ bottom: "-100px" });
      $("#navbarNav").css({ justifyContent: "flex-end" });
    }
  });
  $(".scrollToTop").click(function(e) {
    $("html,body").animate(
      {
        scrollTop: 0
      },
      500
    );
  });
  $(".sub-menu").addClass("animated slideInUp");
  $("#main_menu li ul.sub-menu").addClass("dropdown-menu");

  $("#view_price").submit(function(e) {
    e.preventDefault();
    var UIController = function() {
      return {
        valInput: $("select#room-select").val(),
        showUI: function(obj) {
          var firstContentPrice = document.querySelector("#content_price")
            .firstElementChild;
          while (firstContentPrice) {
            firstContentPrice.remove();
            firstContentPrice = document.querySelector("#content_price")
              .firstElementChild;
          }
          // document.querySelector('#content_price').empty();
          document
            .querySelector("#content_price")
            .insertAdjacentHTML("beforeend", obj.content.rendered);
        }
      };
    };
    var Controller = (function(UIctr, Handctr) {
      // get vale

      const domain = document.location.origin + document.location.pathname;
      var ValSelectForm = UIctr().valInput;

      // show flowing val
      $.ajax({
        type: "GET",
        url:"/wp-json/wp/v2/posts/" + ValSelectForm,
        success: function(data) {
          UIctr().showUI(data);
        },
        error: function(error) {
          throw error;
        }
      });

      return {
        init: function() {
          console.log("application has started");
        }
      };
    })(UIController);
    Controller.init();
  });
  $('#main_menu>li').hover(function(){
    $(this).append('<span class="active-line" style="margin-left: auto; margin-right: auto; left: 0; right: 0;"></span>');
  }, function(){
    $(this).children().last().remove();
  });
  // for(let i =0; i<objList.length; i++ ){
  //  if(objList[i].hasClass('current-menu-parent')){
  //    console.log('k có lam gì');
  //  }else{
  //    console.log('fjdfhsdf');
  //  }
  //     console.log('da hover phan tu thu' + i);
  //     if(objList[i].hasClass('current-menu-parent')){
  //       console.log('bỏ qua');
  //     }
  //   });
  // }

 
  if ($("#main_menu li").hasClass("current-menu-parent")) {
    $("#main_menu li.current-menu-parent").append(
      '<span class="active-line" style="margin-left: auto; margin-right: auto; left: 0; right: 0;"></span>'
    );
  }
  if ($("#main_menu li ul.sub-menu").hasClass("dropdown-menu")) {
    $("#main_menu li ul.sub-menu")
      .prev()
      .addClass("dropdown-toggle");
  }
  $(".slider-caption p").addClass("wow fadeInUp animated");
  $(".slider-caption p").attr("data-wow-duration", "1s");
  
  
});
