<?php

class EnlacesPaginas {

    public function enlacesPaginasModelo($enlacesModelo) {
        
        if ($enlacesModelo == "servicios" ||
            $enlacesModelo == "diseno-sonrisa" ||
            $enlacesModelo == "plan-dental" ||
            $enlacesModelo == "blanqueamiento" ||
            $enlacesModelo == "limpieza-dental" ||
            $enlacesModelo == "ortodoncia" ||
            $enlacesModelo == "sedes" ||
            $enlacesModelo == "nosotros" ||
            $enlacesModelo == "perfil" ||
            $enlacesModelo == "controles" ||
            $enlacesModelo == "tratamiento" ||
            $enlacesModelo == "perfilM" ||
            $enlacesModelo == "cerrar-sesion" ||
            $enlacesModelo == "citas-medicos" ||
            $enlacesModelo == "mis-tratamientos" ||
            $enlacesModelo == "horario-medicos" ||
            $enlacesModelo == "registrar-tratamiento" ||
            $enlacesModelo == "registrar-incidencia" ||
            $enlacesModelo == "agendar-cita" ||
            $enlacesModelo == "editar-tratamiento" ||
            $enlacesModelo == "eliminar-tratamiento" ||
            $enlacesModelo == "editar-cita" ||
            $enlacesModelo == "eliminar-cita"
            ) {

                $modulo = "vista/modulos/".$enlacesModelo.".php";

        } elseif ($enlacesModelo == "index") {
            $modulo = "vista/modulos/inicio.php";
        } elseif ($enlacesModelo == "ok") {
            $modulo = "vista/modulos/inicio.php";
        } elseif ($enlacesModelo == "fallo") {
            $modulo = "vista/modulos/inicio.php";
        } elseif ($enlacesModelo == "registrado") {
            $modulo = "vista/modulos/registrar-tratamiento.php";
        } 
        else {
            $modulo = "vista/modulos/inicio.php";
        }

        return $modulo;

    }


}

?>