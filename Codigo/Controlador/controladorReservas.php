<?php 
session_start();
include_once 'controladorSesion.php';
include_once '../Modelo/claseReservar.php';


//Vemos el metodo con el se realiza la peticion
$method = $_SERVER['REQUEST_METHOD'];

//Si es post creamos la respusta, si no solo mostramos la pagina
if ($method == 'POST'){
   
    $reserva = new Reserva();
    if($reserva->crearReserva($_POST['user'],$_POST['fecha'],$_POST['entrada'],$_POST['salida'],$_POST['personas'])) {
        echo "Envio Correcto";
    } else {
        echo "error en la insercion";
    }
} else {
include_once '../Vista/paginas/reservas.php';
}


?>