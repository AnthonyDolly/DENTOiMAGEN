<?php
    require 'conexion.php';
    session_start();

    if (isset($_POST['btnGuardar'])) {
        $DNI=$_POST['DNIPaciente'];
        $tratamiento=$_POST['treatment'];
        $cantSesiones=$_POST['sesiones'];
        $descripcion=$_POST['descripcion'];
        $estado=$_POST['gridRadios'];


        // $insert = "INSERT INTO clientes_tratamientos (fecha_inicio,descripcion,cantSesiones,cliente_id,tratamiento_id,estadoTratamiento)
        // VALUES ('now()','$descripcion','$cantSesiones','$DNI','$tratamiento','$estado')";

        require 'conexion.php';
        $insert  = "INSERT INTO clientes_tratamientos (descipcion,cantSesiones,fecha_inicio,estado,cliente_id,tratamiento_id) VALUES ('$descripcion','$cantSesiones',now(),'$estado','$DNI',$tratamiento)";

        $resultadoI = mysqli_query($conexion,$insert);

        if ($resultadoI) {
            echo 'Nuevo tratamiento guardado';
        } else {
            echo 'Error';
        }

        mysqli_free_result($resultadoI);
        mysqli_close($conexion);
    }
?>