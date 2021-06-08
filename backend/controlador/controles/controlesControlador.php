<?php

class controlesControladorB
{
    #Vista de todos los controles del sistema
    #----------------------------------------
    public function vistaControlesControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosControlesB::vistaControlesModelo();

        foreach ($respuesta as $key => $item) {
            echo '<tr>
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
            if ($item["Asistencia"] == "Pendiente") {
                echo '<td>
                        <select name="pago">
                            <option value="1" selected>Pendiente</option>
                            <option value="2">Pagado</option>
                            <option value="3">Faltó</option>
                        </select>
                    </td>';
            }
            echo '<td>
                    <button class="btn waves-effect waves-light gradient-45deg-light-blue-cyan" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </td>
            </tr>';
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
}
