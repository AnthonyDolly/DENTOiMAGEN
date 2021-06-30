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

                    <div class="row">
                        <!-- <div class="calendar" id="calendar"> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            initialDate: '2020-09-12',
            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,
            selectable: true,
            locale: 'es',
            events: [{
                    title: 'Business Lunch',
                    start: '2020-09-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2020-09-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#257e4a'
                },
                {
                    title: 'Conference',
                    start: '2020-09-18',
                    end: '2020-09-20'
                },
                {
                    title: 'Party',
                    start: '2020-09-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                    groupId: 'availableForMeeting',
                    start: '2020-09-11T10:00:00',
                    end: '2020-09-11T16:00:00',
                    display: 'background'
                },
                {
                    groupId: 'availableForMeeting',
                    start: '2020-09-13T10:00:00',
                    end: '2020-09-13T16:00:00',
                    display: 'background'
                },

                // red areas where no events can be dropped
                {
                    start: '2020-09-24',
                    end: '2020-09-28',
                    overlap: false,
                    display: 'background',
                    color: '#ff9f89'
                },
                {
                    start: '2020-09-06',
                    end: '2020-09-08',
                    overlap: false,
                    display: 'background',
                    color: '#ff9f89'
                }
            ]
        });

        calendar.render();
    });
</script>