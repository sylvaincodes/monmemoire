$(document).ready(function () {
      
    /*------------- Side bar menu ---------------*/
    $(".open-menu-btn").click(function () {
      $(".mobile-menu").css("transform", "translateX(0%)");
      $(".mobile-menu").css("transition", "1s");
    });
    $(".close-btn").click(function () {
      $(".mobile-menu").css("transform", "translateX(-200%)");
      $(".mobile-menu").css("transition", "0.6s");
    });

    /*------------- Logout form ---------------*/
    $("#logout-btn,#logout-btn2").click(function () {
      if (!confirm("Etes vous sûre de vouloir quitter ?")) {
        return false;
      }else{
        document.getElementById('logout-form-back').submit();
      }
    });

    //-------- Modal------------//
    $(".modal-btn").click(function () {
      $(".modal").css("transform", "scale(1)");
      $(".modal").css("transition", "0.2s");
    });

    $(".close-btn").click(function () {
      $(".modal").css("transform", "translateY(-200%)");
      $(".modal").css("transition", "0.8s");
    });


});


/*------------- Header fade ---------------*/

// Get the offset position of the header
var header = document.getElementById("footer");
var position = header.offsetTop;
// var position_nav_bottom = nav_bottom.offsetTop;

$(window).scroll(function () {
    if (window.pageYOffset>0) {
      $("#header").addClass('fixed')
    }else{
      $("#header").removeClass('fixed')
    }
});


