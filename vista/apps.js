window.addEventListener('load', function () {
  new Glider(document.querySelector('.carousel-list'), {
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
      }, {
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



/*Perfil Dentista */
function Dentista(fullnameM,idM) {
  ul = document.getElementById('ul1');
  while (ul.firstChild) {
    ul.removeChild(ul.firstChild);
  }

  ul.insertAdjacentHTML('afterbegin', `
    <li class="px-3 username-list-item">
      <span>
          ${fullnameM}
          <div class="flecha">
              <img src="vista/image/flecha-down.svg" alt="flecha">
          </div>
      </span>
      <ul class="username-sublist">
          <li class="username-subitem">
              <a href="index.php?action=perfilM">
                  <div>
                      <img src="vista/image/perfil-dentista.svg" alt="mi perfil"> Mi Perfil
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="index.php?action=citas-medicos&dni=${idM}">
                  <div>
                      <img src="vista/image/cita.svg" alt="cita"> Mis Citas
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="index.php?action=mis-tratamientos&dni=${idM}">
                  <div>
                      <img src="vista/image/cita.svg" alt="close-sesion"> Mis Tratamientos
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="index.php?action=cerrar-sesion">
                  <div>
                      <img src="vista/image/cerrar-sesion.svg" alt="close-sesion"> Cerrar Sesión
                  </div>
              </a>
          </li>
      </ul>
    </li>`);
}


function test(){
  let num = 3;
  console.log(num);
}

function Paciente(fullName,id) {
  ul = document.getElementById('ul1');
  while (ul.firstChild) {
    ul.removeChild(ul.firstChild);
  }

  ul.insertAdjacentHTML('afterbegin', `
    <li class="px-3 username-list-item">
      <span>
          ${fullName}
          <div class="flecha">
              <img src="vista/image/flecha-down.svg" alt="flecha">
          </div>
      </span>
      <ul class="username-sublist">
          <li class="username-subitem">
              <a href="index.php?action=perfil">
                  <div>
                      <img src="vista/image/perfil-paciente.svg" alt="mi perfil"> Mi Perfil
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="index.php?action=controles&dni=${id}">
                  <div>
                      <img src="vista/image/cita.svg" alt="cita"> Mis Controles
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="index.php?action=tratamiento&dni=${id}">
                  <div>
                      <img src="vista/image/cita.svg" alt="close-sesion"> Mi Tratamiento
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="index.php?action=cerrar-sesion">
                  <div>
                      <img src="vista/image/cerrar-sesion.svg" alt="close-sesion"> Cerrar Sesión
                  </div>
              </a>
          </li>
      </ul>
    </li>`);
}


function clickTheLink() {
  window.location.href = 'validar.php';
}


/*register new tratment */
try {
  function viewTreatment() {
    let typeTreatment = document.querySelector('#treatment').value;
    switch (typeTreatment) {
      case 1:
        precio = 2500.0;
        cuota = (precio / 5);
        break;
      case 2:
        precio = 1500.0;
        cuota = (precio / 5);
        break;
      case 3:
        precio = 3500.0;
        cuota = (precio / 5);
        break;
      case 4:
        precio = 3000.0;
        cuota = (precio / 5);
        break;
      default:
        break;
    }
    // cuota = precio / 5;

    document.querySelector('#precio').value = `El precio es ${precio}`;
    document.querySelector('#cuota').value = `La cuota mensual es de ${cuota}`;

    console.log(typeTreatment);
    console.log(precio);
    console.log(cuota);

  }
}
catch (error) {
  console.log(error);
}



function enlace(){
  window.open('mis.tratamientos.php')
  // window.location.href('mis.tratamientos.php')
}


function redirect(){
  console.log('entrando');
  window.location.href = "./index.php?action=perfil";
}