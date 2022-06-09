function añadeFuncionalidadBotonCompra(){

    let botonesComprar = document.getElementsByTagName("botonCompra");

    for (let i = 0; i < celdas.length; i++) {
        botonesComprar[i].addEventListener('click',anadeCarro);
    }
}

let Carro = [];

function anadeCarro(evt){


    this.id



}

function muestraCarro(){}









///////////////////////////////////////////////////////////
//boton = document.getElementById("botonform");
//boton.addEventListener('click',creaReserva)

let formulario = document.getElementById("formTarjeta");
let boton = document.getElementById("botonTarjeta");
var selectPago;
var nombreTarjeta;
var numeroTarjeta;
var fechaTarjeta;
var numeroCVV;

var nombre;
var apellidos;
var fecha;
var hora;

//*añadir ID a los input y al boton en html, añadir required


formulario.addEventListener('submit', function(e) {
    e.preventDefault();

    

    nombreTarjeta = document.getElementById("id-nombre-tarjeta");
    numeroTarjeta = document.getElementById("id-numero-tarjeta");
    fechaTarjeta = document.getElementById("id-fecha-tarjeta")
    numeroCVV = document.getElementById("id-card-cvv");
    
    nombre = document.getElementById("id-nombre-comprador");
    apellidos = document.getElementById("id-apellidos-comprador");
    fecha = document.getElementById("id-fecha-comprador");
    hora = document.getElementById("id-hora-comprador");



    if (validar()) {
        formulario.submit()
            /*
            comprobacion de php
            */
    }

}, false);

function validar() {
    selectPago= document.getElementById("id-form-pago").value;
    campos = formulario.elements
    for (let i = 0; i < campos.length; i++) {

        campos[i].setCustomValidity(''); //no deja el mensaje vacio sino el mensaje generico "Completa este campo"
    }
    switch (selectPago) {
        case "0":

            return false;
            
            break;
        case "1":
            return (validarJS1());     
            break;
        case "2":

            return (validarJS2());
            break;

        default:

            return false;
            break;
    }
}

function validarJS1() {
    console.log("entro en js1");

    return nombreTarjetaJS() && numeroTarjetaJS() && fechaCadJS()  && cvvJS();
}

function validarJS2() {
    return nombreJS() && apellidosJS(), fechaJS() &&  horaJS();
}



//comprobar esto
function nombreTarjetaJS() {
    let nombreValor = nombreTarjeta.value;
    if (nombreValor == '') {
        nombreTarjeta.setCustomValidity("Este campo es necesario");
        return false;
    } else {
        return true;
    }
}

function numeroTarjetaJS() {
    let tarjetaValor = numeroTarjeta.value;
    if (tarjetaValor == '') {
        numeroTarjeta.setCustomValidity("Este campo es necesario");
        return false;
    } else {
        return true;
    }
}



function fechaCadJS() {
    let fechaTarjetaValor = fechaTarjeta.value;
    if (fechaTarjetaValor == '') {
        fechaTarjeta.setCustomValidity("Este campo es necesario");
        return false;
    } else {
        return true;
    }
}


function cvvJS() {
    let numeroCVVValor = numeroCVV.value;
    if (numeroCVVValor == '') {
        numeroCVV.setCustomValidity("Este campo es necesario");
        return false;
    } else {
        return true;
    }
}

///parte2

function nombreJS() {
    let nombreValor = nombre.value;
    if (nombreValor == '') {
        nombre.setCustomValidity("Este campo es necesario");
        return false;
    } else {
        return true;
    }
}

function apellidosJS() {
    let apellidosValor = apellidos.value;
    if (apellidosValor == '') {
        apellidos.setCustomValidity("Este campo es necesario");
        return false;
    } else {
        return true;
    }
}



function fechaJS() {
    let fechaValor = fecha.value;
    if (fechaValor == '') {
        fecha.setCustomValidity("Este campo es necesario");
        return false;
    } else {
        return true;
    }
}


function horaJS() {
    let horaValor = hora.value;
    if (horaValor == '') {
        hora.setCustomValidity("Este campo es necesario");
        return false;
    } else {
        return true;
    }
}