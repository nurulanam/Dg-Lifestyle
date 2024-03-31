jQuery(document).ready(function ($) {
    const swiper1 = new Swiper('.swiper.swiper-categories1', {
        slidesPerView: 2,
        spaceBetween: 10,
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
        breakpoints: {
            576: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            992: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1600: {
                slidesPerView: 5,
                spaceBetween: 20,
            }
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      });
      const swiper2 = new Swiper('.swiper.swiper-categories2', {
        slidesPerView: 2,
        spaceBetween: 10,
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            reverseDirection: true,
          },
        breakpoints: {
            576: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            992: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1600: {
                slidesPerView: 5,
                spaceBetween: 20,
            }
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      });
});