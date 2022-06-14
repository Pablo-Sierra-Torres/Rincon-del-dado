<?php
session_start();
include_once '../Modelo/claseUsuario.php'; 
include_once '../Modelo/claseProducto.php'; 
include_once 'controladorSesion.php';

$method = $_SERVER['REQUEST_METHOD'];

    
include '../Vista/paginas/admin.php';


/*if (validarSesion()) {
        //Aqui iria la vista perfil
        include '../Vista/paginas/admin.php';
    }
    else {
        header('Location: ../Vista/paginas/index.php');
    }
*/
?>