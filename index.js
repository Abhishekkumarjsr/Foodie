let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.link');

menu.onclick = () => {
    menu.classList.toggle('menu');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('menu');
    navbar.classList.remove('active');
}

document.querySelector('#search-label').onclick = () => {
    document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () => {
    document.querySelector('#search-form').classList.remove('active');
}

document.addEventListener("DOMContentLoaded", function () {
    // Initialize Swiper
    var swiper = new Swiper(".home-slider", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 4500,
            disableOnInteraction: false, // optional, enables auto play even after user interaction
        },
    });
});


