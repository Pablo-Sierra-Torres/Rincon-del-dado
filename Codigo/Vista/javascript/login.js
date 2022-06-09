//boton = document.getElementById("botonform");
//boton.addEventListener('click',creaReserva)

let formulario = document.getElementById("formularioLogin");
let boton = document.getElementById("botonenviar")
var correo;
var pass;

//*añadir ID a los input y al boton en html, añadir required


boton.addEventListener('click', function(e) {
    e.preventDefault();

    correo = document.getElementById("correoInput");
    pass = document.getElementById("passInput");

    if (validar()) {
        formulario.submit()
            /*
            comprobacion de php
            */
    }

}, false);

function validar() {
    campos = [correo, pass]
    for (let i = 0; i < campos.length; i++) {

        campos[i].setCustomValidity(''); //no deja el mensaje vacio sino el mensaje generico "Completa este campo"
    }

    return (validarAPI() && validarJS())

}

function validarJS() {
    return correoJS() && passJS();
}

function validarAPI() {
    return correoAPI() && passAPI();

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

function passAPI() {
    if (pass.validity.valueMissing) {
        pass.setCustomValidity("Hace falta contraseña");
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