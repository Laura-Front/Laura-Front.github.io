$('.form-input').keyup(function () {
    if ($(this).val().trim() !== '') {
        $(this).addClass('selected');
    }
});


$('.form-footer a').click(function () {

    $('.form__block').animate({height: "toggle", opacity:"toggle" }, "slow");

});