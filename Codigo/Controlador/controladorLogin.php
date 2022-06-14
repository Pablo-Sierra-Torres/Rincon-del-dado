<?php
        include_once '../Modelo/claseUsuario.php';
        include_once './controladorSesion.php';
session_start();
$error = false;

$method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'POST') {
        $usuario_logeado = new Usuario();
        if($usuario_logeado->loginUsuario($_POST['usuario'],$_POST['pass'])) {
            //print($_SESSION['id']); 
            //print para comprobar que entramos y q cookie existe
            if(validarSesion()) {
                $dataCookie=$usuario_logeado->detallesUsuario($_SESSION['id']);
                if (isset($_COOKIE['UsuarioLogeado'])) {
                    setcookie("UsuarioLogeado",serialize($dataCookie),time()-3600);

                } else {
                    setcookie("UsuarioLogeado",serialize($dataCookie),time()+3600,'/');
                }
                
                header('Location: ./controladorPerfil.php');

                }else{
                    setcookie("UsuarioLogeado",serialize($dataCookie),time()+3600,'/');
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