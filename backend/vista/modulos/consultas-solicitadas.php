<?php
error_reporting(0);
if ($_SESSION["estado"] == 'agendado') {
?>
    <script>
        Swal.fire({
            icon: "success",
            title: "¡Consulta agendada!",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php
    $_SESSION["estado"] = 'no';
} elseif ($_SESSION["estado"] == 'eliminado') {
?>
    <script>
        Swal.fire({
            icon: "success",
            title: "¡Consulta eliminada!",
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
                <div id="card-widgets">
                    <div class="row">
                        <div class="col s12 m4 l12">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header teal accent-4">
                                    <h4 class="task-card-title">Consultas Solicitadas</h4>
                                </li>
                                <!-- <form method="post" id="formC"> -->
                                <table class="highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th style="display: none;">ID</th>
                                            <th>DNI</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Fecha Requerida</th>
                                            <th>Fecha</th>
                                            <th>Hora</th>
                                            <th>Precio</th>
                                            <th>Descripción</th>
                                            <th>Sede</th>
                                            <th>Dentista</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                </table>
                                <?php
                                $vista = new consultasControladorB();
                                $vista->vistaSolicitudesConsultasControlador();
                                ?>
                                <?php
                                $actualizarFC = new consultasControladorB();
                                $actualizarFC->actualizarFechaConsultaControlador();
                                ?>
                                <?php
                                $eliminarCB = new consultasControladorB();
                                $eliminarCB->eliminarConsultasBasuraControlador();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>