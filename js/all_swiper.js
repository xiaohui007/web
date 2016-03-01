$(document).ready(function() {

  var bannerSwiper = new Swiper('.banner-swiper',{
    pagination: '.banner-pagination',
    speed: 500,
    autoplay: 3000,
    autoplayDisableOnInteraction: false,
    loop: true,
    grabCursor: true,
    paginationClickable: true
  });

  var hotSwiper = new Swiper('.hot-swiper',{
    speed: 500,
    loop: true
  });

});