<?php 
session_start();
include_once 'controladorSesion.php';
include_once '../Modelo/claseProducto.php';
include_once '../Modelo/claseCompra.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    $compraNueva = new Compra();

    $dia = date("d-m-Y");
    $hora = date("H:i:s"); 
    $compraNueva->anadirCompra($_SESSION['id'],$_POST['Productos'],$dia,$hora,floatval($_POST['Precios']));

}else {

    $productos=new Producto();

    $Estrategia = $productos->mostrarProductos('Estrategia');
    $Clasicos = $productos->mostrarProductos('Clasicos');
    $TGC = $productos->mostrarProductos('TCG');

    include_once '../Vista/paginas/tienda.php';
}




?>