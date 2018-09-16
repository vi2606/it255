$('.navbar-nav>li>a').on('click', function () {
    $('.navbar-collapse').collapse('hide');
});



function modalTurnOn() {
    // document.getElementById('sem-login').style.display = 'block';

    // had to remove fixed top b/c it didnt fade
    // had to add body class b/c of padding for fixed nav
    $('body').toggleClass("body");
    $('#main-nav').removeClass("fixed-top");

}

function modalTurnOff() {
    // document.getElementById('sem-login').style.display = 'none';

    // $('body').css("padding-top: 1px;");
    $('body').toggleClass("body");
    // $('#main-nav').removeClass("fixed-top");
    $('#main-nav').addClass("fixed-top");

}