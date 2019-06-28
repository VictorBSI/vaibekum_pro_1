/* HỖ TRỢ ONLINE */
jQuery(document).ready(function($) {
	var hover = true;
	$(".vbk-support").hover(function(){
		if(hover === true){
			$('.contact-show-info').addClass('open-show-support-online');
			hover = false;
		}
		else{
			$('.contact-show-info').removeClass('open-show-support-online');
			hover = true;
		}
	});
})

/* MOBILE */
$(document).ready(function() {
    if ($(window).width() < 768) {
        var showMobile = true
        $('#mega_menu li > .toggle').on('click', function(e) {
            if (showMobile == true) {
                $('.sub-menu').addClass('show-mobile');
                showMobile = false;
            } else {
                $('.sub-menu').removeClass('show-mobile');
                showMobile = true;
            }
        });
    }
});

$(document).ready(function() {
    if ($(window).width() < 320) {
        var showMobile = true
        $('#mega_menu li > .toggle').on('click', function(e) {
            if (showMobile == true) {
                $('.sub-menu').addClass('show-mobile');
                showMobile = false;
            } else {
                $('.sub-menu').removeClass('show-mobile');
                showMobile = true;
            }
        });
    }
});

$(document).ready(function() {
    if ($(window).width() < 1024) {
        var showMobile = true
        $('#mega_menu li > .toggle').on('click', function(e) {
            if (showMobile == true) {
                $('.sub-menu').addClass('show-mobile');
                showMobile = false;
            } else {
                $('.sub-menu').removeClass('show-mobile');
                showMobile = true;
            }
        }
		}
});
