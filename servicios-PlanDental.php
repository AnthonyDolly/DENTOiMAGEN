<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Servicio Plan Dental</title>
</head>

<body style="background-color: #fbfbfe; font-family: sans-serif;">
    <center>
        <!-- Header -->
        <header class="header-home white">
            <div class="d-flex align-items-center content-header">
                <div class="col-4">
                    <a href="index.php">
                        <img style="width: 200px;" src="image/logo-clinica.svg" alt="Logo de Clinica">
                    </a>
                </div>
                <nav class="col-8 navigator">
                    <ul class="d-flex justify-content-end" id="ul1">
                        <li class="px-3">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#LoginModal">
                                <i class="fas fa-sign-in-alt"></i> Iniciar sesión</button>
                        </li>
                        <li>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#RegisterModal"><i
                                    class="fas fa-user"></i> Regístrate</button>
                        </li>
                    </ul>
                    <ul class="d-flex justify-content-between">
                        <li>
                            <a href="index.php"><i class="fas fa-home"></i>
                                Inicio</a>
                        </li>
                        <li>
                            <a href="servicios.php" style="background: #1089bf; color: #fff;"><i
                                    class="fa fa-stethoscope fa-fw">
                                </i> Servicios</a>
                            <ul>
                                <li><a href="servicios-DisenoSonrisa.php">Diseño de Sonrisa</a></li>
                                <li><a href="servicios-PlanDental.php">Plan Dental</a></li>
                                <li><a href="servicios-blanqueamiento.php">Blanqueamiento</a></li>
                                <li><a href="servicios-LimpiezaDental.php">Limpieza Dental</a></li>
                                <li><a href="servicios-ortodoncia.php">Ortodoncia</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="sedes.php"><i class="fa fa-map-marker fa-fw"></i> Sedes</a>
                        </li>
                        <li>
                            <a href="nosotros.php"><i class="fas fa-users"></i> Nosotros</a>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="fila-color skyblue"></div>
        </header>
        <main>
            <section min-width="360">
                <h4 style="padding-top: 10px;">El cuidado dental preventivo es clave para mantener tus dientes sanos a
                    lo largo de tu vida. Pero va más allá de eso. La buena salud oral también puede impactar tu salud
                    general.</h4>
                <p>
                <p>
                <div class="alinear">
                    <div id="cuadro1">
                        <img src="image/plan1.png" width="100%">
                    </div>
                    <div class="texto"><b><u>Simulación Dental</u>:</b>
                        <p>
                            Se compone de una atención integral donde un paciente recibe el diagnóstico del doctor y le
                            recomienda una serie de cuidados,<br> prótesis removibles, oclusión e implantes dentales,
                            dependiendo que necesita para obtener el resultado deseado.
                    </div>
                </div>
                <br>
                <p>
                <div class="alinear">
                    <div id="cuadro2">
                        <img src="image/plan2.jpg" width="100%">
                    </div>
                    <div class="texto2"><b><u>Cuidado Dental</u>:</b>
                        <p>
                            Ayudan a reducir los riesgos de desarrollar caries dental, enfermedad de las encías o
                            problemas dentales más serios.<br>
                            Ayudan a promover buenos hábitos de higiene oral, como cepillarte los dientes al menos dos
                            veces al día y usar el hilo dental.<br>
                            Permiten identificar tempranamente problemas dentales y así minimizar su tratamiento y
                            costo.
                            Permiten que tu dentista realice un examen completo de tu boca, mandíbula, cuello.
                    </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="footer-page skyblue">
            <div class="image-bg">
            </div>
            <div class="d-flex content-footer">
                <div class="col-4">
                    <div>
                        <h1>DENTOiMAGEN</h1>
                        <p>C. Los Olivos 62, Los Olivos 15304</p>
                        <p><span>Horario de atención:</span> <br>
                            Lun a Vie. de 8am - 1pm y 3pm-8pm <br>
                            Sab y Dom. de 9am a 2pm
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <h3>Contacto</h3>
                    <ul>
                        <li>
                            <strong>Telf: </strong> (01) 540 0543
                        </li>
                        <li>
                            <strong>Cel: </strong> +51 924 800 200
                        </li>
                        <li>
                            <strong>Cel: </strong> +51 924 800 500
                        </li>
                        <li>
                            <strong>Correo: </strong> dentoimagen@servicios.pe
                        </li>
                    </ul>
                    <div>
                        <img style="width: 20px;" src="image/facebook.svg" alt="">
                        <img style="width: 20px;" src="image/instagram.svg" alt="">
                    </div>
                </div>
                <div class="col-4 ">
                    <h3>Formas de pago</h3>
                    <div class="d-flex justify-content-between">
                        <img src="image/amex.svg" alt="">
                        <img src="image/diners.svg" alt="">
                        <img src="image/visa.svg" alt="">
                        <img src="image/mastercard.svg" alt="">
                    </div>

                </div>
            </div>
            <div class="col-12 pt-4 pb-2">
                <p>Todos los derechos reservados © 2020 | DENTOiMAGEN</p>
            </div>
        </footer>

        </main>
    </center>



    <!-- Modal Login-->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border: 0;">
                <form action="" method="post">
                    <div class="modal-header" style="background-color: skyblue; margin-bottom: 1em;">
                        <h5 class="modal-title">Iniciar Sesión</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div style="text-align: center;">
                        <div class="form-group-login">
                            <label style="display: block; font-size: .8em;">Username</label>
                            <input type="text" name="username" required="" size="30">
                        </div>
                        <div class="form-group-login">
                            <label style="display: block; font-size: .8em;">Password</label>
                            <input type="Password" name="password" required="" size="30">
                        </div>
                        <div class="group-submit-Login">
                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close"
                                data-toggle="modal" data-target="#RegisterModal"
                                style="display: inline-block; font-size: .8em; color: #3498db;">¿No
                                tienes cuenta? Regístrate
                            </button>
                            <input type="submit" name="btningresar" value="Ingresar"
                                style="color: white; padding: .3em 2em; background-color: #3498db; border: 0; border-radius: .3em;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border: 0;">
                <form action="confirmacionRegister.html" method="post">
                    <div class="modal-header" style="background-color: skyblue; margin-bottom: 1em;">
                        <h5>Registrarse</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div style="margin-left: .2em; margin-right: .2em;">
                        <div class="form-group-register">
                            <div class="group-names">
                                <input type="text" name="nombres" placeholder="Nombres" required>
                                <input type="text" name="apellidos" placeholder="Apellidos" required>
                            </div>
                            <div class="group-correo-username">
                                <input type="email" name="correo" placeholder="Correo Electrónico" class="email"
                                    required>
                                <input type="text" name="username" placeholder="Usuario" required>
                            </div>
                            <div class="group-password">
                                <input type="password" name="password" placeholder="Contraseña" required>
                                <input type="password" name="r-password" placeholder="Repetir contraseña" required>
                            </div>
                            <div class="group-submit">
                                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close"
                                    data-toggle="modal" data-target="#LoginModal"
                                    style="display: inline-block; font-size: .8em; color: #3498db;">¿Ya
                                    tienes cuenta? Iniciar sesión
                                </button>
                                <input type="submit" class="right" name="btenviar" value="Registrarse" style="color: white; padding: .3em 2em; background-color: #3498db; border: 0; border-radius: .3em;
                                            ">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <!-- jquery, popper, bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="apps.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>



<?php

    if (isset($_POST['btningresar'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $password = md5($password);

        if ($username == '' || $password == '') {
            echo'<script type="text/javascript">
            alert("Porfavor Rellena todos los campos");
            </script>';
        } else {
            require 'conexion.php';
            session_start();

            $query = "SELECT CONCAT(nombres, ' ', apellidos) AS usuario from clientes WHERE id='$username' AND contra='$password'";
            $resultado= mysqli_query($conexion,$query);
            $rows = mysqli_num_rows($resultado);
            if ($rows>0) {
                while ($row=mysqli_fetch_assoc($resultado)) {
                    $row["usuario"];
                    $usuarioP = $row["usuario"];
?>
                    <script type="text/javascript">
                    var userGlobal = "<?php echo $usuarioP; ?>";
                    alert(userGlobal);
                    alert("Datos Correctos");
                    alert( "<?php echo $usuarioP; ?>");
                    Paciente();
                    </script>;
                    <?php
                }               
            } else {
                echo'<script type="text/javascript">
                alert("Datos Incorrectos");
                </script>';
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }

    }

?>