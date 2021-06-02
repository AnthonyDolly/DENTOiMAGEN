<body style="height: 700px">
  <!-- <script src="https://checkout.culqi.com/v2"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

  <h1 style="padding: 15rem 0;">Paga con Culqi</h1>
  <!-- <button type="submit" class="button btn-proceed-checkout" id="buyButton" name="prePago" title="Procesar con el Pago"><span>Procesar con el Pago</span></button> -->


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <?php
  $sid = $_SESSION['sid'] = session_id();
  $_SESSION['totCart'] = 150000;
  $totalPagar = $_GET['pay'];
  // $totalPagar = $totalPagar+'000';

  $dni_comp = '72042683';
  $nombre_doc = $_GET['nameDoc'];
  $correo_comp = 'dieguito.98.xd@gmail.com';
    // $tokenMail = 1;
    // $tokenid = 2;
  ?>
<!-- action="index.php?action=procesoCulqi"  -->
    <!-- <form method="POST">
      <input type="text" name="idtoken" id="idtoken" value="">
      <input type="text" name="idemail" id="idemail" value="">
      <input type="submit" id="buttonenviar" value="Terminar">

    </form> -->
    <!-- <input type="button" id="send"  value="Terminar" > -->

    <!-- <input type="button" id="buyButton" value="Abrir"> -->

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

    function pdf() {
      window.location.assign("./?pagado=si");
    }
    
   
    function culqi() {

     
      if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        var token = Culqi.token.id;
        // alert('Se ha creado el token exitosamente ' + token);
        //En esta linea de codigo debemos enviar el "Culqi.token.id"
        //hacia tu servidor con Ajax
        var tokenemail = Culqi.token.email;
        var tokenid    = Culqi.token.id;

        var data = {
          producto:'Productos varios. Frank Moreno', 
          precio: totalPago/100, 
          token: tokenid,
          customer_id: " <?php echo $dni_comp;?> ",
          email: "<?php echo $correo_comp; ?> "
        };

        var url = "./vista/modulos/plugins/proceso.php";
        $.post(url, data, function(res){
          alert(' Tu pago se Realizó con ' + res + '. Agradecemos tu preferencia.');
          if (res=="exito") {
            console.log(res);
            pdf();
          }else{
            console.log(res);
            alert("No se logró realizar el pago.");
          }
        });


      } else {
        // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.user_message);
      }

      //Culqi.token.id;
      

      // document.getElementById("idtoken").value = tokenid;
      // document.getElementById("idemail").value = tokenemail;
      // window.location.href = window.location.href + "?w1=" + tokenemail + "?w2=" + tokenid + "&w3=" + totalPago;
    }; 

  </script>

  

  <?php 
    if( isset($_POST["idtoken"]) ){
      echo '<script> console.log('.$_POST["idtoken"].')  </script>';
      echo '<script> console.log("hola") </script>';
      // $charge = $culqi->Charges->create(
      //   array(
      //       "amount" => "1000",
      //       "currency_code" => "PEN",
      //       "email" => $_POST["idemail"],
      //       "source_id" =>$_POST["idtoken"]
      //     )
      //  );
      //  $culqi->Customers->create(
      //   array(
      //     "address" => "av lima 123",
      //     "address_city" => "lima",
      //     "country_code" => "PE",
      //     "email" => "www@me.com",
      //     "first_name" => "Will",
      //     "last_name" => "Muro",
      //     "metadata" => array("test"=>"test"),
      //     "phone_number" => 899898999
      //   )
      // );
      // //Crear Tarjeta
      // $culqi->Cards->create(
      //   array(
      //     "customer_id" => "customer_id",
      //     "token_id" => "token_id"
      //   )
      // );
    }
  ?>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>


