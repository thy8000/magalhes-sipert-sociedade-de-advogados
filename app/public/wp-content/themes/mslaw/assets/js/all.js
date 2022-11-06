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

document.addEventListener('DOMContentLoaded', function () {
    var url = postShare.url
    var title = postShare.title
 
    createShareLinksDesktop(url, title)
 })
 
 function createShareLinksDesktop(postUrl, postTitle) {
    var shareButtonList = document.querySelectorAll('.post-share .link')
 
    shareButtonList.forEach((shareButton) => {
       shareButton.addEventListener('click', function (clickEvent) {
          var shareButtonDataUrl = shareButton.dataset.url
          var shareButtonDataName = shareButton.dataset.name
 
          if (shareButtonDataName !== 'copylink') {
             shareButtonDataUrl = shareButtonDataUrl.replace(/{url}/g, postUrl)
             shareButtonDataUrl = shareButtonDataUrl.replace(/{title}/g, postTitle)
             shareButtonDataUrl = encodeURI(shareButtonDataUrl)
 
             window.open(shareButtonDataUrl)
             return
          }
 
          copyPostUrl(postUrl)
       })
    })

 }
 
 function copyPostUrl(postUrl) {
    navigator.clipboard.writeText(postUrl)
 
    showAlertAfterCopyPostUrl()
 }
 
 function showAlertAfterCopyPostUrl() {
    document.querySelector('.copylink-alert').classList.remove('translate-y-300')
    setTimeout(() => {
       document.querySelector('.copylink-alert').classList.add('translate-y-300')
    }, '5000')
 }
 