<?php

class asistenteControlador
{
    #Ingreso del Asistene
    #------------------------------

    public function ingresoAsistenteControlador()
    {
        if (isset($_POST["usernameI"])) {

            $datosControlador = array(
                "dni" => $_POST["usernameI"],
                "password" => $_POST["passwordI"]
            );

            $respuesta = DatosAsistentes::ingresoAsistenteModelo($datosControlador, "asistentes");

            if ($respuesta["id"] == $_POST["usernameI"] && $respuesta["contra"] == $_POST["passwordI"]) {
                session_start();
                $_SESSION["username"] = $respuesta["Asistente"];
                $_SESSION["correo"] = $respuesta["Correo"];
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["validarA"] = true;
                $_SESSION["rol"] = "Asistente";
                header("location:./backend/");
            } else {
                header("location:index.php");
            }
        }
    }
}
