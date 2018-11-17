var $header = $('header');
var $hambuger = $('.hamburger', $header);
var $slide_menu = $('.slidein_links', $header);
var $overlay = $('.overlay');
var $close = $('#close', $slide_menu);

$hambuger.click(toggleSlide);
$overlay.click(toggleSlide);
$close.click(toggleSlide);

$('main').scroll(function() {
    if($(this).scrollTop()) {
        $header.addClass('scrolling');
    } else {
        $header.removeClass('scrolling');
    }
})

switch(window.location.pathname) {
    case '/':
    case '/index.php':
        $('.about_me', $header).addClass('current');
        break;
    case '/skills.php':
        $('.skills', $header).addClass('current');
        break;
    case '/projects.php':
        $('.projects', $header).addClass('current');
        break;
    case '/contact.php':
        $('.contact', $header).addClass('current');
        break;
}

//-------------------------------- Functions -----------------------------------

function toggleSlide() {
    $slide_menu.toggleClass('out');
    $overlay.toggleClass('show');
}