
<!DOCTYPE html>
<html>

    <head>

        <title>El Rincón del dado</title>
       
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="../Vista/bootstrap/css/bootstrap.min.css">
		    <script src="../Vista/bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../Vista/css/var.css">
        <link rel="stylesheet" href="../Vista/css/inicio.css">
        <link rel="stylesheet" href="../Vista/css/cabecera.css">
        <link rel="stylesheet" href="../Vista/css/footer.css">
        <link rel="stylesheet" href="../Vista/css/slider.css">
        
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script defer src="../Vista/javascript/slider.js"></script>
        <script defer src="../Vista/javascript/dados.js"></script>
        <script defer src="../Vista/javascript/index.js"></script>



    </head>

    <body>

      <!--CABECERA-->

      <?php
        
        if(validarSesion() && isset($_COOKIE['UsuarioLogeado'])){
          include '../Vista/partes/cabeceraLogeado.php';
        }else{
          include '../Vista/partes/cabecera.php';
        }
       ?>

      <!--CUERPO-->

      <!--INICIO CARRUSEL-->

      <section id="container-slider">	
        <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
        <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
        <ul class="listslider"> <!--ESTOS ERAN LOS BOTONES PERO NO CONSEGUIA CENTRARLOS ES MEJOR QUE NO SE MUESTREN EN EL CSS TIENE UN DISPLAY NONE-->
          <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
          <li><a itlist="itList_1" href="#"></a></li>
          <li><a itlist="itList_2" href="#"></a></li>
        </ul>
        <ul id="slider">
          <li style="background-image: url('../Vista/imgs/slider/catan.png'); z-index:0; opacity: 1;">
            <div class="content_slider" >
              <div>
                <h2 class="h2slider">CATÁN, Nuestro TOP ventas</h2>
            <p>Se trata de un juego que aúna la estrategia, la astucia y la capacidad para negociar y en el que los jugadores tratan de colonizar una isla Construyendo pueblos, estableciendo rutas comerciales, etc…</p>
            <a href="controladorCompra.php" class="btnSlider">Ver más</a>
          </div>
            </div>
          </li>
          <li style="background-image: url('../Vista/imgs/slider/warhammer.jpg'); ">
            <div class="content_slider" >
              <div>
                <h2 class="h2slider">Warhammer</h2>
            <p>Warhammer es un juego de guerra en miniatura que simula batallas entre ejércitos mediante el uso de figuritas en miniatura.</p>
            <a href="controladorCompra.php" class="btnSlider">Ver más</a>
          </div>
            </div>
          </li>
          <li style="background-image: url('../Vista/imgs/slider/ofertas.jpg'); ">
            <div class="content_slider" >
              <div>
                <h2 class="h2slider">Ofertas y novedades</h2>
            <p>Descubre las últimas novedades en fascinantes juegos de mesa y nuestras ofertas mas tentadoras.</p>
            <a href="#" class="btnSlider">Ver más</a>
          </div>
            </div>
          </li>
       </ul>
     </section>


      <!--FIN CARRUSEL-->

      <!--INICIO 3 TARJETAS-->

      <div id="contendor3tarjetas" class="container">

        <div class="container">

          <div class="row">

            <div class="col-lg-4">
                <div class="tarjeta">
  
                  <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                    <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                  </svg>
  
                  <h1 style="color:black">¿Quienes Somos?</h1>
  
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  
                  <h4><span class="botontri">Más información</span></h4>
  
                </div>
            </div>
            
  
            <div class="col-lg-4">
  
              <div class="tarjeta">
  
                <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                </svg>
  
                <h1 style="color:black">Envíos a domicilio</h1>
  
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  
                <h4><span class="botontri">Más información</span></h4>
                  
              </div>
  
            </div>
  
            <div class="col-lg-4">
  
              <div class="tarjeta">
  
                <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z"/>
                </svg>
  
                <h1 style="color:black">Libre de Covid-19</h1>
  
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  
                <h4><span class="botontri">Más información</span></h4>
  
              </div>
  
            </div>
  
          </div>

        </div>

      </div>

      <!--FIN DE LAS 3 TARJETAS-->

      <!--INICIO DE FORM Y EXPERIENCIAS-->

      <div class="container">

        <div class="row">

          <div id="form" class="col-lg-8">

            <h1 style="text-align: center; color: black">Cuentanos</h1>
          <form id="formularioResenas" action="controladorInicio.php" method="POST">
           <h4>Nombre</h4>
            <div class=" input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
              </svg></span>
              <input id = "nombreInput" type="text" class="form-control" placeholder="Nombre: Juán" aria-label="Username" aria-describedby="basic-addon1" name="nombre" required>
            </div>
            <h4>Correo eléctronico</h4>
            <div class="input-group mb-3">
              <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg></span>
              <input id = "correoInput" type="text" class="form-control" placeholder="Correo: nombre@dominio.fin" aria-label="Username" name="user"  pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,}$" required>
            </div>

            <div class="input-group">
              <span class="input-group-text">Tu comentario</span>
              <textarea id = "textoInput" class="form-control" aria-label="With textarea" placeholder="Ejemplo: Me gustaría que mejoraran 'X' cosa pero me gusta la calidad del servicio" name="comentario"></textarea>
            </div>

            <button button id="botonform" name="enviar" type="submit">Enviar</button>
          </form>
          </div>

          <div id="exps" class="col-lg-4">

            <h1>Reseñas destacadas</h1>
              <?php 
              if (count($comentarios)) { 
              for($i = 0; $i < 3;$i++){
                
              ?>
            <div class="resena">

              <h5> <?php echo($comentarios[$i]->nombre); ?></h5>
              <p> <?php echo($comentarios[$i]->texto); ?></p>

            </div>
            <?php 
              }

            } else { ?>
              <div class="resena">
                  <h5>Lo sentimos.</h5>
                  <p>Sin comentarios disponibles</p>   
              </div>
           <?php 
           }
            ?>


          </div>

        </div>

      </div>


      <!--FOOTER-->
      
      <?php include '../Vista/partes/footer.php';?> 

    </body>

</html>