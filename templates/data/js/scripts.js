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
const fixedHeader = () => {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    const header = document.querySelector("#header");

    if (scrollTop > 100) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
};
document.addEventListener("DOMContentLoaded", () => {
    fixedHeader();
});

window.addEventListener("scroll", () => {
    fixedHeader();
});

let lastScrollTop = 0;
const delta = 200;

$(window).scroll(function () {
    const st = $(this).scrollTop();

    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    if (st > lastScrollTop) {
        $('#header').addClass('hide');
    } else {
        $('#header').removeClass('hide');
    }
    lastScrollTop = st;
});



jQuery(document).ready(function ($) {

    const swiper1 = new Swiper('.main-swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        // speed: 1000,
        autoplayDisableOnInteraction: false,
        autoplay: {
            delay: 6000,
        },
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
                autoplayDisableOnInteraction: false,
                autoplay: {
                    delay: 8000,
                },
                autoHeight: true,
                loop: true,
                navigation: {
                    nextEl: '.next-' + i,
                    prevEl: '.prev-' + i,
                },

            });
        }
    });
    $(document).ready(() => {
        const gall = $("#detail-gallery");
        if (gall.length > 0) {
            const firstImageSrc = gall.find(".images-holder .img img:first").attr("src");
            gall.find(".selected-image").attr("src", firstImageSrc);
            const loadingElement = gall.find(".loading");

            loadingElement.addClass("hide");

            setTimeout(() => {
                loadingElement.css("display", "none");
            }, 1000);


        }
    });

    $(document).ready(function () {
        $('.zoom').on('mousemove', function (e) {
            var zoomer = $(this);
            var offsetX = e.offsetX || e.touches[0].pageX;
            var offsetY = e.offsetY || e.touches[0].pageY;
            var x = offsetX / zoomer.width() * 100;
            var y = offsetY / zoomer.height() * 100;
            zoomer.css('background-position', x + '% ' + y + '%');
        });
    });

    $(document).ready(function () {
        $("#min_price,#max_price").on('change', function () {
            const min_price_range = parseInt($("#min_price").val());
            const max_price_range = parseInt($("#max_price").val());
            const maxPriceString = $(".max_price_number_holder").attr("data-price");
            const minPriceString = $(".min_price_number_holder").attr("data-price");

            var maxPrice = parseInt(maxPriceString);
            var minPrice = parseInt(minPriceString);
            console.log(maxPrice)


            const maximum = 1000;


            if (min_price_range >= max_price_range) {
                const min_price_range = max_price_range - 50;
                $('#min_price').val(min_price_range);
            }
            if (min_price_range < minPrice) {
                const min_price_range = minPrice;
                const max_price_range = minPrice + 100;
                $('#min_price').val(min_price_range);
                $('#max_price').val(max_price_range);
            }
            if (max_price_range > maxPrice) {
                const max_price_range = maxPrice - 10;
                $('#max_price').val(max_price_range);
            }
            $("#slider-range").slider({
                values: [min_price_range, max_price_range]
            });
        });

        $(function () {
            const maxPriceString = $(".max_price_number_holder").attr("data-price");
            const minPriceString = $(".min_price_number_holder").attr("data-price");

            const maxPrice = parseInt(maxPriceString);
            const minPrice = parseInt(minPriceString);
            $("#slider-range").slider({
                range: true,
                orientation: "horizontal",
                min: minPrice,
                max: maxPrice,
                values: [minPrice, maxPrice],
                step: 1,
                slide: function (event, ui) {
                    if (ui.values[0] + 1 >= ui.values[1]) {
                        return false;
                    }
                    $("#min_price").val(ui.values[0]);
                    $("#max_price").val(ui.values[1]);
                    $("#min_price_hidden").val(ui.values[0]);
                    $("#max_price_hidden").val(ui.values[1]);
                },

            });
            $("#min_price").val($("#slider-range").slider("values", 0));
            $("#max_price").val($("#slider-range").slider("values", 1));
        });
    });

    $(document).on("click", ".select-block .select-item", function (e) {
        e.preventDefault();
        const value = $(this).find('a').attr("data-slug");
        const id = $(this).attr("id");
        const text = $(this).find('a').text();

        console.log(value);

        const dropdown = $(this).closest(".sorting-section");
        const activeSelect = dropdown.find('.select-item a');

        // activeSelect.text(text);
        const select = dropdown.find("select");
        select.val(value).change();
        activeSelect.addClass("active");
    });

    $(document).ready(function () {
        const filter = $(document).find(".filtering-holder");
        if (filter.length > 0) {
            const num = 8;
            filter.find(".part").each(function () {
                const p = $(this);
                const c = p.find(".checkbox-block");
                const l = c.find("label");
                const showAll = p.find(".show-more");
                const quantity = showAll.find(".quantity");

                if (l.length > num) {
                    showAll.css('display', 'flex');
                    l.slice(num).addClass('hide');
                    quantity.text(l.filter('.hide').length);
                }

                showAll.click(function (e) {
                    e.preventDefault();
                    l.filter('.hide').slice(0, num).removeClass('hide');
                    quantity.text(l.filter('.hide').length);
                    if (l.filter('.hide').length === 0) {
                        showAll.css('display', 'none');
                    }
                });
            });
        }
    });
    $(document).on("click", "#less", function (e) {
        e.preventDefault();
        let num = parseInt($("#count").attr("value"));
        num = num - 1;

        if (num < 1) {
            num = 1;
        } else {
            $("#count").attr("value", num);
        }
    });
    $(document).on("click", "#more", function (e) {
        e.preventDefault();
        let num = parseInt($("#count").attr("value"));
        num = num + 1;


        $("#count").attr("value", num);
    });
    // $(document).on("click", "#copy", function (e) {
    //     e.preventDefault();
    //     const text = $(this).text();
    // });

    $(document).ready(function () {
        $('#copy').click(function (e) {
            e.preventDefault();
            const $this = $(this);
            const text = $this.text();
            copyToClipboard(text);

            const t = $(this).closest('.text');
            const tool = t.find(".tooltip");
            tool.css('display', 'block');
            setTimeout(function () {
                tool.css('display', 'none');
            }, 2000);
        });

        function copyToClipboard(text) {
            const tempInput = document.createElement('input');
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
        }
    });
    $(document).on("click", "#detail-gallery .images-holder .img", function (e) {
        e.preventDefault();
        const t = $(this);
        const imgSrc = t.find("img").attr("src");
        const gall = $("#detail-gallery");
        
        gall.find(".selected-image").attr("src", imgSrc);
    
        gall.find(".zoom").css("background-image", "url(" + imgSrc + ")");
    });
    
    $(document).on("click", "#send-form", function (e) {
        if ($("input[name='size']").is(":checked")) {
            $('#size-error').css('display', 'none');
        } else {
            e.preventDefault();
            $('#size-error').css('display', 'block');
        };

        if ($("input[name='color']").is(":checked")) {
            $('#color-error').css('display', 'none');
        } else {
            e.preventDefault();
            $('#color-error').css('display', 'block');
        };
    });

    $(document).on("click", ".switcher", function (e) {
        e.preventDefault();
        var mainBlock = $(document).find(".descriptions");
        var id = $(this).attr("id");
        // var selected = mainBlock.find(".items");
        var modules = $(document).find(".modules");
        var content = $(document).find(".content-part");

        $(this).closest('.switcher').siblings().removeClass('active');
        $(this).closest('.switcher').addClass('active');

        mainBlock.find(".content-part[data-target='" + id + "']").addClass("active").siblings().removeClass("active");
        // var target = $(document).find(".content-part, .one");
        // if ($(target).length > 0) {
        //     $("html, body").animate({
        //         scrollTop: $(target).offset().top - 150
        //     }, 700);
        // }
        // var scroll_btn = $(document).find(".scroll_to_top");
        // scroll_btn.addClass("active");
    });
});