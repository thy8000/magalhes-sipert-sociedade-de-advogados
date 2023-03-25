var topHeader = jQuery(".top-menu .top-menu__nav");
let darkLogo = jQuery('.dark-logo');
let lightLogo = jQuery('.light-logo');
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
        lightLogo.addClass('d-none');

        darkLogo.removeClass('d-none');
        header.removeClass('is-fixed bg-transparent text-white');
    }
    else{
        header.addClass('is-fixed bg-transparent text-white'); 
        darkLogo.addClass('d-none');
        
        lightLogo.removeClass('d-none');
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

/**
 * Componente Carousel 
 */
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  if( jQuery('.carousel-slide').length === 0)
    return;

  let i;
  let slides = document.getElementsByClassName("carousel-slide");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

/* Componente float-whatsapp-button */
jQuery('.float-whatsapp-button').on("click", function(e) {
  if(jQuery(".float-whatsapp-button").css('left') === '-140px'){
    jQuery(".float-whatsapp-button").css('left', '0');
  }
  else{
    jQuery(".float-whatsapp-button").css('left', '-140px');
  }
});

 