<?php
    //require 'conexion.php';


    session_start();
       
    if (isset($_POST['btningresar'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        //$password = md5($password);

        //$_SESSION['username'] = $username;


        //consultas
        //$queryName = "SELECT nombres, apellidos FROM clientes WHERE nombre='$name' AND contra='$password'";

        
        if ($username == '' || $password == '') {
            echo'<script type="text/javascript">
            alert("Porfavor Rellena todos los campos");
            </script>';
        } else {
            require 'conexion.php';
            //$query = "SELECT * FROM clientes WHERE id='$username' AND contra='$password'";
            $query = "SELECT * FROM clientes WHERE id='$username' AND contra='$password'";
   
            $resultado= mysqli_query($conexion,$query);
            
            $resultado2 = mysqli_fetch_array($resultado);
            $rows = mysqli_num_rows($resultado);
            $_SESSION['username'] = $resultado2['nombres'] .' '. $resultado2['apellidos'];
    
            //var_dump($rows);

            if ($rows > 0) {
                echo'<script type="text/javascript">
                alert("Datos Correctos");
                Paciente();
                </script>';
                //header("location:sedes.php");
                header("location:index.php");

                
            } else {
                echo ("Datos incorrectos");
            }
            mysqli_free_result($resultado);
            mysqli_close($conexion);


        }

    }

    // $query = "SELECT * FROM clientes WHERE id='$username' AND contra='$password'";
    // $resultado= mysqli_query($conexion,$query);
    
    // $rows = mysqli_num_rows($resultado);
    // if ($rows>0) {
    //     echo ("Datos correctos");
    //     header("location:index.php");
    // } else {
    //     echo ("Datos incorrectos");
    // }
    // mysqli_free_result($resultado);
    // mysqli_close($conexion);

    


?>


