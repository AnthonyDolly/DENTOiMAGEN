<?php

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
            require 'conexion.php';
            $querymedico = "SELECT * FROM medicos WHERE id='$username' AND contra='$password'";

            $resultadoMedico = mysqli_query($conexion, $querymedico);
            $resultadoMedico2 = mysqli_fetch_array($resultadoMedico);

            if($resultadoMedico2['especialidad_id'] != ""){
                
                $rows = mysqli_num_rows($resultadoMedico);
                $_SESSION['username'] = $resultadoMedico2['nombres'].' '.$resultadoMedico2['apellidos'];

                $_SESSION['telefono'] = $resultadoMedico2['telefono'];
                $_SESSION['correo'] = $resultadoMedico2['correo'];

                if ($rows>0) {
                    echo'<script type="text/javascript">
                    alert("Datos Correctos");
                    Dentista();
                    </script>';
                    header("location:mi-perfil.php");

                } else {
                    echo'<script type="text/javascript">
                            alert("Datos Incorrectos");
                            </script>';
                }
                mysqli_free_result($resultadoMedico);
                mysqli_close($conexion);

            }else{

                $query = "SELECT * FROM clientes WHERE id='$username' AND contra='$password'";
                $resultado = mysqli_query($conexion,$query);
                $resultado2 = mysqli_fetch_array($resultado);

                $rows = mysqli_num_rows($resultado);
                $_SESSION['username'] = $resultado2['nombres'].' '.$resultado2['apellidos'];

                //variable sesion
                $_SESSION['telefono'] = $resultado2['telefono'];
                $_SESSION['correo'] = $resultado2['correo'];
                if ($rows>0) {
                    echo'<script type="text/javascript">
                    alert("Datos Correctos");
                    Paciente();
                    </script>';
                    header("location:mi-perfilP.php");
                    
                } else {
                    echo ("Datos incorrectos");
                }
                mysqli_free_result($resultado);
                mysqli_close($conexion);
            }



        }



        

    }


    


?>


