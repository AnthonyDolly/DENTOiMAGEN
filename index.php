<?php 
    session_start();
    $varsesion = $_SESSION['username'];
    if(isset($varsesion)){
        if($varsesion == null || $varsesion == ""){
            echo'<script type="text/javascript">
                alert("Por favor inicie sesion");
                </script>';
            die();
        }
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="apps.js"></script>;
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Dento Imagen</title>
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
                    <ul class="d-flex justify-content-end username-list" id="ul1">
                        <!-- <li class="px-3">
                            
                        </li> -->
                        <li>
                        <!-- </script>'.$_SESSION['username'].'<script> -->
                        <?php
                            if (isset($_SESSION['username'])){
                                //$variable = $_SESSION['username'];
                                echo ' <script type="text/javascript" >
                                alert("hola");
                                Paciente();
                                </script>';
                                //var_dump($_SESSION['username']);

                            } 
                            else{
                                ?>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#LoginModal">
                                <i class="fas fa-sign-in-alt"></i> Iniciar sesión</button>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#RegisterModal">
                                    <i class="fas fa-user">Regístrate</i> 
                                </button>
                                <?php

                            }
                        
                        ?>
                       
                        </li>
                    </ul>
                    <ul class="d-flex justify-content-between">
                        <li>
                            <a href="index.php" style="background: #1089bf; color: #fff;"> <i class="fas fa-home"></i>
                                Inicio</a>
                        </li>
                        <li>
                            <a href="servicios.php"><i class="fa fa-stethoscope fa-fw">
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
                <table width="80%">
                    <tr>
                        <td colspan="2">
                            <img src="image/imagen3.jpg" alt="imagen de portada" width="100%" min-height="90%">
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" style="vertical-align: top;">
                            <table width="100%" bgcolor="#fff">
                                <tr>
                                    <td>
                                        <a href="servicios.php">
                                            <h1>Servicios</h1>
                                        </a>
                                        <p>
                                            <font size="5">Tenemos los más altos estandares de calidad. ¡Ven y
                                                conoce
                                                nuestros servicios!</font>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </td>
                        <td width="50%" style="vertical-align: top;">
                            <table width="100%" bgcolor="#fff">
                                <tr>
                                    <td>
                                        <a href="sedes.php">
                                            <h1>Sedes</h1>
                                        </a>
                                        <p>
                                            <font size="5">Poco a poco nos estamos expandiendo. ¡Conoce nuestras
                                                sedes!
                                            </font>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="nosotros.php">
                                <h1>Nosotros</h1>
                            </a>
                            <p>
                                <font size="5">Somos un equipo especializado
                                    en la ortodoncia con un precio asequible!Puedes realizar tu consulta virtual.
                                    ¡Ahora!
                                </font>
                            </p>
                        </td>
                    </tr>
                </table>
            </section>


            <div class="skyblue people-list">
                <h1 class="py-3">Nuestros pacientes</h1>
            </div>

            <div class="carousel">
                <div class="carousel-content">
                    <button style="outline: none;" aria-label="Anterior" class="arrow-before">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <div class="carousel-list">
                        <div class="carousel-elements">
                            <img src="image/sonrisa1.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa2.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa3.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa4.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa5.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa6.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa7.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa8.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa9.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa10.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa11.jpg" alt="">
                        </div>
                        <div class="carousel-elements">
                            <img src="image/sonrisa12.jpg" alt="">
                        </div>
                    </div>

                    <button style="outline: none;" aria-label="Anterior" class="arrow-after">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <div role="tablist" class="carousel-indicators"></div>
            </div>

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
                            <img style="width: 20px; cursor: pointer;" src="image/facebook.svg" alt="">
                            <img style="width: 20px; cursor: pointer;" src="image/instagram.svg" alt="">
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
                <form action="validar.php" method="post">
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




    <script src="text/javascript">
    
    </script>


    <!-- jquery, popper, bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <!-- <script src="apps.js"></script> -->
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
/*
    if (isset($_POST['btningresar'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        //$password = md5($password);

        if ($username == '' || $password == '') {
            echo'<script type="text/javascript">
            alert("Porfavor Rellena todos los campos");
            </script>';
        } else {
            require 'conexion.php';
            session_start();

            $query = "SELECT * FROM clientes WHERE id='$username' AND contra='$password'";
            $resultado= mysqli_query($conexion,$query);
            $rows = mysqli_num_rows($resultado);
            if ($rows>0) {
                echo'<script type="text/javascript">
                alert("Datos Correctos");
                Paciente();
                </script>';
                // header("location:index.php");
                
            } else {
                echo'<script type="text/javascript">
                alert("Datos Incorrectos");
                </script>';
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }

        if ($username == '' || $password == '') {
            echo'<script type="text/javascript">
            alert("Porfavor Rellena todos los campos");
            </script>';
        } else {
            require 'conexion.php';
            session_start();

            $query = "SELECT * FROM medicos WHERE id='$username' AND contra='$password'";
            $resultado= mysqli_query($conexion,$query);
            $rows = mysqli_num_rows($resultado);
            if ($rows>0) {
                echo'<script type="text/javascript">
                alert("Datos Correctos");
                Dentista();
                </script>';
                // header("location:index.php");
                
            } else {
                echo'<script type="text/javascript">
                alert("Datos Incorrectos");
                </script>';
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }

    }
*/
?>

