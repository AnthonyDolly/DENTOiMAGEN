<?php

require_once "modelo/conexion.php";

class DatosMedicos extends Conexion{
    #Ingreso de Medicos
    #----------------------------
    public function ingresoMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("CALL ingresoMedico(:dni)");
        $st->bindParam(":dni", $datosModelo["dni"], PDO::PARAM_STR);
        $st->execute();
        
        return $st->fetch();

        $st->close();
    }

}

?>
