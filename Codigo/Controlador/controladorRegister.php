<?php 
    session_start();
    $error = false;
    if(isset($_POST['condiciones'])) {
        if($_POST['correo'] == $_POST['confirmar_correo'] && $_POST['passd'] == $_POST['confirmar_passd']) {
            include_once '../Modelo/claseUsuario.php';
            $notificacion;
            $usuario_registrado = new Usuario();
            if (isset($_POST['notificaciones'])) {
                $notificacion = '1';
            } else {
                $notificacion = '0';
            }
            


            $usuario_registrado->registerUsuario($_POST['nombre'],$_POST['apellidos'],$_POST['correo'],$_POST['passd'],$_POST['codigo_postal'],$_POST['poblacion'],$_POST['direccion'],$_POST['telefonoFijo'],$_POST['telefonomovil'],$_POST['telefonomovil'],$notificacion);
            
            $dataCookie=$usuario_registrado->detallesUsuario($_SESSION['id']);
            $datos=serialize($dataCookie);
            
            if (isset($_COOKIE['UsuarioLogeado'])) {
                setcookie("UsuarioLogeado","",time()-3600);
            }

            setcookie("UsuarioLogeado",$datos,time()+3600,'/');
            header('Location: ./controladorPerfil.php');
        } else {
            $error = true;
        }
             } else {
                include_once '../Vista/paginas/registro.php';         
            $error = true;
    }

?>