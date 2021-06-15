<?php

class controlesControladorB
{
    #Vista de todos los controles que hay en el sistema
    #----------------------------
    public function vistaControlesModelo()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosControlesB::vistaControlesModelo();

        foreach ($respuesta as $key => $item) {
            echo '<tr>
                    <td>' . $item["ID"] . '</td>
                    <td>' . $item["DNI"] . '</td>
                    <td>' . $item["Paciente"] . '</td>
                    <td>' . $item["Dentista"] . '</td>
                    <td>' . $item["Fecha"] . '</td>
                    <td>' . $item["Importe"] . '</td>
                    <td>' . $item["Estado de Pago"] . '</td>
                    <td>' . $item["Asistencia"] . '</td>
                </tr>';
        }
    }

    #Vista de todos los controles que hay para el día de hoy
    #----------------------------------------
    public function vistaControlesHoyControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosControlesB::vistaControlesHoyModelo();

        foreach ($respuesta as $key => $item) {
            echo '<tr>
                    <td style="display: none;">
                        <input type="text" class="form-control "  
                        name="idCM" value =' . $item["ID"] . '>
                    </td>
                    <td>' . $item["DNI"] . '</td>
                    <td>' . $item["Paciente"] . '</td>
                    <td>' . $item["Fecha"] . '</td>
                    <td>' . $item["Importe"] . '</td>';
            if ($item["Estado de Pago"] == 'Pendiente') {
                echo '<td>
                        <select name="pago">
                            <option value="1" selected>Pendiente</option>
                            <option value="2">Pagado</option>
                        </select>
                    </td>';
            } else if ($item["Estado de Pago"] == 'Pagado') {
                echo '<td>
                        <select name="pago">
                            <option value="1">Pendiente</option>
                            <option value="2" selected>Pagado</option>
                        </select>
                    </td>';
            }
            echo '<td>
                        <select name="asistencia">
                            <option value="1" selected>Pendiente</option>
                            <option value="2">Asistió</option>
                            <option value="3">Faltó</option>
                        </select>
                    </td>';

            echo '<td>
                    <input type="button" class="btn waves-effect waves-light gradient-45deg-light-blue-cyan" name="action" id="enviar" value="Enviar" onclick="btnswal()">
                </td>
            </tr>';
        }
    }

    #Actualizar estados del control
    #----------------------------------------
    public function actualizarEstadosControlControlador()
    {

        if (isset($_POST["idCM"])) {

            $datosControlador = array(
                "idCM" => $_POST["idCM"],
                "estadoPago" => $_POST["pago"],
                "estadoAsistencia" => $_POST["asistencia"]
            );

            $respuesta = DatosControlesB::actualizarEstadosControlModelo($datosControlador, "controles_mensuales");

            if ($respuesta == "success") {
                header('location:index.php?action=inicio');
            } else {
                header("location:index.php");
            }
        }
    }

    #Total (en numero) de controles que hay en el sistema
    #------------------------------------
    public function numControlesControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosControlesB::numControlesModelo();

        echo '<p>
                ' . $respuesta["Total"] . '
            </p>';
    }

    #Total (en numero) de los nuevos controles que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosControlesControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosControlesB::numNuevosControlesModelo();

        echo '<h5 class="mb-0">
                ' . $respuesta["Nuevos"] . '
            </h5>';
    }

    #Bucar una cita del día con el nro de DNI del paciente.
    #---------------------------------------------------
    public function buscarClienteControlador()
    {
        if (isset($_POST["dniB"])) {
            $datosControlador = $_POST["dniB"];
            $respuesta = DatosControlesB::buscarClienteModelo($datosControlador);

            if (isset($respuesta)) {
                foreach ($respuesta as $key => $item) {
                    echo '<tr>
                            <td style="display: none;">
                                <input type="text" class="form-control "  
                                name="idCM" value =' . $item["ID"] . '>
                            </td>
                            <td>' . $item["DNI"] . '</td>
                            <td>' . $item["Paciente"] . '</td>
                            <td>' . $item["Fecha"] . '</td>
                            <td>' . $item["Importe"] . '</td>';
                    if ($item["Estado de Pago"] == 'Pendiente') {
                        echo '<td>
                                <select name="pago">
                                    <option value="1" selected>Pendiente</option>
                                    <option value="2">Pagado</option>
                                </select>
                            </td>';
                    } else if ($item["Estado de Pago"] == 'Pagado') {
                        echo '<td>
                                <select name="pago">
                                    <option value="1">Pendiente</option>
                                    <option value="2" selected>Pagado</option>
                                </select>
                            </td>';
                    }
                    echo '<td>
                                <select name="asistencia">
                                    <option value="1" selected>Pendiente</option>
                                    <option value="2">Asistió</option>
                                    <option value="3">Faltó</option>
                                </select>
                            </td>';

                    echo '<td>
                            <input type="button" class="btn waves-effect waves-light gradient-45deg-light-blue-cyan" name="action" id="enviar" value="Enviar" onclick="btnswal()">
                        </td>
                    </tr>';
                }
            } else {
            }
        }
    }
}
