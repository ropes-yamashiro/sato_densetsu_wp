"use strict";

// ── WORKスライダー ──
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.work__slider');
    if (!slider || !slider.querySelector('.swiper-wrapper')) return;

    const slideCount = slider.querySelectorAll('.swiper-slide').length;

    new Swiper('.work__slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        enabled: slideCount >= 2,
        scrollbar: {
            el: '.work__scrollbar',
            draggable: true,
        },
        navigation: {
            prevEl: '.work__btn-prev',
            nextEl: '.work__btn-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
                enabled: slideCount >= 4,
                centerInsufficientSlides: true,
            },
        },
    });

    const toggleUI = () => {
        const isPC = window.innerWidth >= 768;
        const hide = isPC ? slideCount < 4 : slideCount < 2;
        slider.classList.toggle('swiper--no-ui', hide);
    };

    toggleUI();
    window.addEventListener('resize', toggleUI);
});
