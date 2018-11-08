var $header = $('header');
var $hambuger = $('.hamburger', $header);
var $slide_menu = $('.slidein_links', $header);
var $overlay = $('.overlay');

$hambuger.click(toggleSlide);
$overlay.click(toggleSlide);
$('#main_container').scroll(function() {
    if($(this).scrollTop()) {
        $header.addClass('scrolling');
    } else {
        $header.removeClass('scrolling');
    }
})














//-------------------- Functions ------------------

function toggleSlide() {
    $slide_menu.toggleClass('out');
    $overlay.toggleClass('show');
}