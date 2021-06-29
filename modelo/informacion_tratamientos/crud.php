<?php

require_once "modelo/conexion.php";

class InformacionTramientos extends Conexion
{
    #vista Informacion de Controles
    #----------------------------
    public function vistaInformacionTramientosModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT concat(m.nombres,' ',m.apellidos) AS 'Medico', ct.cliente_id AS 'DNICliente', ct.fecha_inicio as 'Fecha Inicio', tt.nombre as 'NombreTratamiento', ct.id  as 'idCT'
        FROM clientes_tratamientos ct
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN tipos_tratamientos tt
        on t.tipo_tratamiento_id = tt.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        WHERE ct.cliente_id = $datosModelo;");
        
        $st->execute();

        return $st->fetchAll();
    }
    

    public function vistaPDFInformacionTratamientosModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT DATE_FORMAT(cm.fecha, '%d/%m/%Y') as Fecha, concat(m.nombres,' ',m.apellidos) AS 'Medico', m.id AS 'DNIMedico', ic.sede AS 'Sede', cm.precioSesion AS 'Importe', cm.estadoPago AS 'Estado de pago', cm.asistencia AS 'Asistencia', concat(c.nombres,' ',c.apellidos) AS 'Cliente', c.id AS 'DNICliente', ic.descripcion AS 'Descripcion', ct.fecha_inicio as 'Fecha Inicio', tt.nombre as 'NombreTratamiento'
        FROM controles_mensuales cm
        INNER JOIN informacion_controles ic
        ON cm.id = ic.control_mensual_id
        INNER JOIN clientes_tratamientos ct
        ON cm.cliente_tratamiento_id = ct.id
        INNER JOIN clientes c
        ON ic.cliente_id = c.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN tipos_tratamientos tt
        on t.tipo_tratamiento_id = tt.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        WHERE ct.id = $datosModelo
        GROUP BY cm.id;");

        // $st->bindParam(":dni", $datosModelo["dni"],PDO::PARAM_STR);
        // $st->bindParam(":nt", $datosModelo["nt"], PDO::PARAM_STR);
        $st->execute();

        return $st->fetchAll();
    }

    public function vistaTituloPDFInformacionTratamientosModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT concat(m.nombres,' ',m.apellidos) AS 'Medico', ct.cliente_id AS 'DNICliente', ct.fecha_inicio as 'Fecha Inicio', tt.nombre as 'NombreTratamiento', s.nombre as 'Sede', concat(c.nombres,' ',c.apellidos) AS 'Paciente', ct.descripcion as 'Descripcion', m.id as 'DNIMedico'
        FROM clientes_tratamientos ct
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN clientes c
        ON ct.cliente_id = c.id
        INNER JOIN sedes s
        ON t.sede_id = s.id
        INNER JOIN tipos_tratamientos tt
        on t.tipo_tratamiento_id = tt.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        WHERE ct.cliente_id = :dni
        and ct.id = :idCT;");
        $st->bindParam(":dni", $datosModelo["dni"],PDO::PARAM_STR);
        $st->bindParam(":idCT", $datosModelo["idCT"], PDO::PARAM_STR);
        $st->execute();

        return $st->fetch();
    }


}