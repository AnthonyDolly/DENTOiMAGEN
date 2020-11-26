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
function Dentista() {
  ul = document.getElementById('ul1');
  while (ul.firstChild) {
    ul.removeChild(ul.firstChild);
  }

  ul.insertAdjacentHTML('afterbegin', `
    <li class="px-3 username-list-item">
      <span>
          Laura Sifuentes Lozano
          <div class="flecha">
              <img src="image/flecha-down.svg" alt="flecha">
          </div>
      </span>
      <ul class="username-sublist">
          <li class="username-subitem">
              <a href="mi-perfil.php">
                  <div>
                      <img src="image/perfil-dentista.svg" alt="mi perfil"> Mi Perfil
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="mis-citas.php">
                  <div>
                      <img src="image/cita.svg" alt="cita"> Mis Citas
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="mis-tratamientos.php">
                  <div>
                      <img src="image/cita.svg" alt="close-sesion"> Mis Tratamientos
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="index.php">
                  <div>
                      <img src="image/cerrar-sesion.svg" alt="close-sesion"> Cerrar Sesión
                  </div>
              </a>
          </li>
      </ul>
    </li>`);
}
{/* <script type="text/javascript">
          
</script> */}

function Paciente(nombreCompleto) {
  ul = document.getElementById('ul1');
  while (ul.firstChild) {
    ul.removeChild(ul.firstChild);
  }

  ul.insertAdjacentHTML('afterbegin', `
    <li class="px-3 username-list-item">
      <span>
       ${nombreCompleto}
          <div class="flecha">
              <img src="image/flecha-down.svg" alt="flecha">
          </div>
      </span>
      <ul class="username-sublist">
          <li class="username-subitem">
              <a href="mi-perfilP.php">
                  <div>
                      <img src="image/perfil-paciente.svg" alt="mi perfil"> Mi Perfil
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="mis-citasP.php">
                  <div>
                      <img src="image/cita.svg" alt="cita"> Mis Controles
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="mi-tratamiento.php">
                  <div>
                      <img src="image/cita.svg" alt="close-sesion"> Mi Tratamiento
                  </div>
              </a>
          </li>
          <li class="username-subitem">
              <a href="index.php">
                  <div>
                      <img src="image/cerrar-sesion.svg" alt="close-sesion"> Cerrar Sesión
                  </div>
              </a>
          </li>
      </ul>
    </li>`
  );
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

