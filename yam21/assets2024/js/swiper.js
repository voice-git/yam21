const swiper = new Swiper(".swiper", {
  // modules: [Navigation, Pagination, Autoplay, EffectFade],
  loop: true,
  // effect: 'fade',
  speed: 2000,
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 4000,
  },
  pagination: {
    el: ".swiper-pagination",
    type: 'fraction',
    formatFractionCurrent: function (number) {
      return ('0' + number).slice(-2); // 先頭に0をつける、二桁表示
    },
    formatFractionTotal: function (number) {
      return ('0' + number).slice(-2); // 先頭に0をつける、二桁表示
    },
    renderFraction: function (currentClass, totalClass) {
        return '<span class="swiper-custom-fraction copperplate ' + currentClass + '">0</span>' + '<span class="copperplate"><span>  -  </span></span>' + '<span class="copperplate ' + totalClass + '"></span>';
    }
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
});