<?php 

    include_once '../Vista/paginas/registro.php';
   

    if(isset($_POST['registrar'])) {
        include_once '../Modelo/claseUsuario.php';

        $usuario_registrado = new Usuario();
           
    }

?>