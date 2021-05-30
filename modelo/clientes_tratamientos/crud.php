<?php

require_once "modelo/conexion.php";

class DatosClientesTratamientos extends Conexion {
    #Vista de los tratamientos del cliente
    #----------------------------
    public function vistaClienteTratamientoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT c.id AS 'DNI del paciente', concat(m.nombres, ' ', m.apellidos) AS Doctor, ct.fecha_inicio AS 'Fecha de inicio', tt.nombre AS 'Tratamiento', ct.descripcion AS Descripción, ct.cantSesiones AS 'Cantidad de Sesiones', ct.estado AS Estado
        FROM clientes_tratamientos ct
        INNER JOIN clientes c
        ON ct.cliente_id = c.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        INNER JOIN tipos_tratamientos tt
        ON t.tipo_tratamiento_id = tt.id
        WHERE ct.cliente_id = $datosModelo
        ;");

        $st->execute();

        return $st->fetchAll();
    }

    #Vista de los tratamientos en el que esta el medico
    #----------------------------
    public function vistaClienteTratamientoMedicoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("SELECT ct.id AS id,c.id AS 'DNI del paciente', concat(c.nombres, ' ', c.apellidos) AS Paciente, m.id AS Medico, ct.fecha_inicio AS 'Fecha de inicio', tt.nombre AS 'Tratamiento', ct.descripcion AS Descripción, ct.cantSesiones AS 'Cantidad de Sesiones', ct.estado AS Estado
        FROM clientes_tratamientos ct
        INNER JOIN clientes c
        ON ct.cliente_id = c.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        INNER JOIN tipos_tratamientos tt
        ON t.tipo_tratamiento_id = tt.id
        WHERE t.medico_id = $datosModelo
        GROUP BY id
        ;");

        $st->execute();

        return $st->fetchAll();
    }

    #Registro de un nuevo tratamiento
    #-----------------------------------------------
    public function RegistroClienteTratamientoModelo($datosModelo, $tabla) {
        $st = Conexion::conectar()->prepare("INSERT INTO $tabla (descripcion,cantSesiones,fecha_inicio,estado,cliente_id,tratamiento_id) VALUES (:descripcion, :cantsesiones, now(), :estado, :DNIPaciente, :tratamiento)");

        $st->bindParam(":descripcion", $datosModelo["descripcion"], PDO::PARAM_STR);
        $st->bindParam(":cantsesiones", $datosModelo["cantsesiones"], PDO::PARAM_STR);
        $st->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_STR);
        $st->bindParam(":DNIPaciente", $datosModelo["dni"], PDO::PARAM_STR);
        $st->bindParam(":tratamiento", $datosModelo["tratamiento"], PDO::PARAM_STR);

        if ($st->execute()) {

            return "success";

        } else {
            return "error";
        }

        $st->close();
    }


    #Editar cliente tratamiento
    #------------------------------------------------
    public function editarClienteTratamientoModelo($datosModelo){
        
        $st = Conexion::conectar()->prepare("SELECT ct.id AS id,c.id AS 'DNI del paciente', concat(c.nombres, ' ', c.apellidos) AS Paciente, m.id AS Medico, ct.fecha_inicio AS 'Fecha de inicio', tt.nombre AS 'Tratamiento', ct.descripcion AS Descripción, ct.cantSesiones AS 'Cantidad de Sesiones', ct.estado AS Estado, ct.tratamiento_id AS 'ID Tratamiento'
        FROM clientes_tratamientos ct
        INNER JOIN clientes c
        ON ct.cliente_id = c.id
        INNER JOIN tratamientos t
        ON ct.tratamiento_id = t.id
        INNER JOIN medicos m
        ON t.medico_id = m.id
        INNER JOIN tipos_tratamientos tt
        ON t.tipo_tratamiento_id = tt.id
        WHERE ct.id = $datosModelo
        ;");

        $st->execute();

        return $st->fetch();
    }

    #Actualizar estado de cliente_tratamiento
    #------------------------------------------------
    public function actualizarClienteTratamientoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("UPDATE $tabla set estado=:estado WHERE id=:idCT");

        $st->bindParam(":idCT", $datosModelo["idCT"], PDO::PARAM_STR);
        $st->bindParam(":estado", $datosModelo["estado"], PDO::PARAM_STR);
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }

    #Eliminar cliente_tratamiento
    #------------------------------------------------
    public function eliminarClienteTratamientoModelo($datosModelo, $tabla) {

        $st = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=$datosModelo;");
        
        if($st->execute()){
            return "success";
        }else{
            return "error";
        }

        $st->close();
    }

}

?>