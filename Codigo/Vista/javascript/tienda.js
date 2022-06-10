
const templateCard = document.getElementById('card-template').content
const templateTotal = document.getElementById('template-end').content
const cards = document.getElementById('cards')
const total = document.getElementById('total')

const fragment = document.createDocumentFragment()


let lista = {}

document.addEventListener('DOMContentLoaded', () => {
    if (localStorage.getItem('carrito')) {
        lista = JSON.parse(localStorage.getItem('carrito'))
        pintarCard()
    }
})

const carrito = document.getElementById('cajatienda')



carrito.addEventListener('click', e => {
    addCarrito(e)
})

const pintarCard = () => {
    console.log(lista)
    cards.innerHTML = ''
    Object.values(lista).forEach(producto => {
        templateCard.querySelector('.card-title').textContent = producto.title
        templateCard.querySelector('.pbt').textContent = (producto.cantidad * (producto.precio).toFixed(2)).toString()+ ' €'
        templateCard.querySelector('.text-center').textContent = producto.cantidad
        templateCard.querySelectorAll('.btn-danger')[0].setAttribute("id",producto.id)
        templateCard.querySelectorAll('.btn-danger')[1].setAttribute("id",producto.id)
        templateCard.querySelector('.pse').setAttribute("id",producto.id)
        templateCard.querySelector('.bi-trash').setAttribute("id",producto.id)
        const clone = templateCard.cloneNode(true)

        fragment.appendChild(clone)
    })
    cards.append(fragment)
    pintarTotal()

    localStorage.setItem('carrito',JSON.stringify(lista))
}

cards.addEventListener('click', e => {
    btnAccion(e)
})

const pintarTotal = () => {
    
    total.innerHTML = ''
    if (Object.keys(lista).length === 0 || Object.keys(lista).length === undefined) {
        total.innerHTML = '<h4> Carrito Vacio  -  No hay productos</h4>'
    } else{
        const nCantidad = Object.values(lista).reduce((acc, {cantidad}) => acc + cantidad,0)
    const nPrecio = Object.values(lista).reduce((acc, {cantidad,precio}) => acc + (cantidad*precio),0)

    templateTotal.querySelector('#T-cantidad').textContent = "Total productos: "+(nCantidad).toString() 
    templateTotal.querySelector('#T-precio').textContent = "Total: " + (parseFloat(nPrecio).toFixed(2)).toString() + ' €'
    
    const clone = templateTotal.cloneNode(true)

    fragment.appendChild(clone)
    total.append(fragment)
    }
    
    
}


const addCarrito = e => {
    //console.log(e.target.classList.contains('btn-primary'))
    if (e.target.classList.contains('btn-primary')) {
        console.log(e.target.parentElement)
        setLista(e.target.parentElement)
    }
    e.stopPropagation();
}

const setLista = objeto => {
    //console.log(objeto)
    const productoN = {
        id: objeto.querySelector('.btn-primary').id,
        title: objeto.querySelector('.card-title').textContent,
        precio: parseFloat(objeto.querySelector('.d-none').textContent),
        cantidad:1
    } 

    if (lista.hasOwnProperty(productoN.id)) {
        productoN.cantidad = lista[productoN.id].cantidad +1
    } 
    lista[productoN.id]= {...productoN}
    pintarCard()
}

const btnAccion = e => {

    if(e.target.innerHTML == '+') {
        //lista[e.target.id]
        console.log(lista[e.target.id])
        const producto = lista[e.target.id]
        producto.cantidad++
        lista[e.target.id] = {...producto}
        pintarCard()
    }
    if(e.target.innerHTML == '-') {
        //lista[e.target.id]
        console.log(lista[e.target.id])
        const producto = lista[e.target.id]
        producto.cantidad--
        if (producto.cantidad === 0) {
            delete lista[e.target.id]
        } else {
            lista[e.target.id] = {...producto}
        }
        
        pintarCard()
    }

    if(e.target.classList.contains('pse') || e.target.classList.contains('bi-trash')) {
        console.log(e.target)
        delete lista[e.target.id]
        pintarCard()
    }
    
    e.stopPropagation()
}





