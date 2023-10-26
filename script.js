// const navEl = document.querySelector ('.navbar');

// window.addEventListener('scroll', () => {
//     if(window.scrollY >= 56){
//         navEl.classList.add ('navbar-scrolled');
//     }
//     else if (window.scrollY < 56) {
//         navEl.classList.remove('navbar-scrolled');
//     }
// });

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  });
     
  //News Title Slicer
  let counter = 0;
  while(counter < 999999){
    parseInt(counter);
    let news = document.getElementById('title'+counter).innerHTML;
    if(news.length > 40){
      document.getElementById('title'+counter).innerHTML = news.slice(0, 35) + '...';
    }
    counter++;
  };


