boton = document.getElementById("botonform");
boton.addEventListener('click',creaReserva)

var nombre;
var correo;
var texto;

/*añadir ID a los input en html añadir required y restriccion de pattern de correo*/


function creaReseña(){
    nombre = document.getElementById("nombreInput");
    correo = document.getElementById("correoInput");
    texto = document.getElementById('textoInput');
       
    if (asegurar() && validar()){
        
        /*añadir PHP y que inserte
        nombre.value
        correo.value
        texto.value
        */

        alert("reserva guardada")
    }

}

function asegurar(){
    return  confirm("confirmas la reseña con estos datos?");
 }
 

function validar(){
    campos = [nombre, correo,texto]
    for (let i = 0; i < campos.length; i++) {

        campos[i].setCustomValidity('');//no deja el mensaje vacio sino el mensaje generico "Completa este campo"
    }

    return(validarAPI() && validarJS())

}

function validarJS(){
    return nombreJS() && correoJS() && textoJS();
}

function validarAPI(){
    return nombreAPI() && correoAPI() && textoAPI();

}


function nombreAPI(){
    if (nombre.validity.valueMissing) {
        nombre.setCustomValidity("Dinos como te llamas");
        return false;
    }else{
        return true;
    }
}


function nombreJS(){
    let nombreValor = nombre.value;

    if (nombreValor == '') {

        nombre.setCustomValidity("¿Cual es tu nombre?");
        return false;    
    }else{
        return true;
    }
}


function correoAPI(){
    
    if (correo.validity.valueMissing) {
        correo.setCustomValidity("Dinos como te llamas");
        return false;
    }else if (correo.validity.patternMissmatch){

        correo.setCustomValidity("Direccion de correo no valida");
        return false;
    }else{
        return true;
    }
}

//comprobar esto
function correoJS(){
    let textoValor = texto.value;
    let patron  = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
    
    if(!patron.test(textoValor)){
        texto.setCustomValidity("Direccion de correo no valido");
        return false
    }else{
        return true;
    }
    

}

function textoAPI(){
    if (texto.validity.valueMissing) {
        texto.setCustomValidity("La reseña no puede estar vacia");
        return false;
    }else{
        return true;
    }
}
function textoJS(){

    let textoValor = texto.value;

    if (textoValor == '') {

        texto.setCustomValidity("¿Por que quieres enviar una reseña vacia?");
        return false;    
    }else{
        return true;
    }
}