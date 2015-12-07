$(window).load(function(){
  $('.loader').fadeOut();
});

$(document).ready(function() {
    $('#my-video').backgroundVideo({
        pauseVideoOnViewLoss: true
    });
});

$(window).scroll(function(){
    var top = $(window).scrollTop();
    if((top > 400 && $('body').hasClass('homepage')) || (top > 200 && !$('body').hasClass('homepage'))){
        $('.navbar-default').css('background-color','rgba(44, 62, 80, 0.80)');
        $(".logo").stop().animate({
            height: "100px"
            }, 100, function() {
            // Animation complete.
        });
    }else{
        $('.navbar-default').css('background-color','rgba(44, 62, 80, 0)');
          $(".logo").stop().animate({
              height: "200px"
              }, 100, function() {
              // Animation complete.
          });
    }
});
