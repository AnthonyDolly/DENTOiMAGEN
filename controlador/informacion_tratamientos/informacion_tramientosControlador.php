

<?php

class informacionTramientosControlador
{

    // #listado control mensual
    #----------------------------------------
    public function vistaInformacionTramientosControlador()
    {

        $datosControlador = $_GET['dni'];
        $respuesta = InformacionTramientos::vistaInformacionTramientosModelo($datosControlador, "controles_mensuales");
        $i = 0;
        foreach ($respuesta as $row => $item) {
            $i++;

            echo '<tr>
                    <td class="px-3 border-right pt-3 d-none">' . $item["idCT"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["DNICliente"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Medico"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["Fecha Inicio"] . '</td>
                    <td class="px-3 border-right pt-3">' . $item["NombreTratamiento"] . '</td>            
                    <td class="px-3 pt-3">    
                        <a href="index.php?action=pdfTrat&dni=' . $item["DNICliente"] . '&idCT='.$item["idCT"].' "" >
                            <button  style="height: 40px;" type="submit" name="boton" class="btn btn-primary mx-auto borderd d-block">
                                <i style="cursor: pointer;"class="fas fa-download"></i>
                            </button>
                        </a>
                    </td>
                </tr>';
        }
    }



    // #listado control mensual
    #----------------------------------------
    public function vistaPDFInformacionTratamientoControlador()
    {
        $datosControlador = $_GET["idCT"];
        $respuesta = InformacionTramientos::vistaPDFInformacionTratamientosModelo($datosControlador, "controles_mensuales");
        // $test = 10;
        return $respuesta;
    }

        // #listado control mensual
    #----------------------------------------
    public function vistaTituloPDFInformacionTratamientoControlador()
    {
        $datosControlador =  array(
            "dni" => $_GET["dni"],
            "idCT" => $_GET["idCT"]
        );
        $respuesta = InformacionTramientos::vistaTituloPDFInformacionTratamientosModelo($datosControlador, "controles_mensuales");
        // $test = 10;
        return $respuesta;
    }
}
