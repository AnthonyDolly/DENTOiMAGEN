<?php

class consultasControladorB
{
    #Vista de todas las consultas que hay en el sistema
    #----------------------------
    public function vistaConsultasControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosConsultasB::vistaConsultasModelo();

        foreach ($respuesta as $key => $item) {
            echo '<tr>
                    <td>' . $item["ID"] . '</td>
                    <td>' . $item["DNI"] . '</td>
                    <td>' . $item["Nombre"] . '</td>
                    <td>' . $item["Telefono"] . '</td>
                    <td>' . $item["Correo"] . '</td>
                    <td>' . $item["Fecha"] . '</td>
                    <td>' . $item["Importe"] . '</td>
                    <td>' . $item["Descripcion"] . '</td>
                    <td>' . $item["Sede"] . '</td>
                    <td>' . $item["Medico"] . '</td>
                    <td>' . $item["Asistencia"] . '</td>
                </tr>';
        }
    }

    #Vista de todas las consultas que hay para el día de hoy
    #----------------------------------------
    public function vistaConsultaHoyControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosConsultasB::vistaConsultasHoyModelo();

        foreach ($respuesta as $key => $item) {
            echo '<tr>
                    <td style="display: none;">
                        <input type="text" class="form-control "  
                        name="idC" value =' . $item["ID"] . '>
                    </td>
                    <td>' . $item["DNI"] . '</td>
                    <td>' . $item["Nombre"] . '</td>
                    <td>' . $item["Telefono"] . '</td>
                    <td>' . $item["Correo"] . '</td>
                    <td>' . $item["Fecha"] . '</td>
                    <td>' . $item["Importe"] . '</td>
                    <td>' . $item["Medico"] . '</td>';
            echo '  <td>
                        <select name="asistencia">
                            <option value="1" selected>Pendiente</option>
                            <option value="2">Asistió</option>
                            <option value="3">Faltó</option>
                        </select>
                    </td>';

            echo '  <td>
                        <input type="button" class="btn waves-effect waves-light gradient-45deg-light-blue-cyan" name="action" id="enviar" value="Enviar" onclick="btnswalC()">
                    </td>
                </tr>';
        }
    }

    #Bucar una consulta del día con el nro de DNI del paciente.
    #---------------------------------------------------
    public function buscarConsultaControlador()
    {
        if (isset($_POST["dniBC"])) {
            $datosControlador = $_POST["dniBC"];
            $respuesta = DatosConsultasB::buscarConsultaModelo($datosControlador);

            if (isset($respuesta)) {
                foreach ($respuesta as $key => $item) {
                    echo '<tr>
                            <td style="display: none;">
                                <input type="text" class="form-control "  
                                name="idC" value =' . $item["ID"] . '>
                            </td>
                            <td>' . $item["DNI"] . '</td>
                            <td>' . $item["Nombre"] . '</td>
                            <td>' . $item["Telefono"] . '</td>
                            <td>' . $item["Correo"] . '</td>
                            <td>' . $item["Fecha"] . '</td>
                            <td>' . $item["Importe"] . '</td>
                            <td>' . $item["Medico"] . '</td>';
                    echo '  <td>
                                <select name="asistencia">
                                    <option value="1" selected>Pendiente</option>
                                    <option value="2">Asistió</option>
                                    <option value="3">Faltó</option>
                                </select>
                            </td>';
                    echo '  <td>
                                <input type="button" class="btn waves-effect waves-light gradient-45deg-light-blue-cyan" name="action" id="enviar" value="Enviar" onclick="btnswalC()">
                            </td>
                        </tr>';
                }
            } else {
            }
        }
    }

    #Actualizar estado de la consulta
    #----------------------------------------
    public function actualizarEstadoConsultaControlador()
    {

        if (isset($_POST["idC"])) {

            $datosControlador = array(
                "idC" => $_POST["idC"],
                "estadoAsistencia" => $_POST["asistencia"]
            );

            $respuesta = DatosConsultasB::actualizarEstadoConsultaModelo($datosControlador, "consultas");

            if ($respuesta == "success") {
                header('location:index.php?action=inicio');
            } else {
                header("location:index.php");
            }
        }
    }
}
