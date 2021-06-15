<?php

class controlesControlador
{
    #Vista de controles mensuales
    #----------------------------------------

    public function vistaControlControlador()
    {

        $datosControlador = $_GET["dni"];
        $respuesta = DatosControles::vistaControlModelo($datosControlador, "controles_mensuales");

        foreach ($respuesta as $row => $item) {
            echo '<tr>
                    <td class="border-right pt-3 px-3">' . $item["Fecha"] . '</td>
                    <td class="border-right pt-3 px-3">' . $item["Hora"] . '</td>
                    <td class="border-right pt-3 px-3">' . $item["Doctor"] . '</td>
                    <td class="border-right pt-3 px-3">' . $item["Sede"] . '</td>
                    <td class="border-right pt-3 px-3">' . $item["Precio de control"] . '</td>
                    <td class="border-right pt-3 px-3">' . $item["Estado de pago"] . '</td>
                    <td class="border-right pt-3 px-3">' . $item["Asistencia"] . '</td>
                    ';

            if ($item["Estado de pago"] == "Pendiente") {
                echo '
                        <td class="px-3 border-right pt-3">
                            <a href="index.php?action=pay&nameDoc=' . $item["Doctor"] . '&pay=' . $item["Precio de control"] . '&idCM=' . $item["idCM"] . '&dni=' . $_GET['dni'] . '">
                                <button  style="height: 40px; margin-right: 10px;" type="submit" id="buyButton" name="prePago"  class="btn btn-secondary borderd d-block">
                                    <i style="cursor: pointer;" class="fas fa-credit-card"></i>
                                </button>
                            </a>
                        </td>
                        
                         </tr>
                        ';
            }
        }
    }

    #Vista de controles mensuales del perfil medico
    #----------------------------------------------
    public function vistaControlMedicoControlador()
    {

        $datosControlador = $_GET['dni'];
        $respuesta = DatosControles::vistaControlMedicoModelo($datosControlador, "controles_mensuales");
        $i = 0;
        //session_start();
        $_SESSION["paciente"] = "hola";
        // respuesta

        foreach ($respuesta as $row => $item) {
            $i++;

            echo '<tr>
                    <td class="px-3 border-right pt-3">' . $item["Fecha"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Hora"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Paciente"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Sede"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Precio de control"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Estado de pago"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Asistencia"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["EstadoInfo"] . '</td>
            
                    <td class="px-3 border-right pt-3">
                        <a href="index.php?action=editar-cita&idCM=' . $item["ID CM"] . '&idM=' . $item["Medico"] . '">
                            <button  style="height: 40px;" type="submit" name="boton" class="btn btn-secondary mx-auto borderd d-block">
                                <i style="cursor: pointer;" class="fas fa-edit"></i>
                            </button>
                        </a>
                    </td>
                    <td class="px-3 border-right pt-3">
                        <a href="index.php?action=eliminar-cita&idCM=' . $item["ID CM"] . '&dni=' . $item["Medico"] . '">
                            <button  style="height: 40px;" type="submit" name="boton" class="btn btn-danger  mx-auto borderd d-block">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </a>
                    </td>
            
                    <td class="px-3 pt-3">
                        <button  style="height: 40px;" 
                            type="submit" 
                            name="boton" 
                            id="botonModal"
                            class="btn btn-primary mx-auto borderd d-block"
                            data-toggle="modal"
                            data-paciente= "' . $item["Paciente"] . '"
                            data-sede= "' . $item["Sede"] . '"
                            data-precio= "' . $item["Precio de control"] . '"
                            data-target="#modalInfo' . $i . '"
                            >
                            
                            <i class="fas fa-share-square"></i>
                        </button>
                    </td>
                </tr>';
        }
    }

    public function modalInformacion()
    {
        $datosControlador = $_GET['dni'];
        $respuesta = DatosControles::vistaControlMedicoModelo($datosControlador, "controles_mensuales");
        $i = 0;
        foreach ($respuesta as $key => $item) {
            $i++;
            echo '
            <div class="modal fade" id="modalInfo' . $i . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Informacion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">  
                                <p class= "d-none"><strong> Id Control Mensual: </strong> <input name="idCM" class="form-control" type="text" readonly value="' . $item["ID CM"] . '" /> </p>
                                <p><strong> Fecha: </strong> <input class="form-control" name="fecha" readonly type="text" value="' . $item["Fecha"] . '" /> </p>
                                <p><strong> Sede: </strong> <input class="form-control" name="sede" readonly type="text" value="' . $item["Sede"] . '"/>  </p>
                                <p class= ""><strong> Doctor(a): </strong> <input name="medico"  class="form-control" readonly type="text" value="' . $_SESSION['usernameM'] . '" /> </p>
                                <p class= ""><strong> Dni Dentista: </strong> <input name="dni_medico" class="form-control" readonly value="' . $_GET["dni"] . '" /> </p>
                                <p><strong> Precio de control: </strong> <input name="precio" class="form-control" readonly value="' . $item["Precio de control"] . '" /> </p>
                                <p class= "d-none"><strong> Paciente: </strong> <input name="paciente" class="form-control" readonly value="' . $item["Paciente"] . '" /> </p>
                                <p class= "d-none"><strong> Dni Paciente: </strong> <input name="dni_paciente" class="form-control" readonly value="' . $item["DNIPaciente"] . '" /> </p>
                                <p class= "d-none"><strong> Estado de Pago: </strong> <input name="estado_pago" class="form-control" readonly value="' . $item["Estado de pago"] . '" /> </p>
                                <p class= "d-none"><strong> Asistencia: </strong> <input name="asistencia" class="form-control" readonly value="' . $item["Asistencia"] . '" /> </p>
                            
                                <p><strong> Mensaje </strong>
                                    <input name="descripcioncontrol" type="text" value="" class="form-control" />                             
                                </p>
                                <input type="submit" value="Confirmar" class="my-4 btn btn-primary" />
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>';
        }
    }




    // <a href="index.php?action=eliminar-cita&idCM=' . $item["ID CM"] . '&dni=' . $item["Medico"] . '">
    // </a>

    #Registro de un control mensual
    #----------------------------------------
    public function registroControlControlador()
    {

        if (isset($_POST["DNIC"])) {
            $datosControlador = array(
                "id" => $_POST["idCT"],
                "fecha" => $_POST["fecha"] . ' ' . $_POST["hora"],
                "precio" => $_POST["preciosesion"],
                "estado" => $_POST["rbEstadoPago"],
                "asistencia" => $_POST["rbAsistencia"]
            );

            $respuesta = DatosControles::registroControlMedicoModelo($datosControlador, "controles_mensuales");

            if ($respuesta == "success") {
                header('location:index.php?action=mis-tratamientos&dni=' . $_GET["idM"] . '');
            } else {
                header("location:index.php");
            }
        }
    }

    #Editar control mensual
    #----------------------------------------
    public function editarCitaControlMensualControlador()
    {
        $datosControlador = $_GET["idCM"];
        $respuesta = DatosControles::editarCitaControlMensualModelo($datosControlador);
        echo '
            <table class="text-center" >
                <tr class="border-bottom">
                    <td class="font-weight-bold px-3 border-right d-none">id</td>
                    <td class="font-weight-bold px-3 border-right ">Actual Fecha y Hora</td>
                    <td class="font-weight-bold px-3 border-right ">Nueva Fecha y Hora </td>
                    <td class="font-weight-bold px-3 border-right ">Paciente</td>
                    <td class="font-weight-bold px-3 border-right ">Sede</td>
                    <td class="font-weight-bold px-3 border-right ">Precio Control</td>
                    <td class="font-weight-bold px-3 border-right ">Estado de Pago</td>
                    <td class="font-weight-bold px-3 ">Asistencia</td>
                </tr>
                <tr class="border-bottom">
                    <td class="font-weight-bold px-3 border-right d-none ">
                        <input type="text" class="form-control "  
                        name="idCM" value =' . $respuesta["ID CM"] . '>
                    </td>
                    <td class="font-weight-bold px-3 border-right w-25">
                        ' . $respuesta["Fecha y Hora"] . '
                    </td>

                    <td class="font-weight-bold px-3 border-right w-25">
                        <input type="datetime-local" class="form-control "  
                        name="fechaHora">
                     </td>
               
                    <td class="font-weight-bold px-3 border-right  ">
                       ' . $respuesta["Paciente"] . '
                
                    </td>
                    <td class="font-weight-bold px-3 border-right  ">
                        ' . $respuesta["Sede"] . '
                        
                    </td>
                    <td class="font-weight-bold px-3 border-right ">
                      
                       ' . $respuesta["Precio de control"] . '
                    
                     </td>
                    <td class="font-weight-bold px-3 border-right ">
                       ' . $respuesta["Estado de pago"] . '
                        
                    </td>
                    <td class="font-weight-bold px-3">
                        ' . $respuesta["Asistencia"] . '
                    
                    </td>
                </tr>
            </table> 
            <button class="btn btn-primary mt-5">
                ACTUALIZAR
            </button>
            
        ';
    }

    #Actualizar control mensual 
    #----------------------------------------
    public function actualizarCitaControlMensualControlador()
    {

        if (isset($_POST["idCM"])) {

            $datosControlador = array(
                "idCM" => $_POST["idCM"],
                "fecha" => $_POST["fechaHora"]
            );

            $respuesta = DatosControles::actualizarCitaControlMensualModelo($datosControlador, "controles_mensuales");

            if ($respuesta == "success") {
                header('location:index.php?action=citas-medicos&dni=' . $_GET["idM"] . '');
            } else {
                header("location:index.php");
            }
        }
    }

    #Eliminar control mensual
    #----------------------------------------
    public function eliminarCitaControlMensualControlador()
    {
        $datosControlador = $_GET["idCM"];
        $respuesta = DatosControles::eliminarCitaControlMensualModelo($datosControlador, "controles_mensuales");

        if ($respuesta == "success") {
            header('location:index.php?action=citas-medicos&dni=' . $_GET["dni"] . '');
        } else {
            header("location:index.php");
        }
    }



    #Actualizar estado de pago 
    #----------------------------------------
    public function actualizarEstadoPagoControlMensualControlador()
    {
        if (isset($_GET["pagado"])) {
            $datosControlador = array(
                "idCM" => $_GET["idCM"],
                "estadoPago" => "Pagado",
            );

            $respuesta = DatosControles::actualizarEstadoPagoControlMensualModelo($datosControlador, "controles_mensuales");
        }

        if ($respuesta == "success") {

            header('location:index.php?action=controles&dni=' . $_GET["dni"] . '');
        } else {
            header("location:index.php");
        }
    }
}
