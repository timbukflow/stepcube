$(document).ready(function () {
    
    setTimeout(function(){$('#loader').fadeOut(800)},800);
    
    // building A //
    
    $(".a").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#a").position().top - 100},800);
    });
    
    $(".ae1w1").hover(function() {
        $(".ae1w1").toggleClass("activ");
        $(".ae1").nextAll().toggleClass("up");});
    $(".ae1w2").hover(function() {
        $(".ae1w2").toggleClass("activ");
        $(".ae1").nextAll().toggleClass("up");});
    $(".ae1w3").hover(function() {
        $(".ae1w3").toggleClass("activ");
        $(".ae1").nextAll().toggleClass("up");}); 
    
    $(".ae2w1").hover(function() {
        $(".ae2w1").toggleClass("activ");
        $(".ae2").nextAll().toggleClass("up");});
    $(".ae2w2").hover(function() {
        $(".ae2w2").toggleClass("activ");
        $(".ae2").nextAll().toggleClass("up")});
    $(".ae2w3").hover(function() {
        $(".ae2w3").toggleClass("activ");
        $(".ae2").nextAll().toggleClass("up")});
    
    $(".ae3w1").hover(function() {
        $(".ae3w1").toggleClass("activ");
        $(".ae3").nextAll().toggleClass("up")});
    $(".ae3w2").hover(function() {
        $(".ae3w2").toggleClass("activ");
        $(".ae3").nextAll().toggleClass("up")});
    $(".ae3w3").hover(function() {
        $(".ae3w3").toggleClass("activ");
        $(".ae3").nextAll().toggleClass("up")});
    
    $(".ae4w1").hover(function() {
        $(".ae4w1").toggleClass("activ");});
    $(".ae4w2").hover(function() {
        $(".ae4w2").toggleClass("activ");});
                   
    // building B //

    $(".b").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#b").position().top - 100},800);
    });
    
    $(".beover").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#be").position().top - 100},800);
    });
    
    $(".be1w1").hover(function() {
        $(".be1w1").toggleClass("activ");
        $(".be1").nextAll().toggleClass("up");});
    $(".be1w2").hover(function() {
        $(".be1w2").toggleClass("activ");
        $(".be1").nextAll().toggleClass("up");});
    $(".be1w3").hover(function() {
        $(".be1w3").toggleClass("activ");
        $(".be1").nextAll().toggleClass("up");}); 
    
    $(".be2w1").hover(function() {
        $(".be2w1").toggleClass("activ");
        $(".be2").nextAll().toggleClass("up");});
    $(".be2w2").hover(function() {
        $(".be2w2").toggleClass("activ");
        $(".be2").nextAll().toggleClass("up")});
    $(".be2w3").hover(function() {
        $(".be2w3").toggleClass("activ");
        $(".be2").nextAll().toggleClass("up")});
    
    $(".be3w1").hover(function() {
        $(".be3w1").toggleClass("activ");
        $(".be3").nextAll().toggleClass("up")});
    $(".be3w2").hover(function() {
        $(".be3w2").toggleClass("activ");
        $(".be3").nextAll().toggleClass("up")});
    $(".be3w3").hover(function() {
        $(".be3w3").toggleClass("activ");
        $(".be3").nextAll().toggleClass("up")});
    
    $(".be4w1").hover(function() {
        $(".be4w1").toggleClass("activ");});
    $(".be4w2").hover(function() {
        $(".be4w2").toggleClass("activ");});
    
    // building C //
    
    $(".c").hover(function() {
        $("html, body").stop(true).animate({scrollTop:$("#c").position().top - 100}, 800);
    });
    
    $(".ce1w1").hover(function() {
        $(".ce1w1").toggleClass("activ");
        $(".ce1").nextAll().toggleClass("up");});
    $(".ce1w2").hover(function() {
        $(".ce1w2").toggleClass("activ");
        $(".ce1").nextAll().toggleClass("up");});
    $(".ce1w3").hover(function() {
        $(".ce1w3").toggleClass("activ");
        $(".ce1").nextAll().toggleClass("up");}); 
    
    $(".ce2w1").hover(function() {
        $(".ce2w1").toggleClass("activ");
        $(".ce2").nextAll().toggleClass("up");});
    $(".ce2w2").hover(function() {
        $(".ce2w2").toggleClass("activ");
        $(".ce2").nextAll().toggleClass("up")});
    $(".ce2w3").hover(function() {
        $(".ce2w3").toggleClass("activ");
        $(".ce2").nextAll().toggleClass("up")});
    
    $(".ce3w1").hover(function() {
        $(".ce3w1").toggleClass("activ");
        $(".ce3").nextAll().toggleClass("up")});
    $(".ce3w2").hover(function() {
        $(".ce3w2").toggleClass("activ");
        $(".ce3").nextAll().toggleClass("up")});
    $(".ce3w3").hover(function() {
        $(".ce3w3").toggleClass("activ");
        $(".ce3").nextAll().toggleClass("up")});
    
    $(".ce4w1").hover(function() {
        $(".ce4w1").toggleClass("activ");});
    $(".ce4w2").hover(function() {
        $(".ce4w2").toggleClass("activ");});
    
    // plan hover //
    
    $(".planb").click(function(){
        $(this).children('div').fadeToggle("planhover");
    });
    
    /*
    $(".plan").mouseleave(function(){
        $(this).fadeOut(200);
    });
    */
    
    
    // nav by scroll small //
    
    var mainHeader = $('.cd-auto-hide-header'),
		belowNavHeroContent = $('.sub-nav-hero'),
		headerHeight = mainHeader.height();

	var scrolling = false,
		previousTop = 0,
		currentTop = 0,
		scrollDelta = 10,
		scrollOffset = 150;

	mainHeader.on('click', '.nav-trigger', function(event){
		event.preventDefault();
		mainHeader.toggleClass('nav-open');
	});

	$(window).on('scroll', function(){
		if( !scrolling ) {
			scrolling = true;
			(!window.requestAnimationFrame)
				? setTimeout(autoHideHeader, 250)
				: requestAnimationFrame(autoHideHeader);
		}
	});

	$(window).on('resize', function(){
		headerHeight = mainHeader.height();
	});

	function autoHideHeader() {
		var currentTop = $(window).scrollTop();

		( belowNavHeroContent.length > 0 ) 
			? checkStickyNavigation(currentTop)
			: checkSimpleNavigation(currentTop);

	   	previousTop = currentTop;
		scrolling = false;
	}

	function checkSimpleNavigation(currentTop) {
	    if (previousTop - currentTop > scrollDelta) {
	    	mainHeader.removeClass('is-hidden');
	    } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
	    	mainHeader.addClass('is-hidden');
	    }
	}
    
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