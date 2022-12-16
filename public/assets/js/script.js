var swiper = new Swiper(".slide-content", {
    speed: 600,
    spaceBetween: 30,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'ture',
    
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    
    slidesPerView: 'auto',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
      0: {
        slidesPerView: 1,
      },
      580: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
    },
  });

  var swiper = new Swiper(".slide-content-client", {
    speed: 600,
    slidesPerView: '4',
    spaceBetween: 30,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: ".swiper-pagination-client",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      800: {
        slidesPerView: 3,
      },
      950: {
        slidesPerView: 4,
      },
    },
  });
