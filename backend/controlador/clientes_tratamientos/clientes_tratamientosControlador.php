<?php

class clientes_tratamientosControladorB
{
    #Vista de todos los tratamientos que hay en el sistema
    #-----------------------------------------
    public function vistaClienteTratamientosControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosClientesTratamientosB::vistaClienteTratamientosModelo();

        foreach ($respuesta as $row => $item) {
            echo '<tr>
                    <td>' . $item["ID"] . '</td>
                    <td>' . $item["Descripción"] . '</td>
                    <td>' . $item["Sesiones"] . '</td>
                    <td>' . $item["Fecha de inicio"] . '</td>
                    <td>' . $item["Estado"] . '</td>
                    <td>' . $item["DNI"] . '</td>
                    <td>' . $item["Paciente"] . '</td>
                    <td>' . $item["Dentista"] . '</td>
                    <td>' . $item["Tratamiento"] . '</td>
                </tr>';
        }
    }

    #Total (en numero) de tratamientos que hay en el sistema
    #------------------------------------
    public function numClienteTratamientosControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosClientesTratamientosB::numClienteTratamientosModelo();

        echo '<p>
                ' . $respuesta["Total"] . '
            </p>';
    }

    #Total (en numero) de los nuevos tratamientos que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosClienteTratamientosControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosClientesTratamientosB::numNuevosClienteTratamientosModelo();

        echo '<h5 class="mb-0">
                ' . $respuesta["Nuevos"] . '
            </h5>';
    }
}
