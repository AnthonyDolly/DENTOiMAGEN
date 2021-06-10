<?php

class clienteControladorB
{
    #Vista de todos los clientes que hay en el sistema
    #-----------------------------------------
    public function vistaClientesControlador()
    {
        $respuesta = DatosClientesB::vistaClientesModelo();

        foreach ($respuesta as $key => $item) {
            echo '<tr>
                    <td>' . $item["id"] . '</td>
                    <td>' . $item["nombres"] . '</td>
                    <td>' . $item["apellidos"] . '</td>
                    <td>' . $item["correo"] . '</td>
                    <td>' . $item["telefono"] . '</td>
                </tr>';
        }
    }

    #Total (en numero) de clientes que hay en el sistema
    #------------------------------------
    public function numClientesControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosClientesB::numClientesModelo();

        echo '<p>
                ' . $respuesta["Total"] . '
            </p>';
    }

    #Total (en numero) de los nuevos clientes que hay en el sistema (por mes)
    #-------------------------------------------------------------------
    public function numNuevosClientesControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosClientesB::numNuevosClientesModelo();

        echo '<h5 class="mb-0">
                ' . $respuesta["Nuevos"] . '
            </h5>';
    }
}