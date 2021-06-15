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
}
