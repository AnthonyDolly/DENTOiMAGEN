<?php

require_once "modelo/conexion.php";

class DatosConsultas extends Conexion
{
    #Registro de una consulta general
    #-----------------------------
    public function registroConsultaModelo($datosModelo, $tabla)
    {

        $st = Conexion::conectar()->prepare("call registroConsulta(:dni,:nombres,:apellidos,:telefono,:correo,:fecha,:precio,:descripcion,:asistencia,:sede,:medico);");

        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->bindParam(":nombres", $datosModelo["nombres"], PDO::PARAM_STR);
        $st->bindParam(":apellidos", $datosModelo["apellidos"], PDO::PARAM_STR);
        $st->bindParam(":telefono", $datosModelo["telefono"], PDO::PARAM_STR);
        $st->bindParam(":correo", $datosModelo["correo"], PDO::PARAM_STR);
        $st->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);
        $st->bindParam(":precio", $datosModelo["precio"], PDO::PARAM_STR);
        $st->bindParam(":descripcion", $datosModelo["descripcion"], PDO::PARAM_STR);
        $st->bindParam(":asistencia", $datosModelo["asistencia"], PDO::PARAM_STR);
        $st->bindParam(":sede", $datosModelo["sede"], PDO::PARAM_STR);
        $st->bindParam(":medico", $datosModelo["medico"], PDO::PARAM_STR);


        if ($st->execute()) {

            return "success";
        } else {
            return "error";
        }
    }

    #Datos de los clientes de una consulta general
    #--------------------------------------------------------
    public function DatosClientesConsultaModelo()
    {
        $st = Conexion::conectar()->prepare("SELECT id, dni AS 'DNI', nombres AS 'Nombres', apellidos AS 'Apellidos', telefono AS 'Telefono', correo AS 'Email' from consultas;");
        $st->execute();
        return $st->fetchAll();
    }
}
