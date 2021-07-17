<?php

class consultaControlador
{
    #Registro de una consulta general
    #----------------------------------------
    public function registroConsultaControlador()
    {

        if (isset($_POST["dniR"])) {
            if ($_POST["sedesR"] == 1) {
                $medico = '90807068';
            } elseif ($_POST["sedesR"] == 2) {
                $medico = '90807061';
            } elseif ($_POST["sedesR"] == 3) {
                $medico = '90807062';
            }
            $datosControlador = array(
                "dni" => $_POST["dniR"],
                "nombres" => $_POST["nombresR"],
                "apellidos" => $_POST["apellidosR"],
                "telefono" => $_POST["telefonoR"],
                "correo" => $_POST["correoR"],
                "fecha" => $_POST["fechaR"],
                "precio" => 60,
                "descripcion" => $_POST["descripcionR"],
                "asistencia" => 'Pendiente',
                "sede" => $_POST["sedesR"],
                "medico" => $medico
            );

            $respuesta = DatosConsultas::registroConsultaModelo($datosControlador, "controles_mensuales");

            if ($respuesta == "success") {
                header('location:index.php?action=nosotros&dni=' . $_SESSION["id"] . '');
            } else {
                header("location:index.php");
            }
        }
    }

    #Datos de los clientes de una consulta general
    #----------------------------------------
    public function DatosClientesConsultaControlador()
    {
        $respuesta = DatosConsultas::DatosClientesConsultaModelo();
        echo '<script>
                const pacientes = [';
        foreach ($respuesta as $key => $item) {
            echo   '{
                        dni: "' . $item["DNI"] . '",
                        nombres: "' . $item["Nombres"] . '",
                        apellidos: "'.$item["Apellidos"].'",
                        telefono: "' . $item["Telefono"] . '",
                        email: "' . $item["Email"] . '",
                    },
                    ';
        }
        echo '
                ]
            </script>';
    }
}
