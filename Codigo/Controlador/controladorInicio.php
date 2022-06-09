<?php 
session_start();
include_once 'controladorSesion.php';
include_once '../Modelo/claseComentario.php';
    if(isset($_COOKIE['UsuarioLogeado'])){
        if (isset($_POST['enviar']) && validarSesion()) {
            

            $valoracion = 0;
            $nuevoComentario = new Comentario();


            $dia = date('d/m/Y');
            $hora = date('H:i:s');
            $nuevoComentario->anadirCometario($_POST['nombre'],$_POST['user'],$_POST['comentario']);
            header('Location: ../index.php');
        } else {
            $comentariosMostrados = new Comentario();
            $comentariosMostrados->obtenerComentarios();
            include_once '../Vista/paginas/index.php';
        }
    } else {
        cerrarSesion();
        $comentariosMostrados = new Comentario();
        $comentariosMostrados->obtenerComentarios();
        include_once '../Vista/paginas/index.php';
    }

?>