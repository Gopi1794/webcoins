import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

new Swiper ('.swiper' ,{

      direction: "horizontal",
      
      loop:true,

      navigation:{
      nextEl: ".swiper-button-next",
      prevEl:".swiper-button-prev"
      },
      autoplay:{
        delay: 3000
      },
    });