<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Mi Tratamiento</title>
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
                    <ul class="d-flex justify-content-end username-list">
                        <li class="px-3 username-list-item">
                            <span>
                                Jose Carmona Peralta
                                <div class="flecha">
                                    <img src="image/flecha-down.svg" alt="flecha">
                                </div>
                            </span>
                            <ul class="username-sublist">
                                <li class="username-subitem">
                                    <a href="mi-perfilP.php">
                                        <div>
                                            <img src="image/perfil-paciente.svg" alt="mi perfil"> Mi perfil
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
                                            <img src="image/cerrar-sesion.svg" alt="close-sesion"> Cerrar sesión
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="d-flex justify-content-between">
                        <li>
                            <a href="index.php"> <i class="fas fa-home"></i>
                                Inicio</a>
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

            <div class="content-treatment-user">
                <h1>Mi Tratamiento</h1>
                <div class="table-treatment-user" style="max-width: 900px; width: 100%;" >
                    <div>
                        <div class="d-flex border-bottom">
                            <p class="col-2 border-right">DNI Paciente</p>
                            <p class="col-2 border-right" >Fecha</p>
                            <p class="col-2 border-right">Hora</p>
                            <p class="col-2 border-right" >Tratamiento</p>
                            <p class="col-2 border-right">Doctor(a)</p>
                            <p class="col-2">Costo</p>
                        </div>
                        <div class="d-flex">
                            <p class="col-2 border-right pt-3">10667806</p>
                            <p class="col-2 border-right pt-3">15/10/2020</p>
                            <p class="col-2 border-right pt-3">10:00 am</p>
                            <p class="col-2 border-right pt-3"> Ortodoncia</p>
                            <p class="col-2 border-right pt-3">Lizeth Alvina Acevedo</p>
                            <p class="col-2 pt-3">2500</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <footer class="footer-page skyblue">
                <div class="image-bg">
                </div>
                <div class="d-flex content-footer">
                    <div class="col-4">
                        <div>
                            <h1>DENTOiMAGEN</h1>
                            <p>C. Los Olivos 62, Los Olivos 15304</p>
                            <p><span>Horario de atención</span> <br>
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




    <!-- jquery, popper, bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>