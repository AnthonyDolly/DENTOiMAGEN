<div id="main">
    <div class="wrapper">
        <section id="content">
            <div class="container">
                <div id="card-widgets">
                    <div class="row">
                        <div class="col s12 m4 l12">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header teal accent-4">
                                    <h4 class="task-card-title">Dentistas del sistema</h4>
                                </li>
                                <table class="highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Sede</th>
                                            <th>Especialidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $vista = new medicosControladorB();
                                        $vista->vistaMedicosControlador();
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