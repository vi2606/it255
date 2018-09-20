$('.navbar-nav>li>a').on('click', function () {
    $('.navbar-collapse').collapse('hide');
});



function modalTurnOn() {

    $('body').toggleClass("body");
    $('#main-nav').removeClass("fixed-top");

}

function modalTurnOff() {

    $('body').toggleClass("body");
    $('#main-nav').addClass("fixed-top");

}

function logOut() {

}