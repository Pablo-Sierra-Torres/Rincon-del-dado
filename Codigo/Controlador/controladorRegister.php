<?php 
    $error = false;
    include_once '../Vista/paginas/registro.php';
   

    if(isset($_POST['registrar']) && isset($_POST['condiciones'])) {
        if($_POST['correo'] == $_POST['confirmar_correo'] && $_POST['passd'] == $_POST['confirmar_passd']) {
            include_once '../Modelo/claseUsuario.php';
            $notificacion;
            $usuario_registrado = new Usuario();
            if (isset($_POST['notificaciones'])) {
                $notificacion = '1';
            } else {
                $notificacion = '0';
            }
            $usuario_registrado->registerUsuario($_POST['nombre'],$_POST['apellidos'],$_POST['correo'],$_POST['passd'],$_POST['codigo_postal'],$_POST['poblacion'],$_POST['direccion'],$_POST['telefonofijo'],$_POST['telefonomovil'],$_POST['telefonomovil'],$_POST['notificaciones']);
            header('Location: ./ControladorLogin.php');
        } else {
            $error = true;
        }
             } else {
        $error = true;
    }

?>