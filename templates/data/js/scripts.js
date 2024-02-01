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
const delta = 100;

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
                slidesPerView: 2,
                spaceBetween: 6.67,
                initialSlide: 1,
                autoplayDisableOnInteraction: false,
                autoplay: {
                    delay: 8000,
                },
                breakpoints: {
                    1300: {
                        slidesPerView: 4,
                        spaceBetween: 6.67
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 6
                    }
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
    $(document).ready(function () {
        const mostSelled = $(".products-wrapper .most-selled .grid-block");
        const windowWidth = $(window).width();
        if (mostSelled.length) {
            const products = mostSelled.find(".product");
            const hiddenProducts = products.slice(3);
            hiddenProducts.hide();
            const numberOfHiddenProducts = hiddenProducts.length;

            let remainingHiddenProducts = numberOfHiddenProducts;

            if (products.length <= 3) {
                $("#show-more-most-selled").hide();
            }

            $("#show-more-most-selled").on("click", function (e) {
                e.preventDefault();
                const productsToShow = hiddenProducts.slice(0, 3);
                productsToShow.show();

                remainingHiddenProducts -= productsToShow.length;

                if (remainingHiddenProducts <= 0) {
                    $(this).hide();
                }
            });
        }
    });
    $(document).ready(function () {
        const mostSelled = $(".subcategory .grid-block");
        const windowWidth = $(window).width();
        const sub = $(document).find(".subcategory");
        if (windowWidth <= 1300) {
            if (mostSelled.length) {
                const products = mostSelled.find(".block");
                const btn = sub.find(".btn-holder");
                const hiddenProducts = products.slice(5);
                hiddenProducts.hide();
                const numberOfHiddenProducts = hiddenProducts.length;

                let remainingHiddenProducts = numberOfHiddenProducts;

                if (products.length > 5) {
                    btn.css('display', 'flex');
                }

                $("#show-sub-cat").on("click", function (e) {
                    e.preventDefault();
                    const productsToShow = hiddenProducts.slice(0, 5);
                    productsToShow.show();

                    remainingHiddenProducts -= productsToShow.length;

                    if (remainingHiddenProducts <= 0) {
                        $(this).hide();
                    }
                });
            }
        }
    });



    $(document).on("click", ".less", function (e) {
        e.preventDefault();
        const q = $(this).parent();
        const i = q.find(".number");

        let num = parseInt(i.attr("value")); // Získání aktuální hodnoty a převedení na číslo
        num = num - 1; // Zvýšení hodnoty o jedna

        if (num < 1) {
            num = 1;
        } else {
            i.attr("value", num);
        }
    });
    $(document).on("click", ".more", function (e) {
        e.preventDefault();
        const q = $(this).parent();
        const i = q.find(".number");

        let num = parseInt(i.attr("value")); // Získání aktuální hodnoty a převedení na číslo
        num = num + 1; // Zvýšení hodnoty o jedna

        i.attr("value", num);
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
        const colorHolder = $(document).find("#color");
    
        if (colorHolder.length > 0) { // Ověření existence elementu
            const color = colorHolder.find("input[name='color']");
            if (color.is(":checked")) {
                $('#color-error').css('display', 'none');
            } else {
                e.preventDefault();
                $('#color-error').css('display', 'block');
            };
        }
    
        const sizeHolder = $(document).find("#size");
        if (sizeHolder.length > 0) { // Ověření existence elementu
            const size = sizeHolder.find("input[name='size']");
            if (size.is(":checked")) {
                $('#size-error').css('display', 'none');
            } else {
                e.preventDefault();
                $('#size-error').css('display', 'block');
            };
        }
    });
    
    $(document).on("click", ".switcher", function (e) {
        e.preventDefault();
        const mainBlock = $(document).find(".descriptions");
        const id = $(this).attr("id");

        $(this).closest('.switcher').siblings().removeClass('active');
        $(this).closest('.switcher').addClass('active');

        mainBlock.find(".content-part[data-target='" + id + "']").addClass("active").siblings().removeClass("active");

    });
    $(document).on("click", ".faq-switcher", function (e) {
        e.preventDefault();
        const mainBlock = $(this).closest(".faq");
        const id = $(this).attr("id");

        $(this).closest('.faq-switcher').siblings().removeClass('active');
        $(this).closest('.faq-switcher').addClass('active');

        mainBlock.find(".content-part[data-target='" + id + "']").addClass("active").siblings().removeClass("active");

    });

    $(document).on("click", ".faq-question", function (e) {
        e.preventDefault();
        const t = $(this);
        const title = t.find(".title-block");
        const content = t.find(".content-block");

        title.toggleClass("active");
        content.toggleClass("active");

    });
    $(document).on("click", ".more-products", function (e) {
        e.preventDefault();
        const t = $(this);
        const main = t.closest(".flex-row");
        const related = main.find(".related");

        t.toggleClass("active");
        related.toggleClass("active");
    });

    $(document).on("click", "#sale_code", function (e) {
        e.preventDefault();
        const l = $(this).parent();
        const r = l.find(".row");

        $(this).toggleClass("active");
        r.toggleClass("active");
    });
    $(document).on("click", ".dropdown .active-select", function (e) {
        e.preventDefault();
        const l = $(this).parent();
        const s = l.find(".select-block");
        s.toggleClass("active");
        l.toggleClass("active")
    });
    $(document).on("click", ".dropdown .select-block .select-item", function (e) {
        e.preventDefault();
        let value = $(this).find('a').attr("data-slug");
        let id = $(this).attr("id");
        let text = $(this).find('a').html();



        let dropdown = $(this).closest(".dropdown");
        const s = dropdown.find(".select-block");
        let activeSelect = dropdown.find('.active-select a');
        s.removeClass("active");
        dropdown.removeClass("active");
        activeSelect.html(text);
        let select = dropdown.find("select");
        select.val(value).change();
    });


    $("#company").change(function () {
        if ($(this).is(":checked")) {
            $(".company-hidden").addClass("active");
        } else {
            $(".company-hidden").removeClass("active");
        }
    });
    $("#secondAddress").change(function () {
        if ($(this).is(":checked")) {
            $(".second-address").addClass("active");
        } else {
            $(".second-address").removeClass("active");
        }
    });
    $("#note").change(function () {
        if ($(this).is(":checked")) {
            $(".message-block").addClass("active");
        } else {
            $(".message-block").removeClass("active");
        }
    });

    $(document).ready(() => {
        const setHeightEqualToWidth = () => {
            $('.product-item .img').each((index, element) => {
                const width = $(element).width();
                $(element).height(width);
            });
        };

        setHeightEqualToWidth();

        $(window).on('resize orientationchange', () => {
            setHeightEqualToWidth();
        });
    });


    $(document).on("click", ".hamburger", function (e) {
        e.preventDefault();
        $(".mobile-navigation").addClass("active");
        $(".bg-nav").addClass("active");
        $("html").addClass("remove")
    });

    $(document).on("click", ".close", function (e) {
        e.preventDefault();
        $(".mobile-navigation").removeClass("active");
        $(".bg-nav").removeClass("active");
        $("html").removeClass("remove")
        $(".filtering-holder").removeClass("active");
    });
    $(document).on("click", "#filtration-active", function (e) {
        e.preventDefault();
        $(".filtering-holder").addClass("active");
        $("html").addClass("remove")
    });
    $(document).on("click", ".filtering-holder .bg", function (e) {
        e.preventDefault();
        $("html").removeClass("remove")
        $(".filtering-holder").removeClass("active");
    });
    $(document).on("click", ".bg-nav", function (e) {
        e.preventDefault();
        $(".mobile-navigation").removeClass("active");
        $(".bg-nav").removeClass("active");
        $("html").removeClass("remove")
    });
    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $(".mobile-navigation").removeClass("active");
            $(".bg-nav").removeClass("active");
            $("html").removeClass("remove");
            $(".filtering-holder").removeClass("active");
        }
    });

    $(document).on("click", "#categories-dropdownd", function (e) {
        e.preventDefault();
        const li = $(this).closest("li");
        const ul = li.find("ul");
        li.toggleClass("active");
        ul.toggleClass("active");
    });
    $(document).on("click", ".dropdown", function (e) {

        const m = $(this).find(".menu");
        const s = $(this).find("span .arrow");
        s.toggleClass("active");
        m.toggleClass("active");
    });


    $('.fake-search').click(function (event) {
        event.preventDefault();
        const f = $(document).find("#search-form");
        f.addClass("active");
        $('#search-input').focus();
        event.stopPropagation();
    });
    $(document).click(function (event) {
        const formElement = $('#search-form');
        if (!$(formElement).is(event.target) && $(formElement).has(event.target).length === 0) {
            $(formElement).removeClass('active');
        }
    });

    $(document).on("click", ".product-item", function (e) {
        $(this).toggleClass("active");

        const windowWidth = $(window).width();

        if (windowWidth <= 480) {
            const link = $(this).find('.btn').attr('href');

            window.location.href = link;
        }
    });
    $(document).ready(function () {
        const holder = $(document).find("#images-holder");
        const wrapper = holder.find(".wrapper");
        let imgCount = wrapper.find(".img").length;

        wrapper.width(imgCount * (110 + 12));
    });


    $(document).on("click", ".link-part .grid-block .block .menu-title", function (e) {
        const t = $(this);
        const windowWidth = $(window).width();
        const img = t.find("img");
        const b = t.closest(".block");
        const ul = b.find("ul");
        if (windowWidth < 768) {
            img.toggleClass("active");
            ul.toggleClass("active");
        }
    });
});