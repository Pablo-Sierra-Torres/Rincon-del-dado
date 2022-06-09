<?php
session_start();
$error = false;

    if (isset($_POST['enviar'])) {
        include_once '../Modelo/claseUsuario.php';
        include_once './controladorSesion.php';
        $usuario_logeado = new Usuario();
        if($usuario_logeado->loginUsuario($_POST['usuario'],$_POST['pass'])) {
            print($_SESSION['id']);
            if(validarSesion()) {
                $dataCookie=$usuario_logeado->detallesUsuario($_SESSION['id']);
                $datos=serialize($dataCookie);
                if (isset($_COOKIE['UsuarioLogeado'])) {
                    setcookie("UsuarioLogeado",$datos,time()-3600);
                }
                setcookie("UsuarioLogeado",$datos,time()+3600,'/');
                header('Location: ./controladorPerfil.php');
            }
            
            
        } else {
            $error = true;
            include_once '../Vista/paginas/login.php';
        }
        
    } else {
        $error = true;
        include_once '../Vista/paginas/login.php';
    }

?>