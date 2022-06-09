
let formulario = document.getElementById("formularioRegistro");
let boton = document.getElementById("botonenviar");

var nombre;
var apellidos;
var correo;
var correo2;
var pass;
var pass2;
var cp;
var poblacion;
var direccion;
var fijo;
var movil;

//*añadir ID a los input y al boton en html, añadir required


formulario.addEventListener('submit', function(e) {
    e.preventDefault();

    nombre = document.getElementById("nombre");
    apellidos = document.getElementById("apellidos");
    correo = document.getElementById("correo");
    correo2 = document.getElementById("correo2");
    pass = document.getElementById("pass");
    pass2 = document.getElementById("pass2");;
    cp = document.getElementById("cp");
    poblacion = document.getElementById("poblacion");
    direccion = document.getElementById("direccion");
    fijo = document.getElementById("tlfFijo");
    movil = document.getElementById("tlfMovil");

    if (validar()) {
        this.submit();
            /*
            comprobacion de php
            */
    }

}, false);

function validar() {
    campos = formulario.elements;
    for (let i = 0; i < campos.length; i++) {

        campos[i].setCustomValidity(''); //no deja el mensaje vacio sino el mensaje generico "Completa este campo"
    }

    return (validarAPI() && validarJS())

}

function validarJS() {
    return nombreJS() && apellidosJS() && correoJS() && passJS()  && cpJS() && poblacionJS() && direccionJS() && fijoJS() && movilJS();
}

function validarAPI() {
    return nombreAPI() && apellidosAPI() && correoAPI() && passAPI()  && cpAPI() && poblacionAPI() && direccionAPI() && fijoAPI() && movilAPI();

}

function nombreJS(){}
function nombreAPI(){}

function apellidosJS(){}
function apellidosAPI(){}


//comprobar esto
function correoJS() {
    let correoValor = correo.value;
    let patron = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;

    if (!patron.test(correoValor)) {
        correo.setCustomValidity("Direccion de correo no valido js ");
        return false
    } else {
        return true;
    }
}
function correoAPI() {

    if (correo.validity.valueMissing) {
        correo.setCustomValidity("Introduce tu correo electronico");
        return false;
    } else if (correo.validity.patternMissmatch) {

        correo.setCustomValidity("Direccion de correo no valida api");
        return false;
    } else {
        return true;
    }
}


function passJS() {

    let passValor = pass.value;

    if (passValor == '') {

        pass.setCustomValidity("Hace falta contraseña");
        return false;
    } else {
        return true;
    }
}

function passAPI() {
    if (pass.validity.valueMissing) {
        pass.setCustomValidity("Hace falta contraseña");
        return false;
    } else {
        return true;
    }
}

function cpJS(){}
function cpAPI(){}

function poblacionJS(){}
function poblacionAPI(){}

function direccionJS(){}
function direccionAPI(){}

function fijoJS(){}
function fijoAPI(){}

function movilJS(){}
function movilAPI(){}