<main>
    <div class="content-citas-personal">
        <h1>Agendar Cita Mensual</h1>
        <div class="table-citas-personal" style="max-width: 900px;">
            <div class="table-register-treatment">
                <form method="POST" id="formCM">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="idCT" value='<?php echo $_GET["id"]; ?>' required hidden>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="" for="exampleFormControlInput1">DNI Paciente</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="DNIC" value='<?php echo $_GET["dni"]; ?>' required readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="" for="exampleFormControlInput1">Fecha</label>
                        <input type="text" class="datepicker" id="datepicker" name="fecha" required value="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="" for="exampleFormControlInput1">Hora</label>
                        <input type="text" class="timepicker" id="timepicker" name="hora" required value="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationTooltip01">Precio Sesión</label>
                        <input type="number" class="form-control" name="preciosesion" id="sesiones" required>
                    </div>

                    <div class="d-block col-md-6 mb-3 ">
                        <label class="" for="exampleFormControlTextarea1">Estado de Pago</label>
                        <div class="d-flex col-md-6 mb-3 justify-content-around">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="rbEstadoPago" id="gridRadios1" value="1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Pendiente
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rbEstadoPago" id="gridRadios2" value="2">
                                <label class="form-check-label" for="gridRadios2">
                                    Pagado
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-block col-md-6 mb-3 ">
                        <label class="" for="exampleFormControlTextarea1">Asistencia</label>
                        <div class="d-flex col-md-6 mb-3 justify-content-around">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="rbAsistencia" id="gridRadios1" value="1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Pediente
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rbAsistencia" id="gridRadios2" value="2">
                                <label class="form-check-label" for="gridRadios2">
                                    Asistió
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 btn-save-treatment">
                        <input type="button" class="btn btn-primary" name="btnAgendar" value="Agendar" onclick="btnswalCM()">
                    </div>
                    <script>
                        function btnswalCM() {
                            Swal.fire({
                                icon: 'success',
                                title: '¡Cita Registrada!',
                                showConfirmButton: false,
                            })
                            setTimeout(() => {
                                form = document.getElementById('formCM');
                                form.submit();
                                <?php
                                $registroControlMensual = new controlesControlador();
                                $registroControlMensual->registroControlControlador();
                                ?>
                            }, 3000);
                        }
                    </script>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Date picker -->
<script src="vista/plugins/pickadate/picker.js"></script>
<script src="vista/plugins/pickadate/picker.date.js"></script>
<script src="vista/plugins/pickadate/picker.time.js"></script>
<script src="vista/plugins/pickadate/legacy.js"></script>
<script type="text/javascript">
    var input_date = $('.datepicker').pickadate({
        min: true,
        format: 'yyyy-m-d',
        formatSubmit: 'yyyy-m-d',
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        disable: [
            1
        ]
    });
    var date_picker = input_date.pickadate('picker');

    var input_time = $('.timepicker').pickatime({
        min: [8, 0],
        max: [20, 0],
        format: 'HH:i',
        formatSubmit: 'HH:i',
        disable: [
            13
        ]
    });
    var time_picker = input_time.pickatime('picker');
</script>