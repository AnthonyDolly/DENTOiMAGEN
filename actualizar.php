<?php 
    session_start();
    include("conexion.php");
    $id = $_GET["id"];
    $usuarioQuery ="SELECT concat(c.nombres,' ',c.apellidos) Paciente, c.id, tt.nombre 
                    from clientes c
                    INNER JOIN clientes_tratamientos ct
                    ON c.id = ct.cliente_id
                    INNER JOIN tratamientos t
                    ON ct.tratamiento_id = t.id
                    INNER JOIN tipos_tratamientos tt
                    ON t.tipo_tratamiento_id = tt.id
                    where c.id = '$id'
                    ORDER BY c.nombres";

    $varsesion = $_SESSION['username'];
    if($varsesion == null || $varsesion == ""){
        echo'<script type="text/javascript">
            alert("Por favor inicie sesion");
            </script>';
        die();
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Ediar mis Tratamientos</title>
</head>

<body style="background-color: #fbfbfe; font-family: sans-serif;">
    <center>


        <main style="margin: 3rem auto;">

            <div class="content-citas-personal">
                <h1>Editar Tratamientos</h1>
                <div class="table-citas-personal" style="max-width: 900px;">
                    <p style="text-align: end;">
                        <!-- <i style="cursor: pointer;" class="fas fa-edit"></i> -->
                    </p>
                    <form action="procesar-actualizar.php">
                        <div>
                            <?php 
                                require 'conexion.php';
                                $result = mysqli_query($conexion, $usuarioQuery);
                                
                                while($row = mysqli_fetch_assoc($result)){
                                ?>
                                <div class="border-botom" style="position: relative;" >
                                    <div class="">
                                        <p   style="width: 25%;" ></p>
                                        <p   style="width: 100%;" class="text-center">

                                            <strong>Paciente: 
                                                <input type="text"  value="<?php echo $row["Paciente"];?>" name="nombre">
                                            </strong>
                                        </p>
                                    </div>   
                                </div>
                    
                                <div class="d-flex border-bottom col-md-8 mb-3">
                                    <p class="col-6 border-right">DNI Paciente</p>
                                    <p class="col-6 ">Tratamiento</p>
                                </div>
                                <div class="d-flex col-md-8 mb-3">
                                    <p class="col-6 border-right pt-3">
                                        <input type="text" value="<?php echo $row["id"] ?>" name="id">
                                     </p>
                                    <p class="col-6 pt-3">
                                        <input type="text" value="<?php echo $row["nombre"] ?>" name="tratamiento">
                                     </p>
                                </div>
                            <?php } ?>
                                <div>
                                    <button type="submit" name="boton" class="btn btn-primary mt-3 w-25">Actualizar</button>

                                </div>
                        </div>
                    </form>
                    <br>


                    

                </div>
            </div>



        </main>
    </center>




    <!-- jquery, popper, bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>