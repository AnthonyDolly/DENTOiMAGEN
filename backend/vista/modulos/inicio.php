<div id="main">
    <div class="wrapper">
        <section id="content">
            <div class="container">
                <div id="card-stats">
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
                                <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">event</i>
                                            <p>Controles</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">100</h5>
                                            <p class="no-margin">Nuevos</p>
                                            <p>3,42,230</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="index.php?action=dentistas">
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">person</i>
                                            <p>Dentistas</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">2</h5>
                                            <p class="no-margin">Nuevos</p>
                                            <p>5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="card-widgets">
                    <div class="row">
                        <div class="col s12 m4 l12">
                            <ul id="task-card" class="collection with-header">
                                <li class="collection-header teal accent-4">
                                    <h4 class="task-card-title">Citas del día</h4>
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
                                </li>
                                <table class="highlight responsive-table">
                                    <thead>
                                        <tr>
                                            <th>DNI</th>
                                            <th>Paciente</th>
                                            <th>Fecha y Hora</th>
                                            <th>Importe</th>
                                            <th style="margin: 10px 0 0 0;">Estado de Pago</th>
                                            <th style="margin: 43px 0 0 0;">Asistencia</th>
                                            <th style="margin: 38px 0 0 0;">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $vista = new controlesControladorB();
                                        $vista->vistaControlesControlador();
                                        ?>
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                        <div class="col s12 m4 l4">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="vista/images/gallary/3.png" alt="user bg">
                                </div>
                                <div class="card-content">
                                    <img src="vista/images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <span class="card-title activator grey-text text-darken-4">Anthony Dolly</span>
                                    <p>
                                        <i class="material-icons">perm_identity</i> Project Manager
                                    </p>
                                    <p>
                                        <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989
                                    </p>
                                    <p>
                                        <i class="material-icons">email</i> yourmail@domain.com
                                    </p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Roger Waters
                                        <i class="material-icons right">close</i>
                                    </span>
                                    <p>Here is some more information about this card.</p>
                                    <p>
                                        <i class="material-icons">perm_identity</i> Project Manager
                                    </p>
                                    <p>
                                        <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989
                                    </p>
                                    <p>
                                        <i class="material-icons">email</i> yourmail@domain.com
                                    </p>
                                    <p>
                                        <i class="material-icons">cake</i> 18th June 1990
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        <i class="material-icons">airplanemode_active</i> BAR - AUS
                                    </p>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>