<?php

require_once "modelo/conexion.php";

class DatosAsistentes extends Conexion
{
    #Ingreso Asistente
    #-----------------------------
    public function ingresoAsistenteModelo($datosModelo, $tabla)
    {

        $st = Conexion::conectar()->prepare("SELECT id,contra, concat(nombres, ' ', apellidos) AS Asistente, correo AS Correo FROM $tabla WHERE id = :dni");
        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->execute();

        return $st->fetch();

        $st->close();
    }
}
