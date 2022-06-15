let btnAñadir = document.getElementById("btnAñadir");
let btnEliminar = document.getElementById("btnEliminar");

btnAñadir.addEventListener('click', mensajeAñadir, false);
btnEliminar.addEventListener('click', mensajeEliminar, false);


function mensajeAñadir(e){

    e.preventDefault();

    let juego = document.getElementById("nombreproducto1").value;
    let cantidad = document.getElementById("cantidad").value;

    alert(`Añadidos ${cantidad} unidades de ${juego}`);
}

function mensajeEliminar(e){

    e.preventDefault();

    let juego = document.getElementById("nombreproducto2").value;

    alert(` ${juego} eliminado de la base de datos`);
}