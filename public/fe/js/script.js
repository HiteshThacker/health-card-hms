let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('._navbar');


menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

const glightbox = GLightbox({
    selector: '.glightbox'
  });

// let founder = document.querySelector('#founder');
// if (window.innerWidth<=600)
// {
//     founder.classList.toggle('image');
// }
// else
// {
//     founder.classList.remove('image');
// }



//////////////////////// it is may diffrent
var swiper = new Swiper(".reviews-slider", {
    loop:true,
    grabCursor:true,
    spaceBetween: 20,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
    },
  });

