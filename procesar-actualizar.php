<?php 
    //session_start();
    include("conexion.php");
    $id = $_POST['id'];
    $tratamiento = $_POST['nombres'];
    $paciente = $_POST['Paciente'];

    $selectPrueba = "SELECT id from clientes_tratamientos where cliente_id = '$id'";

    $actualizar = "UPDATE clientes_tratamientos set cliente_id = '$id' where id='$selectPrueba'";

    $result = mysqli_query($conexion, $actualizar);


    if($result){
        echo "<script> 
                alert('se han guardado los cambios');

             </script>";
    }else{
        echo "<script> alert('no se guardo nada)' </script>";
    }