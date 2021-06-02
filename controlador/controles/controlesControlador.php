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
                    <td class="px-3 border-right pt-3">
                        <a href="index.php?action=pay&nameDoc=' . $item["Doctor"] . '&pay=' .$item["Precio de control"]. '">
                            <button  style="height: 40px; margin-right: 10px;" type="submit" id="buyButton" name="prePago"  class="btn btn-secondary borderd d-block">
                                <i style="cursor: pointer;" class="fas fa-credit-card"></i>
                            </button>
                        </a>
                    </td>
               

                </tr>';
        }
    }

    #Vista de controles mensuales del perfil medico
    #----------------------------------------------
    public function vistaControlMedicoControlador()
    {

        $datosControlador = $_GET['dni'];
        $respuesta = DatosControles::vistaControlMedicoModelo($datosControlador, "controles_mensuales");

        foreach ($respuesta as $row => $item) {
            echo '<tr>
                    <td class="px-3 border-right pt-3">' . $item["Fecha"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Hora"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Paciente"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Sede"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Precio de control"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Estado de pago"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Asistencia"] . '</td>
                    <td class="px-3 border-right pt-3">
                        <a href="index.php?action=editar-cita&idCM=' . $item["ID CM"] . '&idM=' . $item["Medico"] . '">
                            <button  style="height: 40px; margin-right: 10px;" type="submit" name="boton" class="btn btn-secondary borderd d-block">
                                <i style="cursor: pointer;" class="fas fa-edit"></i>
                            </button>
                        </a>
                    </td>
                    <td class="px-3 border-right pt-3">
                        <a href="index.php?action=eliminar-cita&idCM=' . $item["ID CM"] . '&dni=' . $item["Medico"] . '">
                            <button  style="height: 40px; margin-right: 10px;" type="submit" name="boton" class="btn btn-danger borderd d-block">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </a>
                    </td>
                </tr>';
        }
    }

    #Registro de un control mensual
    #----------------------------------------
    public function registroControlControlador()
    {

        if (isset($_POST["DNIC"])) {

            $datosControlador = array(
                "id" => $_POST["idCT"],
                "fecha" => $_POST["fecha"],
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
}
