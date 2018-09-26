// On Scroll Header Change
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $("#header").addClass("active-header");
    }else{
    	$("#header").removeClass("active-header");
    }
})