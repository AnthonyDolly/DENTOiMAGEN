<div id="main">
    <div class="wrapper">
        <section id="content">
            <div class="container">
                <div id="card-widgets">
                    <div class="row">
                        <div class="col s12 m4 l12">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header teal accent-4">
                                    <h4 class="task-card-title">Consultas del sistema</h4>
                                </li>
                                <table class="highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DNI</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Fecha</th>
                                            <th>Importe</th>
                                            <th>Descripción</th>
                                            <th>Sede</th>
                                            <th>Dentista</th>
                                            <th>Asistencia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $vista = new consultasControladorB();
                                        $vista->vistaConsultasControlador();
                                        ?>
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>