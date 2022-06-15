var formulario = document.getElementById("formTarjeta");
var boton = document.getElementById("botonTarjeta");
var selectPago;
var nombreTarjeta;
var numeroTarjeta;
var fechaTarjeta;
var numeroCVV;
const ListaProductos =[];
var nombre;
var apellidos;
var fecha;
var hora;

//*añadir ID a los input y al boton en html, añadir required
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

boton.addEventListener('click',validar);
formulario.addEventListener('submit', function(e) {
    e.preventDefault();

    if (validar() &&  getCookie('UsuarioLogeado')) {
        var onRequest = new XMLHttpRequest();
        onRequest.open("POST","controladorCompra.php",true)
        var datos = new FormData(formulario)
        let precios =  document.querySelector('#T-precio').textContent;
        let productos = document.querySelectorAll('#objetos');
        let cantidades = document.querySelectorAll('#cantidad');
        


        for (let i = 0; i < productos.length; i++) {
            ListaProductos.push(productos[i].textContent+':'+cantidades[i].textContent)
        }

        datos.append("Productos",ListaProductos.toString())
        datos.append("Precios",precios.slice(6,-1))
        onRequest.onload = function(onEvent){
            if (onRequest.status == 200) {
                //Aqui se puede poner un redireccionamiento a otra pagina si quieres
                alert("Subido!!!")
                window.location.href = window.location.href
            } else {
                alert("Error: "+onRequest.status)
            }
        }
        onRequest.send(datos);
            /*
            comprobacion de php
            */
    } else {
        alert('Se necesita estar logeado')
    }

}, false);

function validar() {

    
    

    nombreTarjeta = document.getElementById("id-nombre-tarjeta");
    numeroTarjeta = document.getElementById("id-numero-tarjeta");
    fechaTarjeta = document.getElementById("id-fecha-tarjeta")
    numeroCVV = document.getElementById("id-card-cvv");
    
    nombre = document.getElementById("id-nombre-comprador");
    apellidos = document.getElementById("id-apellidos-comprador");
    fecha = document.getElementById("id-fecha-comprador");
    hora = document.getElementById("id-hora-comprador");

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