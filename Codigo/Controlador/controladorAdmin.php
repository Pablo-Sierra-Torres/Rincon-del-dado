<?php
session_start();
include_once '../Modelo/claseUsuario.php'; 
include_once '../Modelo/claseProducto.php'; 
include_once 'controladorSesion.php';

$method = $_SERVER['REQUEST_METHOD'];

    
include '../Vista/paginas/admin.php';
$operacion= new Producto();

if($method == 'POST') {
    if(isset($_POST["addProduct"])) {
        $operacion->productoReponer($_POST['nombreproducto1'],$_POST['cantidad']);
        
    }
    
    if(isset($_POST["delProduct"])) {
        $operacion->productoBorrar($_POST['nombreproducto2']);
    }


}

?>