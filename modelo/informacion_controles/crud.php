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

        $st = Conexion::conectar()->prepare("SELECT cm.fecha as Fecha, concat(m.nombres,' ',m.apellidos) AS 'Medico', m.id AS 'DNIMedico', ic.sede AS 'Sede', cm.precioSesion AS 'Importe', cm.estadoPago AS 'Estado de pago', cm.asistencia AS 'Asistencia', concat(c.nombres,' ',c.apellidos) AS 'Cliente', c.id AS 'DNICliente', ic.descripcion AS 'Descripcion', ic.id AS IdIC
        FROM controles_mensuales cm
        INNER JOIN informacion_controles ic
        ON cm.id = ic.control_mensual_id
        INNER JOIN clientes_tratamientos ct
        ON cm.cliente_tratamiento_id = ct.id
        INNER JOIN clientes c
        ON ct.cliente_id = c.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        WHERE ic.cliente_id = $datosModelo
        GROUP BY cm.id;");

        $st->execute();

        return $st->fetchAll();
    }

        #vista Informacion de Controles
    #----------------------------
    public function vistaPDFInformacionControlesModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT DATE_FORMAT(cm.fecha, '%d/%m/%Y') as Fecha, concat(m.nombres,' ',m.apellidos) AS 'Medico', m.id AS 'DNIMedico', ic.sede AS 'Sede', cm.precioSesion AS 'Importe', cm.estadoPago AS 'Estado de pago', cm.asistencia AS 'Asistencia', concat(c.nombres,' ',c.apellidos) AS 'Cliente', c.id AS 'DNICliente', ic.descripcion AS 'Descripcion', ic.id AS IdIC
        FROM controles_mensuales cm
        INNER JOIN informacion_controles ic
        ON cm.id = ic.control_mensual_id
        INNER JOIN clientes_tratamientos ct
        ON cm.cliente_tratamiento_id = ct.id
        INNER JOIN clientes c
        ON ct.cliente_id = c.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        WHERE ic.id = $datosModelo
        GROUP BY cm.id;");

        $st->execute();

        return $st->fetch();
    }

}
