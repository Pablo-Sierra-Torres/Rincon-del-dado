<!DOCTYPE html>

<html>

    <head>

        <title>El Rincón del dado</title>
       
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="../Vista/bootstrap/css/bootstrap.min.css">
		    <script src="../Vista/bootstrap/js/bootstrap.min.js"></script>

        
        <link rel="stylesheet" href="../Vista/css/inicio.css">
        <link rel="stylesheet" href="../Vista/css/var.css">
        <link rel="stylesheet" href="../Vista/css/cabecera.css">
        <link rel="stylesheet" href="../Vista/css/footer.css">
        <link rel="stylesheet" href="../Vista/css/reservas.css">

        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script defer src="../Vista/javascript/slider.js"></script>
        <script defer src="../Vista/javascript/dados.js"></script>



        <script defer src="https://momentjs.com/downloads/moment-with-locales.js"></script>

        <script defer src="../Vista/javascript/calendario.js"></script>

    </head>

    <body>

      <!--CABECERA-->

      <?php include '../Vista/partes/cabecera.php';?>

      <!--CUERPO-->

      <h1 id="tilreservas">Reserva de mesa</h1>
      <div class = "container" id="contenedorReservas">
        <hr>
        <div class="row">
                  <div class="col-lg-8">

                    <div class="calendar">
                      <div class="calendar__month">
                        <div class="cal-month__previous"><</div>
                        <div class="cal-month__current"></div>
                        <div class="cal-month__next">></div>
                      </div>
                      <div class="calendar__head">
                        <div class="cal-head__day"></div>
                        <div class="cal-head__day"></div>
                        <div class="cal-head__day"></div>
                        <div class="cal-head__day"></div>
                        <div class="cal-head__day"></div>
                        <div class="cal-head__day"></div>
                        <div class="cal-head__day"></div>
                      </div>
                      <div class="calendar__body">
                        <div class="cal-body__week">
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                        </div>
                        <div class="cal-body__week">
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                        </div>
                        <div class="cal-body__week">
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                        </div>
                        <div class="cal-body__week">
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                        </div>
                        <div class="cal-body__week">
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                        </div>
                        <div class="cal-body__week">
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                          <div class="cal-body__day"></div>
                        </div>
                      </div>
                    </div>
  
                  </div>                      

                  <div  class="col-lg-4" id="formularioReservas">
                    <h4>Hora de entrada<h4>
                    <select name="entrada" id="entrada" >
                      <option value="10:30">10:30 h.</option>
                      <option value="10:45">10:45 h.</option>
                      <option value="11:00">11:00 h.</option>
                      <option value="11:15">11:15 h.</option>
                      <option value="11:30">11:30 h.</option>
                      <option value="11:45">11:45 h.</option>
                      <option value="12:00">12:00 h.</option>
                      <option value="12:15">12:15 h.</option>
                      <option value="12:30">12:30 h.</option>
                      <option value="12:45">12:45 h.</option>
                      <option value="13:00">13:00 h.</option>
                      <option value="13:15">13:15 h.</option>
                      <option value="13:30">13:30 h.</option>
                      <option value="13:45">13:45 h.</option>
                      <option value="14:00">14:00 h.</option>
                      <option value="14:15">14:15 h.</option>
                      <option value="14:30">14:30 h.</option>
                      <option value="14:45">14:45 h.</option>
                      <option value="15:00">15:00 h.</option>
                      <option value="15:15">15:15 h.</option>
                      <option value="15:30">15:30 h.</option>
                      <option value="15:45">15:45 h.</option>
                      <option value="16:00">16:00 h.</option>
                      <option value="16:15">16:15 h.</option>
                      <option value="16:30">16:30 h.</option>
                      <option value="16:45">16:45 h.</option>
                      <option value="17:00">17:00 h.</option>
                      <option value="17:15">17:15 h.</option>
                      <option value="17:30">17:30 h.</option>
                      <option value="17:45">17:45 h.</option>
                      <option value="18:00">18:00 h.</option>
                      <option value="18:15">18:15 h.</option>
                      <option value="18:30">18:30 h.</option>
                      <option value="18:45">18:45 h.</option>
                      <option value="19:00">19:00 h.</option>
                      <option value="19:15">19:15 h.</option>
                      <option value="19:30">19:30 h.</option>
                      <option value="19:45">19:45 h.</option>
                      <option value="20:00">20:00 h.</option>
                      <option value="20:15">20:15 h.</option>
                      <option value="20:30">20:30 h.</option>
                      <option value="20:45">20:45 h.</option>
                      <option value="21:00">21:00 h.</option>
                      <option value="21:15">21:15 h.</option>
                      <option value="21:30">21:30 h.</option>
                      <option value="21:45">21:45 h.</option>
                      <option value="22:00">22:00 h.</option>
                      <option value="22:15">22:15 h.</option>
                    </select>
                   
                   
                    <h4>Hora de salida<h4>

                    <select name="salida" id="salida" >
                      
                        <option value="10:45">10:45 h.</option>
                        <option value="11:00">11:00 h.</option>
                        <option value="11:15">11:15 h.</option>
                        <option value="11:30">11:30 h.</option>
                        <option value="11:45">11:45 h.</option>
                        <option value="12:00">12:00 h.</option>
                        <option value="12:15">12:15 h.</option>
                        <option value="12:30">12:30 h.</option>
                        <option value="12:45">12:45 h.</option>
                        <option value="13:00">13:00 h.</option>
                        <option value="13:15">13:15 h.</option>
                        <option value="13:30">13:30 h.</option>
                        <option value="13:45">13:45 h.</option>
                        <option value="14:00">14:00 h.</option>
                        <option value="14:15">14:15 h.</option>
                        <option value="14:30">14:30 h.</option>
                        <option value="14:45">14:45 h.</option>
                        <option value="15:00">15:00 h.</option>
                        <option value="15:15">15:15 h.</option>
                        <option value="15:30">15:30 h.</option>
                        <option value="15:45">15:45 h.</option>
                        <option value="16:00">16:00 h.</option>
                        <option value="16:15">16:15 h.</option>
                        <option value="16:30">16:30 h.</option>
                        <option value="16:45">16:45 h.</option>
                        <option value="17:00">17:00 h.</option>
                        <option value="17:15">17:15 h.</option>
                        <option value="17:30">17:30 h.</option>
                        <option value="17:45">17:45 h.</option>
                        <option value="18:00">18:00 h.</option>
                        <option value="18:15">18:15 h.</option>
                        <option value="18:30">18:30 h.</option>
                        <option value="18:45">18:45 h.</option>
                        <option value="19:00">19:00 h.</option>
                        <option value="19:15">19:15 h.</option>
                        <option value="19:30">19:30 h.</option>
                        <option value="19:45">19:45 h.</option>
                        <option value="20:00">20:00 h.</option>
                        <option value="20:15">20:15 h.</option>
                        <option value="20:30">20:30 h.</option>
                        <option value="20:45">20:45 h.</option>
                        <option value="21:00">21:00 h.</option>
                        <option value="21:15">21:15 h.</option>
                        <option value="21:30">21:30 h.</option>
                        <option value="21:45">21:45 h.</option>
                        <option value="22:00">22:00 h.</option>
                        <option value="22:15">22:15 h.</option>
                        <option value="22:30">22:30 h.</option>
                    </select>

                    <h4>Nombre</h4>
                    <div class=" input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
                      </svg></span>
                      <input type="text" class="form-control" placeholder="Nombre: Juán" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <h4>¿Cuantos vais a ser?</h4>
                    <div class=" input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>
                      </span>
                      <input type="number" class="form-control" placeholder="Vamos a ser X amigos" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

             
                    <h4 id="botonform"><span>Enviar</span></h4>




                  </div>
        </div>
      </div>


      <!--FOOTER-->
      
      <?php include '../Vista/partes/footer.php';?> 
       
  </body>

</html>