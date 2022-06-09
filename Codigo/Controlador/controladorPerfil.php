<?php
session_start();
include_once '../Modelo/claseUsuario.php'; 
include_once 'controladorSesion.php';

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST') {
    $actualizarUser = new Usuario();
    $name = $_FILES['subir_imagen']['name'];
    echo $name;
    $actualizarUser->actualizarImagen($name,$_SESSION['id']);
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