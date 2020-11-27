<?php 
    session_start();
    include("conexion.php");
    $varsesion = $_SESSION['username'];
    if($varsesion == null || $varsesion == ""){
        echo'<script type="text/javascript">
            alert("Por favor inicie sesion");
            </script>';
        die();
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
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Horario de Trabajo</title>
</head>

<body style="font-family: sans-serif;">
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
                    <ul class="d-flex justify-content-end username-list">
                        <li class="px-3 username-list-item">
                            <span>
                                <?php	 
                                    echo $_SESSION['username'];
                                ?>
                                <div class="flecha">
                                    <img src="image/flecha-down.svg" alt="flecha">
                                </div>
                            </span>
                            <ul class="username-sublist">
                                <li class="username-subitem">
                                    <a href="mi-perfil.php">
                                        <div>
                                            <img src="image/perfil-dentista.svg" alt="mi perfil"> Mi perfil
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
                                    <a href="cerrar-sesion.php">
                                        <div>
                                            <img src="image/cerrar-sesion.svg" alt="close-sesion"> Cerrar Sesión
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="d-flex justify-content-between">
                        <li>
                            <a href="index.php"><i class="fas fa-home"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="servicios.php"><i class="fa fa-stethoscope fa-fw"></i> Servicios</a>
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
                <table width="80%" height="100%" border="1">
                    <tr>
                        <td align="center" colspan="10">
                            <font size="4">
                                <h4>Bienvenido doctor(a) aquí puede visualizar su horario de trabajo, esperemos que
                                    tenga un buen día.</h4>
                            </font>
                        </td>
                    </tr>
                    <tr style="background-color: #312e2e;">
                        <td align="center" colspan="10">
                            <font color="white">HORARIO</font c>
                        </td>
                    </tr>
                    <tr style="text-align: center;">
                        <th>LUNES</th>
                        <th>MARTES</th>
                        <th>MIERCOLES</th>
                        <th>JUEVES</th>
                        <th>VIERNES</th>
                        <th>SABADO</th>
                    </tr>
                    <tr style="text-align: center;">
                        <td>9:00 - 10:30</td>
                        <td>8:00 - 9:30</td>
                        <td>9:00 - 10:30</td>
                        <td>8:00 - 9:30</td>
                        <td>9:00 - 10:30</td>
                        <td>8:00 - 9:30</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>11:00 - 12:30</td>
                        <td>10:00 - 11:30</td>
                        <td>11:00 - 12:30</td>
                        <td>10:00 - 11:30</td>
                        <td>11:00 - 12:30</td>
                        <td>10:00 - 11:30</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td style="background-color: #F2DEE8;">1:00  - 2:30</td>
                        <td style="background-color: #F2DEE8;">12:00 - 1:30</td>
                        <td style="background-color: #F2DEE8;">1:00  - 2:30</td>
                        <td style="background-color: #F2DEE8;">12:00 - 1:30</td>
                        <td style="background-color: #F2DEE8;">1:00  - 2:30</td>
                        <td style="background-color: #F2DEE8;">12:00 - 1:30</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>3:00 - 4:30</td>
                        <td>2:00 - 3:30</td>
                        <td>3:00 - 4:30</td>
                        <td>2:00 - 3:30</td>
                        <td>3:00 - 4:30</td>
                        <td>2:00 - 3:30</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>5:00 - 6:30</td>
                        <td>4:00 - 5:30</td>
                        <td>5:00 - 6:30</td>
                        <td>4:00 - 5:30</td>
                        <td>5:00 - 6:30</td>
                        <td>4:00 - 5:30</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>7:00 - 8:30</td>
                        <td>6:00 - 7:30</td>
                        <td>7:00 - 8:30</td>
                        <td>6:00 - 7:30</td>
                        <td>7:00 - 8:30</td>
                        <td>6:00 - 7:30</td>
                    </tr>
                </table>
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
</body>

</html>