var   $blockShow = $('.notify-block'),
      $closeBtn = $('.close-btn'),
	  $burger = $('.burger'),
      $first = $('.bg-first'),
      $second = $('.bg-second'),
      $third = $('.bg-third'),
      $menu = $('.menu'),
      $scrollbtn = $('.scrollup-btn');


// setTimeout

   $scrollbtn.css('bottom', $blockShow.outerHeight() + 20);
// setTimeout

setTimeout(function () {

    $blockShow.slideDown('slow');

}, 2000);

$closeBtn.click(function () {

    $blockShow.stop().slideUp("slow" , function () {
        $(this).remove();
        $scrollbtn.css('bottom', '25px' );
    });
    return false;
<<<<<<< HEAD

});
=======
>>>>>>> 792bd72032acd24b6207a09e16e26a5f3a58bfef


// contact-link to contact us

    $('.contact-link').click(function () {

        $("html, body").stop().animate({
            scrollTop: $('.contacts').offset().top
        }, 1000);
        return false;

    });
    
// responsive Burger

    $burger.click(function () {

        $first .toggleClass("bg-first-toggle");
        $second.toggleClass("dnone");
        $third.toggleClass("bg-third-toggle");
        $menu.stop().slideToggle("slow");
    });

// scrollupBtnShow

    function scrollupBtnShow() {
        var scrollTop = $(window).scrollTop();

        if ((scrollTop >= $(window).height() / 2)) {
           $scrollbtn.removeClass("hide");
        }
        else {
            $scrollbtn.addClass("hide");
        }
    }

    scrollupBtnShow();

    $(window).scroll(function () {
        scrollupBtnShow();
    });

    $scrollbtn.click(function () {

        $("html, body").stop().animate({
            scrollTop: 0
        },500)

    });

