<?php
session_start(); 
include_once 'controladorSesion.php';
if (validarSesion()) {
    $sesionUsuario = unserialize($_SESSION['login']);
    //Aqui iria la vista perfil
    header('Location: ../Vista/paginas/miPerfil.php');
}
else {
    header('Location: ../Vista/paginas/index.php');
}

?>