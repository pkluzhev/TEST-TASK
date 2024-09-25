import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

document.addEventListener("DOMContentLoaded", () => {
  const swiper = new Swiper('.feedback-slider', {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 48,

    loop: true,
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
  })
})