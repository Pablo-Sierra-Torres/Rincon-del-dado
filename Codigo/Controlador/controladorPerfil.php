<?php
session_start();
include_once '../Modelo/claseUsuario.php'; 
include_once 'controladorSesion.php';

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST') {
    $actualizarUser = new Usuario();
    $name = $_FILES['Subirimagen']['name'];
    $tmp_name = $_FILES['Subirimagen']['tmp_name'];
    $actualizarUser->actualizarImagen($_SESSION['id'],$name);

    $ruta = '../Vista/imgs/usuarios/'.$name;

    move_uploaded_file($tmp_name,$ruta);
    $dataCookie=$actualizarUser->detallesUsuario($_SESSION['id']);

        setcookie("UsuarioLogeado",serialize($dataCookie),time()-36000);
        setcookie("UsuarioLogeado",serialize($dataCookie),time()+3600,'/');
    
    header("Location: controladorPerfil.php");
} else {

    if (validarSesion()) {
        //Aqui iria la vista perfil
        include '../Vista/paginas/miPerfil.php';
    }
    else {
        header('Location: ../Vista/paginas/index.php');
    }
}
?>