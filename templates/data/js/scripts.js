$(window).on("load", function () {

});


// const updateControlsPosition = () => {
//     const container = document.querySelector('.container');
//     const marginRightValue = window.getComputedStyle(container).marginRight;
//     const newRightValue = parseInt(marginRightValue) + 10 + 'px';
//     const carouselControlRight = document.querySelector('.swiper-button-next-main');
//     if (carouselControlRight) carouselControlRight.style.right = newRightValue;
//     const carouselControlLeft = document.querySelector('.swiper-button-prev-main');
//     if (carouselControlLeft) carouselControlLeft.style.right = `calc(${newRightValue} + 50px)`;
// };

// document.addEventListener('DOMContentLoaded', updateControlsPosition);
// window.addEventListener('resize', updateControlsPosition);


jQuery(document).ready(function ($) {

    const swiper1 = new Swiper('.main-swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        // autoplayDisableOnInteraction: false,
        // autoplay: {
        //     delay: 6000,
        // },
        // breakpoints: {
        //     1920: {
        //         slidesPerView: 2,
        //         spaceBetween: 16
        //     }
        // },
        pagination: {
            el: ".main-pagination",
            clickable: true,
            type: 'bullets',
        },
        navigation: {
            nextEl: '.swiper-button-next-main',
            prevEl: '.swiper-button-prev-main',
        },
    });
    $(document).ready(function () {
        const multySlider = $(".prod-swiper");
        const sliderPrev = $(".prod-prev");
        const sliderNext = $(".prod-next");


        for (i = 0; i < multySlider.length; i++) {

            $(multySlider[i]).addClass('prod-' + i);
            $(sliderPrev[i]).addClass('prev-' + i);
            $(sliderNext[i]).addClass('next-' + i);

            var swipers = new Swiper('.prod-' + i, {
                // Set sliders parameters
                slidesPerView: 4,
                spaceBetween: 6.67,
                initialSlide: 1,
                autoHeight: true,
                loop: true,
                navigation: {
                    nextEl: '.next-' + i,
                    prevEl: '.prev-' + i,
                },

            });
        }
    });


});