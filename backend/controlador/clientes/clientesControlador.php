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
}