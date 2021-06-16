<?php

require_once "modelo/conexion.php";

class DatosConsultas extends Conexion
{
    #Registro de una consulta general
    #-----------------------------
    public function registroConsultaModelo($datosModelo, $tabla)
    {

        $st = Conexion::conectar()->prepare("call registroConsulta(:dni,:nombre,:telefono,:correo,:fecha,:precio,:descripcion,:sede,:medico);");

        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->bindParam(":nombre", $datosModelo["nombre"], PDO::PARAM_STR);
        $st->bindParam(":telefono", $datosModelo["telefono"], PDO::PARAM_STR);
        $st->bindParam(":correo", $datosModelo["correo"], PDO::PARAM_STR);
        $st->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);
        $st->bindParam(":precio", $datosModelo["precio"], PDO::PARAM_STR);
        $st->bindParam(":descripcion", $datosModelo["descripcion"], PDO::PARAM_STR);
        $st->bindParam(":sede", $datosModelo["sede"], PDO::PARAM_STR);
        $st->bindParam(":medico", $datosModelo["medico"], PDO::PARAM_STR);


        if ($st->execute()) {

            return "success";
        } else {
            return "error";
        }

        $st->close();
    }
}
