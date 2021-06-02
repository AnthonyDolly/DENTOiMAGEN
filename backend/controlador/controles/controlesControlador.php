<?php

class controlesControladorB
{
    #Vista de todos los controles del sistema
    #----------------------------------------
    public function vistaControlesControlador()
    {
        // $datosControlador = $_GET["dni"];
        $respuesta = DatosControlesB::vistaControlesModelo();
    }
    
}