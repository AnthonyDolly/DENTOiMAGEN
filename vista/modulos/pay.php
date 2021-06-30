<body  style="height: 700px">



  <script src="https://checkout.culqi.com/v2"></script>
  <h1 style="padding: 15rem 0;">Paga con Culqi</h1>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="vista/plugins/swal/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="vista/plugins/swal/sweetalert2.min.css">

  <?php
  $sid = $_SESSION['sid'] = session_id();
  $_SESSION['totCart'] = 150000;
  $totalPagar = $_GET['pay'];
  $dni_comp = '72042683';
  $nombre_doc = $_GET['nameDoc'];
  $correo_comp = 'dieguito.98.xd@gmail.com';
  ?>


  <script>
    window.onload = function() {
      Culqi.open();
      // pagoSi();
      // e.preventDefault();
    };

    // Configura tu llave pública
    Culqi.publicKey = 'pk_test_d56ceb832f281cf3';


    //descompocición del total:
    var largo, millones, millares, centenas, decimales, totalPago;
    // largo = <?php echo strlen($totalPagar); ?>;
    totalPago = <?php echo ($totalPagar); ?>;
    totalPago = totalPago * 100;


    // Configura tu Culqi Checkout
    Culqi.settings({
      title: 'DentoImagen',
      currency: 'PEN',
      description: 'Tratamiento/Control',
      amount: totalPago,
    });

    // Usa la funcion Culqi.open() en el evento que desees
    $('#buyButton').on('click', function(e) {
      // Abre el formulario con las opciones de Culqi.settings
      Culqi.open();
      e.preventDefault();
    });

    function pagoNo() {
      window.location.assign("./index.php?action=controles&dni=10203040");
    }

    function pagoSi() {
      window.location.href = <?php echo '"./index.php?action=controles&idCM=' . $_GET['idCM'] . '&dni=' . $_GET['dni'] . '  &pagado=si" ' ?>
    }

    function culqi() {
      if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
        //hacia tu servidor con Ajax
        var tokenemail = Culqi.token.email;
        var tokenid = Culqi.token.id;

        var data = {
          producto: 'Productos varios. Frank Moreno',
          precio: totalPago,
          tokenid: tokenid,
          tokenemail: tokenemail,
          customer_id: " <?php echo $dni_comp; ?> ",
          email: "<?php echo $correo_comp; ?> "
        };

        console.log(data.precio);


        var url = "./vista/modulos/plugins/proceso.php";
        $.post(url, data, function(res) {
          // alert( ' Tu pago se Realizó con ' + res + '. Agradecemos tu preferencia.');
          if (res == "exito") {
            // alert(res);
            Swal.fire({
              icon: 'success',
              title: '¡Control Pagado!',
              showConfirmButton: false,
            })
            setTimeout(() => {
              pagoSi();
            }, 2000);
            // alert('Tu pago se Realizó con ' + res + '. Agradecemos tu preferencia.');

          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: '¡Error al pagar!'
            })
            setTimeout(() => {
              pagoNo();
            }, 3000);
          }
        });


      } else {
        // ¡Hubo algún problema!
        console.log(Culqi.error);
      }







    };
  </script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>