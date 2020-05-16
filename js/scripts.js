$(function () {
    //aqui vai todo nosso codigo js
    $('nav.mobile').click(function () {
        var listMenu = $('nav.mobile ul');
        listMenu.slideToggle();
    })



    if ($('target').length > 0) {
        var elemento = '#' + $('target').attr('target');

        var divScroll = $(elemento).offset().top;

        $('html,body').animate({ scrollTop: divScroll }, 2000);
    }



})