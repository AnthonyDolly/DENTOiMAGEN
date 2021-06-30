<?php

require_once "modelo/conexion.php";

class InformacionTramientos extends Conexion
{
    #vista Informacion de Controles
    #----------------------------
    public function vistaInformacionTramientosModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call vistaInformacionTramientos($datosModelo);");
        
        $st->execute();

        return $st->fetchAll();
    }
    

    public function vistaPDFInformacionTratamientosModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call vistaPDFInformacionTratamientos($datosModelo);");

        // $st->bindParam(":dni", $datosModelo["dni"],PDO::PARAM_STR);
        // $st->bindParam(":nt", $datosModelo["nt"], PDO::PARAM_STR);
        $st->execute();

        return $st->fetchAll();
    }

    public function vistaTituloPDFInformacionTratamientosModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("call vistaTituloPDFInformacionTratamientos(:dni,:idCT);");
        $st->bindParam(":dni", $datosModelo["dni"],PDO::PARAM_STR);
        $st->bindParam(":idCT", $datosModelo["idCT"], PDO::PARAM_STR);
        $st->execute();

        return $st->fetch();
    }


}