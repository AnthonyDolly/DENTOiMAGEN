<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/styles.css">
    <link rel="stylesheet" href="vista/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="vista/apps.js"></script>
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Dento Imagen</title>
    <script type="text/javascript" src="https://checkout.culqi.com/js/v3"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="vista/plugins/pickadate/themes/default.css">
    <link rel="stylesheet" href="vista/plugins/pickadate/themes/default.date.css">
    <link rel="stylesheet" href="vista/plugins/pickadate/themes/default.time.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="vista/plugins/swal/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="vista/plugins/swal/sweetalert2.min.css">
</head>

<body style="background-color: #fbfbfe; font-family: sans-serif;">
    <center>
        <?php
        include "includes/header.php";
        ?>

        <?php
        $mvc = new MvcControlador();
        $mvc->enlacesPaginasControlador();
        ?>

        <?php
        include "includes/footer.php";
        ?>
    </center>


    <?php
    include "includes/modalLoginRegister.php";
    ?>





    <!-- jquery, popper, bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <!-- <script src="apps.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="vista/bootstrap/js/bootstrap.min.js"></script>
    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <!-- Compiled and minified JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->






    <?php

    $registro = new clienteControlador();
    $registro->registroClienteControlador();


    if (isset($_GET["action"])) {
        if ($_GET["action"] == "ok") {
            echo "Registro exitoso";
        }
    }
    ?>


    <?php

    $ingreso = new clienteControlador();
    $ingreso->ingresoClienteControlador();
    $ingresoM = new medicoControlador();
    $ingresoM->ingresoMedicoControlador();
    $ingresoA = new asistenteControlador();
    $ingresoA->ingresoAsistenteControlador();

    if (isset($_GET["action"])) {
        if ($_GET["action"] == "fallo") {
            echo "Fallo al ingresar";
        }
    }
    ?>

    








</body>

</html>

<?php
ob_end_flush();
?>