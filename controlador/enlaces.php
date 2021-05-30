<?php

class MvcControlador
{

    #Llamando a la plantilla
    #-------------------------------

    public function plantilla()
    {
        include "vista/plantilla.php";
    }

    #Interacción del usuario
    #------------------------------

    public function enlacesPaginasControlador()
    {

        if (isset($_GET["action"])) {
            $enlacesControlador = $_GET["action"];
        } else {
            $enlacesControlador = "index";
        }


        $respuesta = EnlacesPaginas::enlacesPaginasModelo($enlacesControlador);

        include $respuesta;
    }
}
