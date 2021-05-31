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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css">
    <script src="vista/apps.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script>
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Dento Imagen</title>
</head>
<body style="background-color: #fbfbfe; font-family: sans-serif;">
<center>
    <?php
        include "modulos/header.php";
    ?>

    <?php
        $mvc = new MvcControlador();
        $mvc -> enlacesPaginasControlador();
    ?>

    <?php
        include "modulos/footer.php";
    ?>
</center>


<?php
    include "modulos/modalLoginRegister.php";
?>





<!-- jquery, popper, bootstrap     -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <!-- <script src="apps.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="vista/bootstrap/js/bootstrap.min.js"></script>




<?php

$registro = new MvcControlador();
$registro -> registroClienteControlador();


if (isset($_GET["action"])) {
    if ($_GET["action"] == "ok") {
        echo "Registro exitoso";
    }
}
?>


<?php

$ingreso = new MvcControlador();
$ingreso ->ingresoClienteControlador();
$ingreso ->ingresoMedicoControlador();

if (isset($_GET["action"])) {
    if ($_GET["action"] == "fallo") {
        echo "Fallo al ingresar";
    }
}
?>


<?php

$registroTratamiento = new MvcControlador();
$registroTratamiento -> RegistroClienteTratamientoControlador();


if (isset($_GET["action"])) {
    if ($_GET["action"] == "ok") {
        echo "Registro exitoso";
    }
}

?>


<?php

$registroControlMensual = new MvcControlador();
$registroControlMensual -> registroControlControlador();


if (isset($_GET["action"])) {
    if ($_GET["action"] == "ok") {
        echo "Registro exitoso";
    }
}

?>



</body>
</html>

<?php
ob_end_flush();
?>