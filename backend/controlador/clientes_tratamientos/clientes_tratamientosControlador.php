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
}
