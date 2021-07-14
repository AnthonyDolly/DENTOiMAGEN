<?php

class clienteControlador
{
    #Registro de cliente
    #------------------------------

    public function registroClienteControlador()
    {

        if (isset($_POST["dni"])) {

            $datosControlador = array(
                "dni" => $_POST["dni"],
                "nombres" => $_POST["nombres"],
                "apellidos" => $_POST["apellidos"],
                "correo" => $_POST["correo"],
                "telefono" => $_POST["telefono"],
                "password" => $_POST["password"]
            );

            $respuesta = Datos::registroClienteModelo($datosControlador, "clientes");

            if ($respuesta == "success") {
                header("location:index.php?action=ok");
            } else {
                header("location:index.php");
            }
        }
    }

    #Ingreso de cliente
    #------------------------------

    public function ingresoControlador()
    {

        if (isset($_POST["usernameI"])) {

            $datosControlador = array(
                "dni" => $_POST["usernameI"],
                "password" => $_POST["passwordI"]
            );

            $respuesta = Datos::ingresoClienteModelo($datosControlador, "clientes");
            $respuesta2 = DatosMedicos::ingresoMedicoModelo($datosControlador, "medicos");
            $respuesta3 = DatosAsistentes::ingresoAsistenteModelo($datosControlador, "asistentes");

            if ($respuesta["id"] == $_POST["usernameI"] && $respuesta["contra"] == $_POST["passwordI"]) {
                session_start();
                $_SESSION["username"] = $respuesta["Usuario"];
                $_SESSION["correo"] = $respuesta["Correo"];
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["validar"] = true;
                header("location:index.php?action=perfil");
            } elseif ($respuesta2["id"] == $_POST["usernameI"] && $respuesta2["contra"] == $_POST["passwordI"]) {
                session_start();
                $_SESSION["usernameM"] = $respuesta2["Usuario"];
                $_SESSION["correo"] = $respuesta2["Correo"];
                $_SESSION["id"] = $respuesta2["id"];
                $_SESSION["validarM"] = true;

                header("location:index.php?action=perfilM");
            } elseif ($respuesta3["id"] == $_POST["usernameI"] && $respuesta3["contra"] == $_POST["passwordI"]) {
                session_start();
                $_SESSION["username"] = $respuesta3["Asistente"];
                $_SESSION["correo"] = $respuesta3["Correo"];
                $_SESSION["id"] = $respuesta3["id"];
                $_SESSION["validarA"] = true;
                $_SESSION["rol"] = "Asistente";
                header("location:./backend/");
            } else {
                header("location:index.php?action=fallo");
            }
        }
    }
}
