<?php 
session_start();
include_once 'controladorSesion.php';
include_once '../Modelo/claseComentario.php';
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST') {
    $nuevoComentario = new Comentario();

    $nuevoComentario->anadirCometario($_POST['nombre'],$_POST['user'],$_POST['comentario']);
    header('Location: ../index.php');
} else {
    $comentariosMostrados = new Comentario();
    $comentariosMostrados->obtenerComentarios();
    include_once '../Vista/paginas/index.php';
        
 
}


?>