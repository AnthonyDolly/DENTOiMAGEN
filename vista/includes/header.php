<?php
session_start();
?>
<header class="header-home white">
    <div class="d-flex align-items-center content-header">
        <div class="col-4">
            <a href="index.php">
                <img style="width: 200px;" src="vista/image/logo-clinica.svg" alt="Logo de Clinica">
            </a>
        </div>
        <nav class="col-8 navigator">
            <ul class="d-flex justify-content-end username-list" id="ul1">
                <li class="px-3">
                    <?php
                    if (isset($_SESSION["username"])) {?>
                        <script type="text/javascript">
                        var userC = '<?php echo $_SESSION["username"]; ?>'
                        var idC = '<?php echo $_SESSION["id"]; ?>'
                        </script>
                        <?php
                        echo ' 
                            <script type="text/javascript">
                            Paciente(userC,idC);
                                
                            </script> '
                            ;
                    } elseif (isset($_SESSION["usernameM"])) {?>
                        <script type="text/javascript">
                        var userM = '<?php echo $_SESSION["usernameM"]; ?>'
                        var idM = '<?php echo $_SESSION["id"]; ?>'
                        </script>
                        <?php
                        echo ' 
                            <script type="text/javascript">
                            Dentista(userM,idM);
                            </script> '
                            ;
                    } else {
                        ?>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#LoginModal">
                            <i class="fas fa-sign-in-alt"></i> Iniciar sesión
                        </button>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#RegisterModal">
                            <i class="fas fa-user"></i> Regístrate 
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
                    <a href="index.php?action=servicios"><i class="fa fa-stethoscope fa-fw">
                            </i> Servicios</a>
                            <ul>
                            <li><a href="index.php?action=diseno-sonrisa">Diseño de Sonrisa</a></li>
                            <li><a href="index.php?action=plan-dental">Plan Dental</a></li>
                            <li><a href="index.php?action=blanqueamiento">Blanqueamiento</a></li>
                            <li><a href="index.php?action=limpieza-dental">Limpieza Dental</a></li>
                            <li><a href="index.php?action=ortodoncia">Ortodoncia</a></li>
                        </ul>
                </li>
                <li>
                    <a href="index.php?action=sedes"><i class="fa fa-map-marker fa-fw"></i> Sedes</a>
                </li>
                <li>
                    <a href="index.php?action=nosotros"><i class="fas fa-users"></i> Nosotros</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="fila-color skyblue"></div>
</header>