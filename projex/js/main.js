var   $blockShow = $('.notify-block'),
      $closeBtn = $('.close-btn'),
	  $burger = $('.burger'),
      $first = $('.bg-first'),
      $second = $('.bg-second'),
      $third = $('.bg-third'),
      $menu = $('.menu'),
      $scrollbtn = $(".scrollup-btn");



    setTimeout(function () {

    $blockShow.slideDown('slow');

    }, 3000);

    $closeBtn.click(function () {

    $blockShow.stop().slideUp("slow" , function () {
        $(this).remove();
    });
        // return false;

    });


    $('.contact-link').click(function () {

        $("html, body").stop().animate({ scrollTop: $('.contacts').offset().top}, 1000);
        return false;

    });
    

    $burger.click(function () {

        $first .toggleClass("bg-first-toggle");
        $second.toggleClass("dnone");
        $third.toggleClass("bg-third-toggle");
        $menu.stop().slideToggle("slow");
    });


    function scrollupBtnShow() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop >= $(window).height() / 2) {
            $scrollbtn.removeClass("hide");
        } else {
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

