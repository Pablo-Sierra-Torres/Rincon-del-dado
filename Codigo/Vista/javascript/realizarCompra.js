$('#id-form-pago').click( function(){
  let opcion =$('#id-form-pago').val();
  console.log(opcion)
  if(opcion == '1') {
      $('#opcion-1').removeClass('d-none')
      $('#opcion-2').addClass('d-none')
  }else if (opcion == '2') {
      $('#opcion-2').removeClass('d-none')
      $('#opcion-1').addClass('d-none')
  } else {
      $('#opcion-1').addClass('d-none')
      $('#opcion-2').addClass('d-none')
  }

})

$('#id-cerrar-card').click( function (){
$('#tarjeta-creada').addClass('d-none')
})
$('#id-btn-pago').click( function () {
$('#tarjeta-creada').removeClass('d-none')
})

