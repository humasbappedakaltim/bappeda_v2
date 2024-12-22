$(document).ready(function () {
    (function ($) {

        document.addEventListener('DOMContentLoaded', function () {
            const cursorMarkup = `
              <div class="custom-cursor__cursor"></div>
              <div class="custom-cursor__cursor-two"></div>
            `;
            document.body.insertAdjacentHTML('beforeend', cursorMarkup);

            const cursor = document.querySelector('.custom-cursor__cursor');
            const cursorInner = document.querySelector('.custom-cursor__cursor-two');
            const links = document.querySelectorAll('a');

            // Mouse move event
            document.addEventListener('mousemove', function (e) {
              const x = e.clientX;
              const y = e.clientY;
              cursor.style.transform = `translate3d(calc(${x}px - 50%), calc(${y}px - 50%), 0)`;
              cursorInner.style.left = `${x}px`;
              cursorInner.style.top = `${y}px`;
            });

            // Mouse down event
            document.addEventListener('mousedown', function () {
              cursor.classList.add('click');
              cursorInner.classList.add('custom-cursor__innerhover');
            });

            // Mouse up event
            document.addEventListener('mouseup', function () {
              cursor.classList.remove('click');
              cursorInner.classList.remove('custom-cursor__innerhover');
            });

            // Hover effect for links
            links.forEach(link => {
              link.addEventListener('mouseover', () => {
                cursor.classList.add('custom-cursor__hover');
              });
              link.addEventListener('mouseleave', () => {
                cursor.classList.remove('custom-cursor__hover');
              });
            });
          });

    $('.portfolio-slider').owlCarousel({
        loop: false,
        center: false,
        margin: 100,
        autoplay: true,
        items: 2,
        dots: false,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            991: {
                items: 2,
                nav: false
            },
            1024: {
                items: 2,
                nav: false
            }
        }
    });

    $('.testimonial').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        items: 1,
        dots: false,
        margin: 10,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            991: {
                items: 1,
                nav: false
            },
            1024: {
                items: 1,
                nav: false
            }
        }
    });

    $('.trusted-logos').owlCarousel({
        loop: false,
        items: 4,
        dots: false,
        autoplay: false,
        autoplayHoverPause: true,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            991: {
                items: 3,
                nav: false
            },
            1024: {
                items: 4,
                nav: false
            }
        }
    });

    })(jQuery);

    // TO TOP BTN //
    const toTopBtn = document.querySelector('.to-top-btn');

    // Function to show/hide the button based on scroll position
    window.addEventListener('scroll', () => {
        if (window.scrollY > window.innerHeight / 2) { // 50vh
            toTopBtn.classList.add('show');
            toTopBtn.classList.remove('hide');
        } else {
            toTopBtn.classList.add('hide');
            toTopBtn.classList.remove('show');
        }
    });

    // Scroll to top functionality
    toTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
    // TO TOP BTN END //

    // FLOATING SOCMED //
    const floatingSocmedToggle = document.getElementById("floating-socmed-toggle");
    floatingSocmedToggle.addEventListener("click", () => {
        const floatingItems = document.querySelector('.floating-items');
        const floatingSlide = document.querySelector('.swiper-floating-socmed-slide');
        const floatingX = document.querySelector('.swiper-x-slide');

        if (floatingItems.style.maxHeight === "0px" || floatingItems.style.maxHeight === "") {
            floatingItems.style.maxHeight = "500px";
            floatingX.style.display = "flex";
        } else {
            floatingItems.style.maxHeight = "0px";
            floatingX.style.display = "none";
        }
    });
    // FLOATING SOCMED END //

    // SWIPER //
    var swiperBanner = new Swiper("#swiper-banner", {
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
    });

    var swiperFloatingSocmed = new Swiper("#floating-socmed-toggle", {
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
            delay: 1500,
            disableOnInteraction: true,
        }
    });

    var swiperNews = new Swiper("#swiper-news", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
        nextEl: ".btn-next",
        prevEl: ".btn-prev",
        },
        pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        clickable: true,
        renderFraction: function (currentClass, totalClass) {
            return `<span class="${currentClass} text-white"></span> <span class="text-grey">dari</span> <span class="${totalClass} text-grey"></span>`;
            }
        }
    });

    var swiperAward = new Swiper(".swiper-award", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
        nextEl: ".btn-next",
        prevEl: ".btn-prev",
        },
        pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        clickable: true,
        renderFraction: function (currentClass, totalClass) {
            return `<span class="${currentClass} text-white"></span> <span class="text-grey">dari</span> <span class="${totalClass} text-grey"></span>`;
            }
        }
    });

    var swiperMaps = new Swiper(".swiper-maps", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
        nextEl: ".btn-next",
        prevEl: ".btn-prev",
        },
        pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        clickable: true,
        renderFraction: function (currentClass, totalClass) {
            return `<span class="${currentClass} text-white"></span> <span class="text-grey">dari</span> <span class="${totalClass} text-grey"></span>`;
            }
        }
    });

    var swiperNewsItem = new Swiper(".swiper-news-item", {
        spaceBetween: 10,
        slidesPerView: 'auto',
        direction: "vertical",
        mousewheel: true,
        pagination: {
            clickable: true,
        },
    });

    var swiperInformation = new Swiper(".swiper-information", {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
        nextEl: ".btn-next",
        prevEl: ".btn-prev",
        },
        pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        clickable: true,
        renderFraction: function (currentClass, totalClass) {
            return `<span class="${currentClass} text-white"></span> <span class="text-grey">dari</span> <span class="${totalClass} text-grey"></span>`;
            }
        }
    });

    var swiperPpid = new Swiper("#swiper-ppid", {
        spaceBetween: 30,
        centeredSlides: true,
        effect: "fade",
        loop: true,
        slidesPerView: 'auto',
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
        nextEl: ".btn-next",
        prevEl: ".btn-prev",
        },
        pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        clickable: true,
        renderFraction: function (currentClass, totalClass) {
            return `<span class="${currentClass} text-white"></span> <span class="text-grey">dari</span> <span class="${totalClass} text-grey"></span>`;
            }
        }
    });

    var swiperDate = new Swiper("#swiper-date", {
        spaceBetween: 10,
        slidesPerView: 4,
        centeredSlides: false,
        loop: false,
        navigation: {
            nextEl: ".swiper-date-next",
            prevEl: ".swiper-date-prev",
            clickable: true,
        },
        mousewheel: {
            forceToAxis: false,
            releaseOnEdges: true,
            sensitivity: 1,
        },
    });

    var swiperPostCategory = new Swiper("#swiper-post-category", {
        spaceBetween: 15,
        slidesPerView: 2,
        loop: false,
        navigation: {
            nextEl: ".swiper-date-next",
            prevEl: ".swiper-date-prev",
            clickable: true,
        },
        mousewheel: {
            forceToAxis: false,
            releaseOnEdges: true,
            sensitivity: 1,
        },
        breakpoints: {
            1200: {
                slidesPerView: 4,
            },
            576: {
                slidesPerView: 3,
            },
        },
    });


    var swiperAppBappeda = new Swiper("#swiper-app-bappeda", {
        spaceBetween: 20,
        slidesPerView: 2,
        loop: true,
        mousewheel: {
            forceToAxis: false,
            releaseOnEdges: true,
            sensitivity: 1,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            576: {
                slidesPerView: 3,
            },
        },
    });

    var swiperYoutube = new Swiper("#swiper-youtube", {
        spaceBetween: 10,
        slidesPerView: 4,
        mousewheel: {
            forceToAxis: false,
            releaseOnEdges: true,
            sensitivity: 1,
        },
    });

    var swiperAllAgenda = new Swiper("#swiper-all-agenda", {
        spaceBetween: 15,
        slidesPerView: 'auto',
        direction: "vertical",
        mousewheel: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 800,
        effect: 'slide',
        transitionTimingFunction: 'ease-in-out',
    });

    // setTimeout(() => {
    //     swiperAllAgenda.update();
    // }, 100);

    var swiperPresentAgenda = new Swiper("#swiper-present-agenda", {
        spaceBetween: 15,
        slidesPerView: 'auto',
        direction: "vertical",
        mousewheel: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 800,
        effect: 'slide',
        transitionTimingFunction: 'ease-in-out',
    });

    // setTimeout(() => {
    //     swiperPresentAgenda.update();
    // }, 100);


    document.addEventListener(
        "wheel",
        function (e) {
            const targetElement = e.target.closest("#swiper-date, #swiper-youtube, #swiper-post-category, #swiper-app-bappeda");
            // console.log("Target element:", targetElement);

            if (targetElement) {
                let swiperInstance = null;
                switch (targetElement.id) {
                    case "swiper-post-category":
                        swiperInstance = swiperPostCategory;
                        break;
                    case "swiper-date":
                        swiperInstance = swiperDate;
                        break;
                    case "swiper-youtube":
                        swiperInstance = swiperYoutube;
                        break;
                    case "swiper-app-bappeda":
                        swiperInstance = swiperAppBappeda;
                        break;
                }

                // console.log("Swiper instance:", swiperInstance);

                if (swiperInstance) {
                    const isAtBeginning = swiperInstance.isBeginning;
                    const isAtEnd = swiperInstance.isEnd;

                    if (
                        (isAtBeginning && e.deltaY < 0) ||
                        (isAtEnd && e.deltaY > 0)
                    ) {
                        return;
                    }

                    e.preventDefault();
                    // console.log("Scroll prevented.");
                }
            }
        },
        { passive: false }
    );

    let swiperNewsContainer = document.querySelector("#swiper-news");
    swiperNewsContainer.addEventListener("mouseenter", function() {
        swiperNews.autoplay.stop();
    });
    swiperNewsContainer.addEventListener("mouseleave", function() {
        swiperNews.autoplay.start();
    });
    // SWIPER END //

    // ASN CARD //
    document.querySelectorAll('.asn-card-item').forEach(card => {
        card.addEventListener('click', () => {
            if(card.classList.contains('active')) {
                card.classList.remove('active');
            } else {
                card.classList.add('active');
            }
        });
    });
    // ASN CARD END //



    // function newDate() {
    //     return new Date().getFullYear();
    // }

    // window.onload = function () {
    //     document.getElementById("autodate").innerHTML = newDate();
    // };
});
