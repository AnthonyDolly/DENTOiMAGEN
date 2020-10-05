window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel-list'),{
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: '.carousel-indicators',
    arrows: {
      prev: '.arrow-before',
      next: '.arrow-after'
    },
    responsive: [
        {
          // screens greater than >= 775px
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            itemWidth: 150,
            duration: 0.25
          }
        },{
          // screens greater than >= 1024px
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            itemWidth: 150,
            duration: 0.25
          }
        }
      ]


    });

})