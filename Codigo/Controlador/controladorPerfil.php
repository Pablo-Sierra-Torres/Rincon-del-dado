<?php
session_start();
include_once '../Modelo/claseUsuario.php'; 
include_once 'controladorSesion.php';
if (validarSesion()) {
    //Aqui iria la vista perfil
    include '../Vista/paginas/miPerfil.php';
}
else {
    header('Location: ../index.php');
}

?>