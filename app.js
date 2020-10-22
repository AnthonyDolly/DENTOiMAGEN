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





/*register new tratment */
try{
  function viewTreatment () {
    let typeTreatment = document.querySelector('#treatment').value;
    switch (typeTreatment) {
      case 1:
        precio = 2500.0;
        cuota = (precio/5);
        break;
      case 2:
        precio = 1500.0;
        cuota = (precio/5);
        break;
      case 3:
        precio = 3500.0;
        cuota = (precio/5);
        break;   
      case 4:
        precio = 3000.0;
        cuota = (precio/5);
        break; 
      default:
        break;
    }
    // cuota = precio / 5;
  
    document.querySelector('#precio').value = `El precio es ${ precio }`;
    document.querySelector('#cuota').value = `La cuota mensual es de ${ cuota }`;
  
    console.log(typeTreatment);
    console.log(precio);
    console.log(cuota);
  
  }
  }
  catch (error){
    console.log(error);
  }

