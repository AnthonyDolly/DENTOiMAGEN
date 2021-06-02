<?php

class clientes_tratamientosControlador
{
    #Vista de todos los tratamientos que hay en el sistema
    #-----------------------------------------
    public function vistaClienteTratamientoControlador()
    {
        $datosControlador = $_GET["dni"];
        $respuesta = DatosClientesTratamientosB::vistaClienteTratamientoModelo($datosControlador, "clientes_tratamientos");
    }
}
