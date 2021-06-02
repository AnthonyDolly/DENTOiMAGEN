<body style="height: 700px">
  <!-- <script src="https://checkout.culqi.com/v2"></script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <h1 style="padding: 15rem 0;">Paga con Culqi</h1>
  <!-- <button type="submit" class="button btn-proceed-checkout" id="buyButton" name="prePago" title="Procesar con el Pago"><span>Procesar con el Pago</span></button> -->

  <?php
  $sid = $_SESSION['sid'] = session_id();
  $_SESSION['totCart'] = 150000;
  $totalPagar = $_GET['pay'];
  // $totalPagar = $totalPagar+'000';

  $dni_comp = '72042683';
  $nombre_doc = $_GET['nameDoc'];
  $correo_comp = 'admin@frankmorenoalburqueque.com';
  ?>


  <!-- <input type="text" id="idtoken" value= "<?php $tokenid ?>" >
  <input type="text" id="idemail"  value="" >
  <h1 id="idtoken"> hola </h1>
  <h1 id="idemail"> hola2 </h1> -->

  <script src="https://checkout.culqi.com/js/v3"></script>

  <script>
    window.onload = function() {
      Culqi.open();
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

    


    // function culqi() {

     
      if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
        alert('Se ha creado el token exitosamente ' + token);
        //En esta linea de codigo debemos enviar el "Culqi.token.id"
        //hacia tu servidor con Ajax
      } else {
        // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.user_message);
      }

      //Culqi.token.id;
      var tokenemail = Culqi.token.email;
      var tokenid    = Culqi.token.id;
      
      // document.querySelector('#idtoken').innerHTML = tokenemail;
      // document.querySelector('#idemail').innerHTML = tokenid;
      
      // console.log(document.querySelector('#idtoken'));
      // console.log(document.querySelector('#idemail'));
    // }; 
    window.location.href = window.location.href + "?w1=" + tokenemail + "?w2=" + tokenid + "&w3=" + totalPago;
  </script>

  

  <?php  
    if (isset($_GET["w1"]) && isset($_GET["w2"]) && isset($_GET["w3"])  ) {
      $Pago = $_GET["w3"];
      $TokenMail = $_GET["w1"];
      $Tokenid = $_GET["w2"];
      echo '<script> console.log('.$TokenMail.') </script>';
    }

  ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>