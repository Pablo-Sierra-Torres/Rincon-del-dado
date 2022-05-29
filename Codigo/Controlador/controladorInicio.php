<?php 
session_start();
include_once 'controladorSesion.php';
include_once '../Modelo/claseComentario.php';
    if(isset($_COOKIE['UsuarioLogeado'])){
        if (isset($_GET['enviar']) && validarSesion()) {
            

            $valoracion = 0;
            $nuevoComentario = new Comentario();


            $dia = date('d/m/Y');
            $hora = date('H:i:s');
            $nuevoComentario->anadirCometario($_SESSION['id'],$_GET['comentario'],$valoracion,$dia,$hora);
            header('Location: ../index.php');
        } else {
            $comentariosMostrados = new Comentario();
            $comentariosMostrados->filtrarValoracion(4.5);
            include_once '../Vista/paginas/index.php';
        }
    } else {
        cerrarSesion();
        $comentariosMostrados = new Comentario();
        $comentariosMostrados->filtrarValoracion(4.5);
        include_once '../Vista/paginas/index.php';
    }

?>