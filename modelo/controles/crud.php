<?php

require_once "modelo/conexion.php";

class DatosControles extends Conexion {
    #Vista control mensual
    #----------------------------
    public function vistaControlModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT DATE_FORMAT(cm.fecha,'%d/%m/%Y') AS Fecha, cm.id AS idCM,  DATE_FORMAT(cm.fecha,'%H:%i') as Hora, concat(m.nombres, ' ', m.apellidos) AS Doctor, s.nombre AS Sede, cm.precioSesion 'Precio de control', cm.estadoPago AS 'Estado de pago', cm.asistencia AS Asistencia
        FROM controles_mensuales cm
        INNER JOIN clientes_tratamientos ct
        ON cm.cliente_tratamiento_id = ct.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        INNER JOIN sedes s
        ON t.sede_id = s.id
        WHERE ct.cliente_id = $datosModelo
        ;");

        $st->execute();

        return $st->fetchAll();
    }

    #Vista control mensual perfil medico
    #---------------------------------------
    public function vistaControlMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT DATE_FORMAT(cm.fecha,'%d/%m/%Y') AS Fecha, DATE_FORMAT(cm.fecha,'%H:%i') as Hora, concat(c.nombres, ' ', c.apellidos) AS Paciente, s.nombre AS Sede, cm.precioSesion 'Precio de control', cm.estadoPago AS 'Estado de pago', cm.asistencia AS Asistencia, cm.id as 'ID CM', m.id as Medico
        FROM controles_mensuales cm
        INNER JOIN clientes_tratamientos ct
        ON cm.cliente_tratamiento_id = ct.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        INNER JOIN clientes c
        ON ct.cliente_id = c.id
        INNER JOIN sedes s
        ON t.sede_id = s.id
        WHERE m.id = $datosModelo
        ;");

        $st->execute();

        return $st->fetchAll();
    }

    #Registro de control mensual por parte del medico
    #--------------------------------------------------
    public function registroControlMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("INSERT INTO $tabla (fecha,precioSesion,estadoPago,cliente_tratamiento_id,asistencia) VALUES (:fecha,:precioSesion,:estadoPago,:CTID,:asistencia)");

        $st->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);
        $st->bindParam(":precioSesion", $datosModelo["precio"], PDO::PARAM_STR);
        $st->bindParam(":estadoPago", $datosModelo["estado"], PDO::PARAM_STR);
        $st->bindParam(":CTID", $datosModelo["id"], PDO::PARAM_STR);
        $st->bindParam(":asistencia", $datosModelo["asistencia"], PDO::PARAM_STR);

        if ($st->execute()) {

            return "success";

        } else {
            return "error";
        }

        $st->close();
    }

    #Eliminar control mensual por parte del medico
    #------------------------------------------------
    public function eliminarControlMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cliente_tratamiento_id=$datosModelo;");
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }



    
    #Editar control mensual por parte del medico
    #------------------------------------------------
    public function editarCitaControlMensualModelo($datosModelo){
        
        $st = Conexion::conectar()->prepare("SELECT cm.id as 'ID CM', cm.fecha as 'Fecha y Hora', concat(c.nombres, ' ', c.apellidos) AS Paciente, s.nombre AS Sede, cm.precioSesion 'Precio de control', cm.estadoPago AS 'Estado de pago', cm.asistencia AS Asistencia
        FROM controles_mensuales cm
        INNER JOIN clientes_tratamientos ct
        ON cm.cliente_tratamiento_id = ct.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        INNER JOIN clientes c
        ON ct.cliente_id = c.id
        INNER JOIN sedes s
        ON t.sede_id = s.id
        WHERE cm.id = $datosModelo
        ;");

        $st->execute();

        return $st->fetch();
    }


        #Actualizar fecha de control mensual
    #------------------------------------------------
    public function actualizarCitaControlMensualModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("UPDATE $tabla set fecha=:fecha WHERE id=:idCM");

        $st->bindParam(":idCM", $datosModelo["idCM"], PDO::PARAM_STR);
        $st->bindParam(":fecha", $datosModelo["fecha"], PDO::PARAM_STR);
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }


    
    #Eliminar fecha control mensual
    #------------------------------------------------
    public function eliminarCitaControlMensualModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=$datosModelo;");
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }



     #Actualizar estado pago control mensual
    #------------------------------------------------
    public function actualizarEstadoPagoControlMensualModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("UPDATE $tabla set estadoPago=:estadoPago WHERE id=:idCM");

        $st->bindParam(":idCM", $datosModelo["idCM"], PDO::PARAM_STR);
        $st->bindParam(":estadoPago", $datosModelo["estadoPago"], PDO::PARAM_STR);
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }





}
?>