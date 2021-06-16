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
                                <form method="post" id="formC">
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
                                        <tbody>
                                            <?php
                                            $vista = new consultasControladorB();
                                            $vista->vistaSolicitudesConsultasControlador();
                                            ?>
                                            <script>
                                                function btnswalC() {
                                                    Swal.fire({
                                                        title: '¿Seguro?',
                                                        showDenyButton: true,
                                                        showCancelButton: true,
                                                        confirmButtonText: `Agendar`,
                                                        denyButtonText: `No`,
                                                    }).then((result) => {
                                                        /* Read more about isConfirmed, isDenied below */
                                                        if (result.isConfirmed) {
                                                            form = document.getElementById('formC');
                                                            form.submit();

                                                            <?php
                                                            $actualizarECM = new consultasControladorB();
                                                            $actualizarECM->actualizarFechaConsultaControlador();
                                                            ?>
                                                        } else if (result.isDenied) {
                                                            Swal.fire('Cancelado', '', 'error')
                                                        }
                                                    })
                                                }
                                            </script>
                                        </tbody>
                                    </table>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>