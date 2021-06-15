<?php

class consultaControlador
{
    #Registro de una consulta general
    #----------------------------------------
    public function registroConsultaControlador()
    {

        if (isset($_POST["dniR"])) {
            if ($_POST["sedesR"] == 1) {
                $medico = '90807068';
            } elseif ($_POST["sedesR"] == 2) {
                $medico = '90807061';
            } elseif ($_POST["sedesR"] == 3) {
                $medico = '90807062';
            }
            $datosControlador = array(
                "dni" => $_POST["dniR"],
                "nombre" => $_POST["nombresR"] . ' ' . $_POST["apellidosR"],
                "telefono" => $_POST["telefonoR"],
                "correo" => $_POST["correoR"],
                "fecha" => $_POST["fechaR"],
                "precio" => 60,
                "descripcion" => $_POST["descripcionR"],
                "sede" => $_POST["sedesR"],
                "medico" => $medico
            );

            $respuesta = DatosConsultas::registroConsultaModelo($datosControlador, "controles_mensuales");

            if ($respuesta == "success") {
                header('location:index.php?action=nosotros&dni=' . $_SESSION["id"] . '');
            } else {
                header("location:index.php");
            }
        }
    }
}
