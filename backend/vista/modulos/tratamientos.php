<div id="main">
    <div class="wrapper">
        <section id="content">
            <div class="container">
                <div id="card-widgets">
                    <div class="row">
                        <div class="col s12 m4 l12">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header teal accent-4">
                                    <h4 class="task-card-title">Tratamientos del sistema</h4>
                                </li>
                                <table class="highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descripción</th>
                                            <th>Sesiones</th>
                                            <th>Fecha de inicio</th>
                                            <th>Estado</th>
                                            <th>DNI</th>
                                            <th>Paciente</th>
                                            <th>Dentista</th>
                                            <th>Tratamiento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $vista = new clientes_tratamientosControladorB();
                                        $vista->vistaClienteTratamientosControlador();
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