<?php

class MvcControladorB
{
    #Llamando a la plantilla
    #-------------------------------

    public function plantilla()
    {
        include "vista/plantilla.php";
    }

    #Interacción del usuario
    #------------------------------

    public function enlacesPaginaControlador()
    {

        if (isset($_GET["action"])) {
            $enlacesControlador = $_GET["action"];
        } else {
            $enlacesControlador = "index";
        }


        $respuesta = EnlacesPagina::enlacesPaginaModelo($enlacesControlador);

        include $respuesta;
    }
}
