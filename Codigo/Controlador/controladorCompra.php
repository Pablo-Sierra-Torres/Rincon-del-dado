<?php 
session_start();
include_once 'controladorSesion.php';
include_once '../Modelo/claseProducto.php';


$productos=new Producto();

$Estrategia = $productos->mostrarProductos('Estrategia');
$Clasicos = $productos->mostrarProductos('Clasicos');
$TGC = $productos->mostrarProductos('TCG');

include_once '../Vista/paginas/tienda.php';



?>