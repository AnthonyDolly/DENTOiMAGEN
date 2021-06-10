<?php

class medicosControladorB
{
    #Vista de todos los medicos que hay en el sistema
    #-----------------------------------------
    public function vistaMedicosControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosMedicosB::vistaMedicosModelo();

        foreach ($respuesta as $row => $item) {
            echo '<tr>
                    <td>' . $item["ID"] . '</td>
                    <td>' . $item["Nombres"] . '</td>
                    <td>' . $item["Apellidos"] . '</td>
                    <td>' . $item["Correo"] . '</td>
                    <td>' . $item["Telefono"] . '</td>
                    <td>' . $item["Sede"] . '</td>
                    <td>' . $item["Especialidad"] . '</td>
                </tr>';
        }
    }

    #Total (en numero) de dentistas que hay en el sistema
    #------------------------------------
    public function numMedicosControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosMedicosB::numMedicosModelo();

        echo '<p>
                ' . $respuesta["Total"] . '
            </p>';
    }

    #Total (en numero) de los nuevos dentistas que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosMedicosControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosMedicosB::numNuevosMedicosModelo();

        echo '<h5 class="mb-0">
                ' . $respuesta["Nuevos"] . '
            </h5>';
    }
}
