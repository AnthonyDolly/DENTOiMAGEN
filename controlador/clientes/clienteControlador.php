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

    public function ingresoClienteControlador()
    {

        if (isset($_POST["usernameI"])) {

            $datosControlador = array(
                "dni" => $_POST["usernameI"],
                "password" => $_POST["passwordI"]
            );

            $respuesta = Datos::ingresoClienteModelo($datosControlador, "clientes");

            if ($respuesta["id"] == $_POST["usernameI"] && $respuesta["contra"] == $_POST["passwordI"]) {
                session_start();
                $_SESSION["username"] = $respuesta["Usuario"];
                $_SESSION["correo"] = $respuesta["Correo"];
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["validar"] = true;
                header("location:index.php?action=perfil");
            } else {
                header("location:index.php?action=fallo");
            }
        }
    }
}
