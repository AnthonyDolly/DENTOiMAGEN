<?php

require_once "modelo/conexion.php";

class InformacionControles extends Conexion
{
    #Informacion de Controles
    #----------------------------
    public function registroInformacionControlModelo($datosModelo)
    {
        echo '<script> console.log("entrando modelo") </script>';
        $st = Conexion::conectar()->prepare("call registroInformacionControl(:sede,:descripcion,:medico_id,:control_mensual_id,:cliente_id)");
        $st->bindParam(":sede", $datosModelo["sede"], PDO::PARAM_STR);
        $st->bindParam(":descripcion", $datosModelo["descripcion"], PDO::PARAM_STR);
        $st->bindParam(":medico_id", $datosModelo["dni_medico"], PDO::PARAM_STR);
        $st->bindParam(":control_mensual_id", $datosModelo["id_control_mensual"], PDO::PARAM_STR);
        $st->bindParam(":cliente_id", $datosModelo["dni_paciente"], PDO::PARAM_STR);


        var_dump($datosModelo);
        if ($st->execute()) {
            echo '<script> console.log("exito") </script>';
            return "success";
        } else {
            echo '<script> console.log("error") </script>';
            return "error";
        }

        $st->close();
    }


    #vista Informacion de Controles
    #----------------------------
    public function vistaInformacionControlesModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call vistaInformacionControles($datosModelo);");

        $st->execute();

        return $st->fetchAll();
    }

        #vista Informacion de Controles
    #----------------------------
    public function vistaPDFInformacionControlesModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call vistaPDFInformacionControles($datosModelo);");

        $st->execute();

        return $st->fetch();
    }

}
