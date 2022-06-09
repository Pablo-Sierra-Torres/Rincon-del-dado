//boton = document.getElementById("botonform");
//boton.addEventListener('submit',creaReserva)

let formulario = document.getElementById("formularioReservas");

var dia;
var mes;
var diaCompleto;
var selectEntrada;
var horaEntrada;
var selectSalida;
var horaSalida;
var nombre;
var personas;

// EL evento realiza la solicitud
formulario.addEventListener('submit',function (e) {
    e.preventDefault();
    
    dia = document.getElementsByClassName("cal-day__day--selected")[0].innerHTML;
    mes = document.getElementsByClassName("cal-month__current")[0].innerHTML
    diaCompleto = dia + " " + mes;

    selectEntrada = document.getElementById('entrada');
    horaEntrada = selectEntrada.options[selectEntrada.selectedIndex];
    
    selectSalida = document.getElementById('salida');
    horaSalida = selectSalida.options[selectSalida.selectedIndex];
    
    nombre = document.getElementById('nombreInput');
    //si lo queremos como numero añadir parseInt al .value
    personas = document.getElementById('personasInput');

    if (asegurar() && validar()){
        //El dataform selecciona los datos que quieres mandar del fromulario.
        var datos = new FormData(formulario)

        /*añadir PHP y que inserte
        nombre.value
        dia+" de  "+mes
        horaEntrada.value
        horaSalida.value
        personas.value
        */

        //Agrego el campo fecha al formdata
        datos.append('fecha',diaCompleto)

        //Realizar una peticion, es importante indicar la ruta y el metodo, ahora hay que ver el controlador
        var onRequest = new XMLHttpRequest();
        onRequest.open("POST","controladorReservas.php",true)
        onRequest.onload = function(onEvent){
            if (onRequest.status == 200) {
                //Aqui se puede poner un redireccionamiento a otra pagina si quieres
                alert("Subido!!!")
            } else {
                alert("Error: "+onRequest.status)
            }
        }
        onRequest.send(datos);
    }
},false)






function asegurar(){
    return  confirm("confirmas la reservas con estos datos?");
 }
 




function validar(){
  campos = [nombre, personas]
    for (let i = 0; i < campos.length; i++) {

        campos[i].setCustomValidity('');//no deja el mensaje vacio sino el mensaje generico "Completa este campo"
    }

    return(validarAPI() && validarJS())

}

function validarJS(){
    return nombreJS() && personasJS();
}

function validarAPI(){
    return nombreAPI() && personasAPI();

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


function personasAPI(){
    if(personas.validity.valueMissing) {
        personas.setCustomValidity("¿Cuantos vais a venir?");
        return false;

    }else if (personas.validity.typeMismatch){
        personas.setCustomValidity("Introduce cuantos sois en numero");
        return false;
        
    }else if (personas.validity.rangeUnderflow){        
        personas.setCustomValidity("¿No viene nadie?");
        return false;

    }else if(personas.validity.rangeOverflow) {
        personas.setCustomValidity("Maximo de 8 personas por reserva");
        return false;
    }else{
        return true;
    }
}

function personasJS(){
    let personasValor = personas.value;

    if(personasValor == '') {

        personas.setCustomValidity("¿Cuantos vendreis a la tienda?");
        return false;

    }else if (isNaN(personasValor)){

        personas.setCustomValidity("Introduce tu personas en numero si quieres reservar");
        return false;
        
    }else if (personasValor <1){

        personas.setCustomValidity("¿No viene nadie?")
        return false;

    }else if(personasValor > 8) {

        personas.setCustomValidity("Maximo 8 personas");
        return false;
    }else{
        return true;
    }
}