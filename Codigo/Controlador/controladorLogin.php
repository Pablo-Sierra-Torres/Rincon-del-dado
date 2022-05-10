<?php
session_start();
$error = false;

include_once '../Vista/paginas/login.php';


    if (isset($_POST['enviar'])) {
        include_once '../Modelo/claseUsuario.php';
        include_once './controladorSesion.php';
        $usuario_logeado = new Usuario();
        if($usuario_logeado->loginUsuario($_POST['usuario'],$_POST['pass'])) {
            if(validarSesion()) {
                $user=$usuario_logeado->detallesUsuario($_SESSION['id']);
                header('Location: ./controladorPerfil.php');
            }
            
            
        } else {
            $error = true;
        }
        
    } else {
        $error = true;
    }

?>