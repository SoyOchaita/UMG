// resources/js/app.js

import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.swiper');
  const slideCount = container.querySelectorAll('.swiper-slide').length;

  new Swiper('.swiper', {
    loop: slideCount > 1,        // <- loop solo si hay 2+ slides
    autoplay: { delay: 4000 },
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
});
