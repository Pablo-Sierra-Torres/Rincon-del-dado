<?php
session_start();
include_once '../Modelo/claseUsuario.php'; 
include_once 'controladorSesion.php';
include_once '../Modelo/claseProducto.php';

$name = $_GET['nombreProducto'];
$producto = new Producto();
$productoSSS = $producto -> productoPorNombre($name);

include_once '../Vista/paginas/producto.php';

?>