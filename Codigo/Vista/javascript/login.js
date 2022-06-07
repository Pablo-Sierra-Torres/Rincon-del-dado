boton = document.getElementById("botonform");
boton.addEventListener('click',creaReserva)

var nombre;
var pass;

//*añadir ID a los input y al boton en html, añadir required


function creaReseña(){
    nombre = document.getElementById("nombreInput");
    pass = document.getElementById("passInput");
       
    if (asegurar() && validar()){
        
        /*
        comprobacion de php
        */

        alert("login js validado, borrar este mensaje del codigo al final")
    }

}

function asegurar(){
    return  confirm("confirmas la reseña con estos datos?");
 }
 

function validar(){
    campos = [nombre,pass]
    for (let i = 0; i < campos.length; i++) {

        campos[i].setCustomValidity('');//no deja el mensaje vacio sino el mensaje generico "Completa este campo"
    }

    return(validarAPI() && validarJS())

}

function validarJS(){
    return nombreJS() && passJS();
}

function validarAPI(){
    return nombreAPI() && passAPI();

}


function nombreAPI(){
    if (nombre.validity.valueMissing) {
        nombre.setCustomValidity("Nombre de usuario no puede estar vacio");
        return false;
    }else{
        return true;
    }
}


function nombreJS(){
    let nombreValor = nombre.value;

    if (nombreValor == '') {

        nombre.setCustomValidity("Nombre de usuario no puede estar vacio");
        return false;    
    }else{
        return true;
    }
}

function passAPI(){
    if (pass.validity.valueMissing) {
        pass.setCustomValidity("Hace falta contraseña");
        return false;
    }else{
        return true;
    }
}
function passJS(){

    let passValor = pass.value;

    if (passValor == '') {

        pass.setCustomValidity("Hace falta contraseña");
        return false;    
    }else{
        return true;
    }
}