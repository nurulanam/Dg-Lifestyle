jQuery(document).ready(function ($) {
    const swiper = new Swiper('.swiper.swiper-categories', {
        slidesPerView: 1,
        spaceBetween: 30,
        direction: 'horizontal',
        loop: true,
        // autoplay: {
        //     delay: 2500,
        //     disableOnInteraction: false,
        //   },
        breakpoints: {
            576: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
            },
            992: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 80,
            },
            1600: {
                slidesPerView: 5,
                spaceBetween: 80,
            }
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      });
});