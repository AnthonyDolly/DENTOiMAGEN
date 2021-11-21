<?php
error_reporting(0);
if ($_SESSION["estado"] == 'actualizado') {
?>
    <script>
        Swal.fire({
            icon: "success",
            title: "¡Control Actualizado!",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php
    $_SESSION["estado"] = 'no';
} elseif ($_SESSION["estado"] == 'agendado') {
?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Reserva Actualizada!",
            showConfirmButton: false,
            timer: 1500,
        })
    </script>
<?php
    $_SESSION["estado"] = 'no';
}
?>
<div id="main">
    <div class="wrapper">
        <section id="content">
            <div class="container">
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var elems = document.querySelectorAll('.collapsible');
                    });
                </script>



                <!-- <div id="card-stats">
                    <div class="row mt-1">
                        <a href="index.php?action=tratamientos">
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">assignment_ind</i>
                                            <p>Tratamientos</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <?php $nuevos = new clientes_tratamientosControladorB();
                                            $nuevos->numNuevosClienteTratamientosControlador();
                                            ?>
                                            <p class="no-margin">Nuevos</p>
                                            <?php $total = new clientes_tratamientosControladorB();
                                            $total->numClienteTratamientosControlador();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?action=clientes">
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">perm_identity</i>
                                            <p>Clientes</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <?php $nuevosC = new clienteControladorB();
                                            $nuevosC->numNuevosClientesControlador();
                                            ?>
                                            <p class="no-margin">Nuevos</p>
                                            <?php $totalC = new clienteControladorB();
                                            $totalC->numClientesControlador();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?action=controles">
                            <div class="col s12 m6 l3">
                                <div class="card teal accent-4 gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">event</i>
                                            <p>Controles</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <?php $nuevosCM = new controlesControladorB();
                                            $nuevosCM->numNuevosControlesControlador();
                                            ?>
                                            <p class="no-margin">Nuevos</p>
                                            <?php $totalCM = new controlesControladorB();
                                            $totalCM->numControlesControlador();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?action=dentistas">
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">person</i>
                                            <p>Doctores</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <?php $nuevosD = new medicosControladorB();
                                            $nuevosD->numNuevosMedicosControlador();
                                            ?>
                                            <p class="no-margin">Nuevos</p>
                                            <?php $totalD = new medicosControladorB();
                                            $totalD->numMedicosControlador();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> -->
                <div id="card-widgets">
                    <div class="row">
                        <div class="col s12 m4 l12">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header gradient-45deg-green-teal">
                                    <a href="index.php?action=inicio">
                                        <h4 class="task-card-title">Solicitudes del día</h4>
                                    </a>
                                    <p class="task-card-date">
                                        <script type="text/javascript">
                                            var dia = new Date().toLocaleString('default', {
                                                weekday: 'long'
                                            });
                                            diaM = dia.charAt(0).toUpperCase() + dia.slice(1);
                                            document.write(diaM);
                                            document.write(' ');

                                            document.write(new Date().getDate());
                                            document.write(' de ');

                                            mes = new Date().toLocaleString('default', {
                                                month: 'long'
                                            });
                                            mesM = mes.charAt(0).toUpperCase() + mes.slice(1);
                                            document.write(mesM);

                                            document.write(' del ');
                                            document.write(new Date().getFullYear());
                                        </script>
                                    </p>
                                    <form method="POST">
                                        <nav>
                                            <div class="nav-wrapper">
                                                <form>
                                                    <div class="input-field gradient-45deg-green-teal">
                                                        <input id="search" type="search" name="dniB" required>
                                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                                        <i class="material-icons">close</i>
                                                    </div>
                                                </form>
                                            </div>
                                        </nav>
                                    </form>
                                </li>
                                <table class="highlight responsive-table">
                                    <thead>
                                        <tr style="width: 100%;">
                                            <th style="display: none;">ID</th>
                                            <th style="width: 9%;">DNI</th>
                                            <th style="width: 15%;">Cliente</th>
                                            <th style="width: 16%;">Fecha y Hora</th>
                                            <th style="width: 10%;">Importe</th>
                                            <th style="width: 15%;">Estado de Pago</th>
                                            <th style="width: 15%;">Asistencia</th>
                                            <th style="width: 20%;">Acción</th>
                                        </tr>
                                    </thead>
                                </table>
                                    <?php
                                    if (!isset($_POST["dniB"])) {
                                        $vista = new controlesControladorB();
                                        $vista->vistaControlesHoyControlador();
                                    }
                                    ?>
                                    <?php
                                    if (isset($_POST["dniB"])) {
                                        $vistaB = new controlesControladorB();
                                        $vistaB->buscarClienteControlador();
                                    }
                                    ?>
                                <?php
                                $actualizarECM = new controlesControladorB();
                                $actualizarECM->actualizarEstadosControlControlador();
                                ?>
                            </ul>
                        </div>
                        <div class="col s12 m4 l12">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header gradient-45deg-blue-grey-blue">
                                    <a href="index.php?action=inicio">
                                        <h4 class="task-card-title">Reservas del día</h4>
                                    </a>
                                    <p class="task-card-date">
                                        <script type="text/javascript">
                                            var dia = new Date().toLocaleString('default', {
                                                weekday: 'long'
                                            });
                                            diaM = dia.charAt(0).toUpperCase() + dia.slice(1);
                                            document.write(diaM);
                                            document.write(' ');

                                            document.write(new Date().getDate());
                                            document.write(' de ');

                                            mes = new Date().toLocaleString('default', {
                                                month: 'long'
                                            });
                                            mesM = mes.charAt(0).toUpperCase() + mes.slice(1);
                                            document.write(mesM);

                                            document.write(' del ');
                                            document.write(new Date().getFullYear());
                                        </script>
                                    </p>
                                    <form method="POST">
                                        <nav>
                                            <div class="nav-wrapper">
                                                <form>
                                                    <div class="input-field gradient-45deg-blue-grey-blue">
                                                        <input id="search" type="search" name="dniBC" required>
                                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                                        <i class="material-icons">close</i>
                                                    </div>
                                                </form>
                                            </div>
                                        </nav>
                                    </form>
                                </li>
                                <table class="highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th style="display: none;">ID</th>
                                            <th style="width: 7%;">DNI</th>
                                            <th style="width: 10%;">Nombre</th>
                                            <th style="width: 10%;">Fecha</th>
                                            <th style="width: 10%;">Importe</th>
                                            <th style="width: 10%;">Botones</th>
                                            <th style="width: 15%;">Asistencia</th>
                                            <th style="width: 15%;">Acción</th>
                                        </tr>
                                    </thead>
                                </table>
                                <?php
                                if (!isset($_POST["dniBC"])) {
                                    $vistaCG = new consultasControladorB();
                                    $vistaCG->vistaConsultaHoyControlador();
                                }
                                ?>
                                <?php
                                if (isset($_POST["dniBC"])) {
                                    $vistaB = new consultasControladorB();
                                    $vistaB->buscarConsultaControlador();
                                }
                                ?>
                                <?php
                                $actualizarECM = new consultasControladorB();
                                $actualizarECM->actualizarEstadoConsultaControlador();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>