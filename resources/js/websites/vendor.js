import jquery from 'jquery';
import Swiper from 'swiper/swiper-bundle.min';
import "jquery-validation";
import Cleave from 'cleave.js'
import toastr from "toastr";

window.$ = window.jQuery = jquery;
window.Swiper = Swiper;
window.Cleave = Cleave;
window.toastr = toastr;
require('../bootstrap');
require('cleave.js/dist/addons/cleave-phone.kh');

require('@fancyapps/fancybox/dist/jquery.fancybox.min');

//image gallery
$('[data-fancybox="gallery"]').fancybox({
    buttons: [
        "slideShow",
        "thumbs",
        "zoom",
        "fullScreen",
        "close"
    ],
    loop: false,
    protect: true
});

//button animention
var animateButton = function(e) {

    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');

    e.target.classList.add('animate');
    setTimeout(function() {
        e.target.classList.remove('animate');
    }, 700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
    bubblyButtons[i].addEventListener('click', animateButton, false);
}

//scroll top
// var btn = $('#button');

// $(window).scroll(function() {
//     if ($(window).scrollTop() > 300) {
//         btn.addClass('show');
//     } else {
//         btn.removeClass('show');
//     }
// });

// btn.on('click', function(e) {
//     e.preventDefault();
//     $('html, body').animate({ scrollTop: 0 }, '300');
// });

// scroll top2
var btn = $('#buttons');
$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.fadeIn()
    } else {
        btn.fadeOut();
    }
});
btn.on('click', function(e) {
    e.preventDefault();

    $('html, body').animate({ scrollTop: 0 }, 100);
    $(".rocket").addClass("fly");
    setTimeout(function() {
        $(".rocket").removeClass("fly");
    }, 1000);
});

//     $('html, body').animate({ scrollTop: 0 }, '300');
// });

// new Cleave('input.phone',{
//     delimiters: [' ', ' '],
//     blocks: [3, 3, 4,4],
//     uppercase: true,
// });

new Cleave('#fm-register .input-phone', {
    phone: true,
    phoneRegionCode: 'kh'
});

new Cleave('#fm-login .input-phone', {
    phone: true,
    phoneRegionCode: 'kh'
});