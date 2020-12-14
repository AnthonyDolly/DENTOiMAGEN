<main>
    <div class="content-register-treatment">
        <h1>Registrar tratamiento</h1>
        <div class="table-register-treatment">
            <form method="POST">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">DNI Paciente</label>
                    <input type="text" class="form-control" id="dnipaciente" name="DNIPaciente" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="treatment">Sede-Tratamiento-Doctor(a)</label>
                    <select id="treatment" name="tratamiento" class="form-control" onchange="viewTreatment()">
                        <option value="1">1.Los Olivos - Ortodoncia - Dr.Jacqueline Urrutia Fuentes</option>
                        <option value="2">2.Cercado de Lima - Ortodoncia Dr.Marta Cabrera Palacios</option>
                        <option value="3">3.Trujillo - Ortodoncia - Dr.Elisa Bermudez Caceres</option>
                        <option value="4">4.Los Olivos - Ortodoncia - Dr.Sara Garrido Peréz</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Sesiones Tratamiento</label>
                    <input type="number" class="form-control" name="sesiones" id="sesiones" required>
                </div>

                <div class="col-md-6 mb-3 ">
                    <label class="" for="exampleFormControlTextarea1">Descripción</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion"></textarea>
                </div>

                <div class="d-flex col-md-6 mb-3 justify-content-around">
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                            value="1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Activo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                            value="0">
                        <label class="form-check-label" for="gridRadios2">
                            Inactivo
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3 btn-save-treatment">
                    <button type="submit" class="btn btn-primary" name="btnGuardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</main>