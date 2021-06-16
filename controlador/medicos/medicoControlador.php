<?php

class medicoControlador
{
    #Ingreso de Medico
    #---------------------------------------

    public function ingresoMedicoControlador()
    {

        if (isset($_POST["usernameI"])) {

            $datosControlador = array(
                "dni" => $_POST["usernameI"],
                "password" => $_POST["passwordI"]
            );

            $respuesta = DatosMedicos::ingresoMedicoModelo($datosControlador, "medicos");

            if ($respuesta["id"] == $_POST["usernameI"] && $respuesta["contra"] == $_POST["passwordI"]) {
                session_start();
                $_SESSION["usernameM"] = $respuesta["Usuario"];
                $_SESSION["correo"] = $respuesta["Correo"];
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["validarM"] = true;
                header("location:index.php?action=perfilM");
            } else {
                header("location:index.php");
            }
        }
    }
}
