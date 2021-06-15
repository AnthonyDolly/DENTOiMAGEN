

<?php

class informacionControlesControlador
{
    // #Registro de un control mensual
    #----------------------------------------
    public function registroInformacionControlesControlador()
    {

        if (isset($_POST["descripcioncontrol"])) {
            echo '<script> console.log("entrando controlador") </script>';
            // $newfecha = date("Y/m/d", strtotime($_POST["fecha"]));
            $datosControlador = array(
                "sede" => $_POST["sede"],
                "descripcion" => $_POST["descripcioncontrol"],
                "dni_medico" => $_POST["dni_medico"],
                "id_control_mensual" => $_POST["idCM"],
                "dni_paciente" => $_POST["dni_paciente"]
            );
            var_dump($datosControlador);
            $respuesta = InformacionControles::registroInformacionControlModelo($datosControlador);

            if ($respuesta == "success") {
                header('location:index.php?action=citas-medicos&dni=' . $_POST["dni_medico"] . '');
            }
            // } else {
            //     header("location:index.php?action=citas-medicos");
            // }
        }
    }


    // #listado control mensual
    #----------------------------------------
    public function vistaInformacionControlesControlador()
    {

        $datosControlador = $_GET['dni'];
        $respuesta = InformacionControles::vistaInformacionControlesModelo($datosControlador, "controles_mensuales");
        $i = 0;
        foreach ($respuesta as $row => $item) {
            $i++;

            echo '<tr>
                    <td class="px-3 border-right pt-3">' . $item["Fecha"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Medico"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Sede"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Importe"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Estado de pago"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Asistencia"] . '</td>
            
                    <td class="px-3 pt-3">
                        <button  style="height: 40px;" 
                            type="submit" 
                            name="boton" 
                            id="botonModal"
                            class="btn btn-primary mx-auto borderd d-block"
                            data-toggle="modal"
                            data-target="#modalInfo' . $i . '"
                            >
                            
                            <i class="fas fa-info-circle"></i>
                        </button>
                    </td>
                </tr>';
        }
    }


}
