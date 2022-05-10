<?php 
function validarSesion(){
    if (isset($_SESSION['id'])) {
        return true;
    }
    return false;
}

?>