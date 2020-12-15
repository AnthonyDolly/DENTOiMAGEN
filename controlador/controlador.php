<?php

class MvcControlador {

    #Llamando a la plantilla
    #-------------------------------

    public function plantilla() {
        include "vista/plantilla.php";
    }

    #Interacción del usuario
    #------------------------------

    public function enlacesPaginasControlador() {

        if (isset($_GET["action"])) {
            $enlacesControlador = $_GET["action"];
        } else {
            $enlacesControlador = "index";
        }


        $respuesta = EnlacesPaginas::enlacesPaginasModelo($enlacesControlador);
    
        include $respuesta;

    }

    #Registro de cliente
    #------------------------------

    public function registroClienteControlador() {

        if (isset($_POST["dni"])) {
            
            $datosControlador = array(  "dni"=>$_POST["dni"],
                                        "nombres"=>$_POST["nombres"],
                                        "apellidos"=> $_POST["apellidos"], 
                                        "correo"=>$_POST["correo"],
                                        "telefono"=>$_POST["telefono"], 
                                        "password"=>$_POST["password"]);

            $respuesta = Datos::registroClienteModelo($datosControlador, "clientes");

            if ($respuesta == "success") {
                header("location:index.php?action=ok");
            } else {
                header("location:index.php");
            }

        }
    }

    #Ingreso de cliente
    #------------------------------

    public function ingresoClienteControlador() {

        if (isset($_POST["usernameI"])) {
            
            $datosControlador = array(  "dni"=>$_POST["usernameI"], 
                                        "password"=>$_POST["passwordI"]);

            $respuesta = Datos::ingresoClienteModelo($datosControlador, "clientes");

            if ($respuesta["id"] == $_POST["usernameI"] && $respuesta["contra"] == $_POST["passwordI"]) {
                session_start();
                $_SESSION["username"] = $respuesta["Usuario"];
                $_SESSION["correo"] = $respuesta["Correo"];
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["validar"] = true;
                header("location:index.php?action=perfil");
            } else {
                header("location:index.php?action=fallo");
            }

        }
    }

    #Vista de controles mensuales
    #----------------------------------------

    public function vistaControlControlador() {

        $datosControlador = $_GET["dni"];
        $respuesta = DatosControles::vistaControlModelo($datosControlador, "controles_mensuales");

        foreach ($respuesta as $row => $item) {
            echo '<tr>
                    <td class="border-right pt-3 px-3">'.$item["Fecha"].'</td>
                    <td class="border-right pt-3 px-3">'.$item["Hora"].'</td>
                    <td class="border-right pt-3 px-3">'.$item["Doctor"].'</td>
                    <td class="border-right pt-3 px-3">'.$item["Sede"].'</td>
                    <td class="border-right pt-3 px-3">'.$item["Precio de control"].'</td>
                    <td class="border-right pt-3 px-3">'.$item["Estado de pago"].'</td>
                    <td class="pt-3 px-3">'.$item["Asistencia"].'</td>
                </tr>';
        }
    }

    #Vista del tratamiento del cliente
    #-----------------------------------------

    public function vistaClienteTratamientoControlador() {

        $datosControlador = $_GET["dni"];
        $respuesta = DatosClientesTratamientos::vistaClienteTratamientoModelo($datosControlador, "clientes_tratamientos");

        foreach ($respuesta as $row => $item) {
            echo '<tr>
                    <td class="px-3 border-right pt-3">'.$item["DNI del paciente"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Doctor"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Fecha de inicio"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Tratamiento"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Descripción"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Cantidad de Sesiones"].'</td>
                    <td class="px-3 pt-3">'.$item["Estado"].'</td>
                </tr>';
        }
    }

    #Ingreso de Medico
    #---------------------------------------

    public function ingresoMedicoControlador() {

        if (isset($_POST["usernameI"])) {
            
            $datosControlador = array(  "dni"=>$_POST["usernameI"], 
                                        "password"=>$_POST["passwordI"]);

            $respuesta = DatosMedicos::ingresoMedicoModelo($datosControlador, "medicos");

            if ($respuesta["id"] == $_POST["usernameI"] && $respuesta["contra"] == $_POST["passwordI"]) {
                session_start();
                $_SESSION["usernameM"] = $respuesta["Usuario"];
                $_SESSION["correo"] = $respuesta["Correo"];
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["validarM"] = true;
                header("location:index.php?action=perfilM");
            } else {
                header("location:index.php?action=fallo");
            }

        }
    }

    #Vista de controles mensuales del perfil medico
    #----------------------------------------------
    public function vistaControlMedicoControlador() {

        $datosControlador = $_GET['dni'];
        $respuesta = DatosControles::vistaControlMedicoModelo($datosControlador ,"controles_mensuales");

        foreach ($respuesta as $row => $item) {
            echo '<tr>
                    <td class="px-3 border-right pt-3">'.$item["Fecha"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Hora"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Paciente"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Sede"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Precio de control"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Estado de pago"].'</td>
                    <td class="px-3 border-right pt-3">'.$item["Asistencia"].'</td>
                </tr>';
        }
    }

    #Vista de los tratamientos del perfil medico
    #-------------------------------------------
    public function vistaClienteTratamientoMedicoControlador() {
        $datosControlador = $_GET["dni"];
        $respuesta = DatosClientesTratamientos::vistaClienteTratamientoMedicoModelo($datosControlador, "clientes_tratamientos");
        
        foreach ($respuesta as $row => $item) {
            
            echo '
                <div class="border-botom" style="position: relative;">
                    <div class="border-botom d-flex" style="position: relative;">
                        <p style="width: 82%; padding-left: 20%" class="text-center mb-2">
                            <strong>Paciente: '.$item["Paciente"].'
                            </strong>
                        </p>
                        <a href="index.php?action=editar-tratamiento&dni='.$item["DNI del paciente"].'&id='.$item["id"].'&idM='.$item["Medico"].'">
                        <button  style="height: 40px; margin-right: 10px;" type="submit" name="boton" class="btn btn-secondary borderd d-block">
                            <i style="cursor: pointer;" class="fas fa-edit"></i>
                        </button>
                        </a>           
                        <a href="index.php?action=eliminar-tratamiento&dni='.$item["Medico"].'&id='.$item["id"].'&idM='.$item["Medico"].'&idCM='.$item["CMID"].'">
                            <button  style="height: 40px; margin-right: 10px;" type="submit" name="boton" class="btn btn-danger borderd d-block">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </a>
                        <a href="index.php?action=agendar-cita&id='.$item["id"].'&dni='.$item["DNI del paciente"].'&idM='.$item["Medico"].'">
                            <button style="position: absolute; right: 0;"  type="submit" name="boton" class="btn btn-light borderd d-block">+</button>
                        </a>
                    </div>   
                </div>

                <table class="col-md-8 mb-5 text-center">
                    <tr class="border-bottom">
                        <td class="font-weight-bold px-3 border-right">DNI Paciente</td>
                        <td class="font-weight-bold px-3 ">Tratamiento</td>
                        <td class="font-weight-bold px-3 ">Estado</td>
                    </tr>
                    <tr>
                        <td class="border-right pt-3">'.$item["DNI del paciente"].'</td>
                        <td class="border-right pt-3">'.$item["Tratamiento"].'</td>
                        <td class="pt-3">'.$item["Estado"].'</td>
                    </tr>
                </table>
            
                ';
        }
    }

    #Registro de un nuevo tratamiento
    #----------------------------------------
    public function RegistroClienteTratamientoControlador() {

        if (isset($_POST["DNIPaciente"])) {
            
            $datosControlador = array(  "dni"=>$_POST["DNIPaciente"],
                                        "descripcion"=>$_POST["descripcion"],
                                        "cantsesiones"=> $_POST["sesiones"], 
                                        "estado"=>$_POST["gridRadios"], 
                                        "tratamiento"=>$_POST["tratamiento"]);

            $respuesta = DatosClientesTratamientos::RegistroClienteTratamientoModelo($datosControlador, "clientes_tratamientos");

            if ($respuesta == "success") {
                header("location:index.php?action=registrado");
            } else {
                header("location:index.php");
            }

        }
    }

    #Registro de un control mensual
    #----------------------------------------
    public function registroControlControlador() {

        if (isset($_POST["DNIC"])) {
            
            $datosControlador = array(  "id"=>$_POST["idCT"],
                                        "fecha"=>$_POST["fecha"],
                                        "precio"=> $_POST["preciosesion"], 
                                        "estado"=>$_POST["rbEstadoPago"], 
                                        "asistencia"=>$_POST["rbAsistencia"]);

            $respuesta = DatosControles::registroControlMedicoModelo($datosControlador, "controles_mensuales");

            if ($respuesta == "success") {
                header('location:index.php?action=mis-tratamientos&dni='.$_GET["idM"].'');
            } else {
                header("location:index.php");
            }

        }
    }


    #Editar cliente tratamiento
    #----------------------------------------
    public function editarClienteTratamientoControlador(){
        $datosControlador = $_GET["id"];
        $respuesta = DatosClientesTratamientos::editarClienteTratamientoModelo($datosControlador);

        echo '
        <div class="border-botom" style="position: relative;">
            <div class="">
                <p style="width: 25%;"></p>
                <p style="width: 100%;" class="text-center">    
                    <strong>
                        Paciente: '.$respuesta["Paciente"].'
                    </strong>
                </p>
            </div>
        </div>

        <table class="text-center" >
            <tr class="border-bottom">
                <td class="font-weight-bold px-3 border-right d-none">ID</td>
                <td class="font-weight-bold px-3 border-right ">Descripción</td>
                <td class="font-weight-bold px-3 border-right ">N° Sesiones</td>
                <td class="font-weight-bold px-3 border-right ">Fecha Inicio</td>
                <td class="font-weight-bold px-3 border-right ">Estado</td>
                <td class="font-weight-bold px-3 border-right ">DNI Paciente</td>
                <td class="font-weight-bold px-3 d-none ">ID Tratamiento</td>
            </tr>
            <tr class="border-bottom">
                <td class="font-weight-bold px-3 border-right d-none">
                    <input type="text" class="form-control " id="exampleFormControlInput1" 
                    name="idCT" value ='.$respuesta["id"].'>
                    
                </td>
                <td class="font-weight-bold px-3 border-right">
                     <input readonly  value='.$respuesta["Descripción"].'  type="text" 
                     class="form-control" name="descripcion" >
                </td>
                <td class="font-weight-bold px-3 border-right ">
                    <input readonly value='.$respuesta["Cantidad de Sesiones"].' type="number" class="form-control" name="cantSesion" >
               
                </td>
                <td class="font-weight-bold px-3 border-right ">
                    <input readonly  type="text" class="form-control " id="exampleFormControlInput1" 
                    name="fechaInicio" value ='.$respuesta["Fecha de inicio"].'>
                    
                </td>
                <td class="font-weight-bold px-3 border-right ">
                    <select name="selectEstado" class="form-control">
                        <option value="1">ACTIVO</option>
                        <option value="0">INACTIVO</option>
                    </select>
                </td>
                <td class="font-weight-bold px-3 border-right ">
                    <input readonly type="text" class="form-control " id="exampleFormControlInput1" 
                    name="dniPaciente" value ='.$respuesta["DNI del paciente"].'>
                    
                </td>
                <td class="font-weight-bold px-3 d-none ">
                    <input readonly type="text" class="form-control " id="exampleFormControlInput1" 
                    name="idTratamiento" value = '.$respuesta["ID Tratamiento"].'>
                   
                </td>
            </tr>
        </table> 
        <button class="btn btn-primary mt-5">
            ACTUALIZAR
        </button>

        ';
    }

    #Actualizar cliente tratamiento
    #----------------------------------------
    public function actualizarClienteTratamientoControlador(){
        
        if(isset($_POST["idCT"])) {

            $datosControlador = array(  "idCT"=>$_POST["idCT"],
                                        "estado"=>$_POST["selectEstado"]);
                                        
            $respuesta = DatosClientesTratamientos::actualizarClienteTratamientoModelo($datosControlador, "clientes_tratamientos");
                                        
            if ($respuesta == "success") {
                header('location:index.php?action=mis-tratamientos&dni='.$_GET["idM"].'');
            } else {
                header("location:index.php");
            }                              
        }
    }

    #Eliminar cliente tratamiento
    #----------------------------------------
    public function eliminarClienteTratamientoControlador() {

        $datosControlador = $_GET["id"];
                                    
        $respuesta2 = DatosControles::eliminarControlMedicoModelo($datosControlador, "controles_mensuales");
        $respuesta = DatosClientesTratamientos::eliminarClienteTratamientoModelo($datosControlador, "clientes_tratamientos");
                                    
        if ($respuesta == "success") {
            header('location:index.php?action=mis-tratamientos&dni='.$_GET["idM"].'');
        } else {
            header("location:index.php");
        }                                  
    }
}
?>