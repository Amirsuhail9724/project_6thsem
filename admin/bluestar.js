// swiper intilization 

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  effect: "fade",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

//   customer reviews and rating 

var swiper = new Swiper(".customer-rating", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    loop:true,
    autoplay:{
        delay:3000,
        disableonInteraction:false,
    },
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

  // staff card 

  var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
  });

  //alert hide
  function alerthide()
  {
    // alert("hy");
    let a=document.getElementById("alert-id");
    a.style.setProperty('display','none');
  }
