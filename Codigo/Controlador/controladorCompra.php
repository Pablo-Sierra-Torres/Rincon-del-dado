<?php 
session_start();
include_once 'controladorSesion.php';
include_once '../Modelo/claseProducto.php';
include_once '../Modelo/claseCompra.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    $compraNueva = new Compra();
    $str_json = file_get_contents('php://input');
    $response = json_decode($str_json);
    echo $response->{"Mascarade"};
}else {

    $productos=new Producto();

    $Estrategia = $productos->mostrarProductos('Estrategia');
    $Clasicos = $productos->mostrarProductos('Clasicos');
    $TGC = $productos->mostrarProductos('TCG');

    include_once '../Vista/paginas/tienda.php';
}




?>