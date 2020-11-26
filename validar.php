<?php
    require 'conexion.php';
    session_start();

    

    if (isset($_POST['btningresar'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $password = md5($password);
        
        if ($username == '' || $password == '') {
            echo'<script type="text/javascript">
            alert("Porfavor Rellena todos los campos");
            </script>';
        } else {
            $query = "SELECT * FROM clientes WHERE id='$username' AND contra='$password'";
            $resultado= mysqli_query($conexion,$query);
            $rows = mysqli_num_rows($resultado);
            if ($rows>0) {
                // echo ("Datos correctos");
                echo'<script type="text/javascript">
                alert("Datos Correctos");
                Paciente();
                </script>';
                header("location:index.php");
                
            } else {
                echo ("Datos incorrectos");
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);
        }

    }


    


?>


