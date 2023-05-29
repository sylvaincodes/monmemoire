$(document).ready(function () {
      
    $(".open-menu-btn").click(function () {
      $(".mobile-menu").css("transform", "translateX(0%)");
      $(".mobile-menu").css("transition", "1s");
    });
    $(".close-menu-btn").click(function () {
      $(".mobile-menu").css("transform", "translateX(-200%)");
      $(".mobile-menu").css("transition", "0.6s");
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