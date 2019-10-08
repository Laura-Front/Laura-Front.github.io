$('[data-toggle="tooltip"]').tooltip();



$('.owl-carousel').owlCarousel({
    loop:true,
    nav: false,
    keyboard: true,
    margin:10,
    responsive:{
        0:{
            items:6
        },
        767:{
            items:10
        },
        1000:{
            items:18
        }
    }
});


$('[data-fancybox="images"]').fancybox({

    loop: true,

});

