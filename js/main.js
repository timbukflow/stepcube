$(document).ready(function () {

    setTimeout(function(){$('#loader').fadeOut(800)},800);

    // 04 Obergeschoss //
    $(".og04book").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#og04").position().top - 100},800);});

    $(".og04").hover(function() {
        $(".og04up").nextAll().toggleClass("up");});

    $(".og04w0427").hover(function() {
        $(".og04w0427").toggleClass("activ");});
    $(".og04w0428").hover(function() {
        $(".og04w0428").toggleClass("activ");});
    $(".og04w0429").hover(function() {
        $(".og04w0429").toggleClass("activ");});
    $(".og04w0430").hover(function() {
        $(".og04w0430").toggleClass("activ");});

    // 03 Obergeschoss //
    $(".og03book").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#og03").position().top - 100},800);});

    $(".og03").hover(function() {
        $(".og03up").nextAll().toggleClass("up");});

    $(".og03w0323").hover(function() {
        $(".og03w0323").toggleClass("activ");});
    $(".og03w0324").hover(function() {
        $(".og03w0324").toggleClass("activ");});
    $(".og03w0325").hover(function() {
        $(".og03w0325").toggleClass("activ");});
    $(".og03w0326").hover(function() {
        $(".og03w0326").toggleClass("activ");});

    // 02 Obergeschoss //
    $(".og02book").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#og02").position().top - 100},800);});

    $(".og02").hover(function() {
        $(".og02up").nextAll().toggleClass("up");});

    $(".og02w0213").hover(function() {
        $(".og02w0213").toggleClass("activ");});
    $(".og02w0214").hover(function() {
        $(".og02w0214").toggleClass("activ");});
    $(".og02w0215").hover(function() {
        $(".og02w0215").toggleClass("activ");});
    $(".og02w0216").hover(function() {
        $(".og02w0216").toggleClass("activ");});
    $(".og02w0217").hover(function() {
        $(".og02w0217").toggleClass("activ");});
    $(".og02w0218").hover(function() {
        $(".og02w0218").toggleClass("activ");});
    $(".og02w0219").hover(function() {
        $(".og02w0219").toggleClass("activ");});
    $(".og02w0220").hover(function() {
        $(".og02w0220").toggleClass("activ");});
    $(".og02w0221").hover(function() {
        $(".og02w0221").toggleClass("activ");});
    $(".og02w0222").hover(function() {
        $(".og02w0222").toggleClass("activ");});

    // 01 Obergeschoss //
    $(".og01book").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#og01").position().top - 100},800);});

    $(".og01").hover(function() {
        $(".og01up").nextAll().toggleClass("up");});

    $(".og01w0103").hover(function() {
        $(".og01w0103").toggleClass("activ");});
    $(".og01w0104").hover(function() {
        $(".og01w0104").toggleClass("activ");});
    $(".og01w0105").hover(function() {
        $(".og01w0105").toggleClass("activ");});
    $(".og01w0106").hover(function() {
        $(".og01w0106").toggleClass("activ");});
    $(".og01w0107").hover(function() {
        $(".og01w0107").toggleClass("activ");});
    $(".og01w0108").hover(function() {
        $(".og01w0108").toggleClass("activ");});
    $(".og01w0109").hover(function() {
        $(".og01w0109").toggleClass("activ");});
    $(".og01w0110").hover(function() {
        $(".og01w0110").toggleClass("activ");});
    $(".og01w0111").hover(function() {
        $(".og01w0111").toggleClass("activ");});
    $(".og01w0112").hover(function() {
        $(".og01w0112").toggleClass("activ");});

    // 00 Erdgeschoss //
    $(".eg00book").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#eg00").position().top - 100},800);});

    $(".eg00").hover(function() {
        $(".eg00up").nextAll().toggleClass("up");});

    $(".eg00g001").hover(function() {
        $(".eg00g001").toggleClass("activ");});
    $(".eg00g002").hover(function() {
        $(".eg00g002").toggleClass("activ");});
    $(".eg00g003").hover(function() {
        $(".eg00g003").toggleClass("activ");});
    $(".eg00b004").hover(function() {
        $(".eg00b004").toggleClass("activ");});
    $(".eg00b005").hover(function() {
        $(".eg00b005").toggleClass("activ");});
    $(".eg00w001").hover(function() {
        $(".eg00w001").toggleClass("activ");});
    $(".eg00w002").hover(function() {
        $(".eg00w002").toggleClass("activ");});

    // plan hover //

    $(".planb").click(function(){
        $(this).children('div').fadeToggle("planhover");
    });

    /*
    $(".plan").mouseleave(function(){
        $(this).fadeOut(200);
    });
    */


    // nav //

    $(".menu").click(function(){
        $(".menu").toggleClass('menufade');
    });

     // home fade in animation //

    setTimeout(function () {
    $('.einleitung').addClass('fadeInUp');
    $('.cd-auto-hide-header').addClass('fadeInDown');}, 500
);

    // impressum //

    $('.impressum').click(function() {
        var totoggle = $(this).attr("data-toggle");
        $(totoggle).slideToggle(500);
        $(totoggle).next().hide();

        if ($(totoggle).is(":visible")) {
            $('html,body').animate({scrollTop:$(totoggle).offset().top}, 1000);
        }
    });

});
