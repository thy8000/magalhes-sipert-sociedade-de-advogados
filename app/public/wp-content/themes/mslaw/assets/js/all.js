//console.log(jQuery(document).width());
var topHeader = jQuery(".top-menu .top-menu__nav");
if(jQuery(document).width() > 992){
    jQuery(".top-menu .top-menu__nav").addClass('is-fixed bg-transparent text-white');

    jQuery(window).on("load", function(e) {
        var windowScrollTop = jQuery(window).scrollTop(); 
        it9_mslaw_change_nav_style_by_window_scroll(windowScrollTop, topHeader);
    });

    jQuery(window).on("scroll", function(e) {
        var windowScrollTop = jQuery(window).scrollTop(); 
        it9_mslaw_change_nav_style_by_window_scroll(windowScrollTop, topHeader);
    });
}
else{
    jQuery(".top-menu .top-menu__nav").addClass('bg-light shadow');
}

function it9_mslaw_change_nav_style_by_window_scroll(windowScrollTop, header){
    if(windowScrollTop > 10){
        header.addClass('bg-light shadow');
        header.removeClass('is-fixed bg-transparent text-white');
    }
    else{
        header.addClass('is-fixed bg-transparent text-white'); 
        header.removeClass('bg-light shadow');     
    }
}
