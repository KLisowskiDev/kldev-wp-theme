var swiperHomepageSlider = new Swiper(".swiper", {
    speed: 600,
    loop: true,
    effect: 'fade',
    
    /* autoplay: {
      delay: 3000,
      disableOnInteraction: true,
    }, */

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});