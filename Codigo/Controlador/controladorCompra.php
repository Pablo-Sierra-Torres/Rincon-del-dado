<?php 
session_start();
include_once 'controladorSesion.php';
include_once '../Modelo/claseProducto.php';

<<<<<<< HEAD
=======
$productos=new Producto();

$Estrategia = $productos->mostrarProductos('Estrategia');
$Clasicos = $productos->mostrarProductos('Clasicos');
$TGC = $productos->mostrarProductos('TCG');

>>>>>>> e701552fb697bd8166855e29495c532af6f1f6b8

include_once '../Vista/paginas/tienda.php';



?>