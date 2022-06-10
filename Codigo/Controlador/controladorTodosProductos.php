<?php 

include_once '../Modelo/claseProducto.php';

$listaProductos = new Producto();

$productos =$listaProductos->mostrarTodosProductos();

print_r(json_encode($productos));

?>