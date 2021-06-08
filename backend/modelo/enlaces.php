<?php

class EnlacesPagina
{
    public function enlacesPaginaModelo($enlacesModelo)
    {
        if (
            $enlacesModelo == "tratamientos" ||
            $enlacesModelo == "clientes" ||
            $enlacesModelo == "controles" ||
            $enlacesModelo == "dentistas" ||
            $enlacesModelo == "cerrar-sesion"
        ) {
            $modulo = "vista/modulos/" . $enlacesModelo . ".php";
        } elseif ($enlacesModelo == "index") {
            $modulo = "vista/modulos/inicio.php";
        } elseif ($enlacesModelo == "ok") {
            $modulo = "vista/modulos/inicio.php";
        } elseif ($enlacesModelo == "fallo") {
            $modulo = "vista/modulos/inicio.php";
        } else {
            $modulo = "vista/modulos/inicio.php";
        }
        return $modulo;
    }
}
