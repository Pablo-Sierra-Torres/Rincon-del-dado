<!DOCTYPE html>

<html>

    <head>

        <title>El Rincón del dado</title>
       
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="../../Vista/bootstrap/css/bootstrap.min.css">
		    <script src="../../Vista/bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../../Vista/css/var.css">
        <link rel="stylesheet" href="../../Vista/css/cabecera.css">
        <link rel="stylesheet" href="../../Vista/css/footer.css">
        <link rel="stylesheet" href="../../Vista/css/login.css">
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script defer src="../../Vista/javascript/slider.js"></script>
        <script defer src="../../Vista/javascript/dados.js"></script>


    </head>

    <body>

      <!--CABECERA-->

      <?php include '../Vista/partes/cabecera.php';?>
      
      <!--CUERPO-->

      <div class="container">

        <div class="row" id="cv">

          <div class="col-lg-12" id="cajalogin">

            <h2>Iniciar sesión</h2>
            <p>¿No eres miembro todavía? <a href="controladorRegister.php" class="enlace">Regístrate</a></p>
            <hr>

            <form method="POST" action="controladorLogin.php">
              
              <h5>Correo eléctronico</h5>
              <div class=" input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope icol" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg></span>
                <input type="text" class="form-control" placeholder="ejemplo@gmail.com" aria-label="Username" aria-describedby="basic-addon1" name="usuario">
              </div>

              <h5>Contraseña</h5>
              <div class=" input-group mb-3">
                <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill icol" viewBox="0 0 16 16">
                  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg></span>
                <input type="password" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="pass">
                
              </div>
              <a href="#" class="enlace">¿No recuerdas la contraseña?</a><br>
              <hr>

              <button type="submit" class="btn btn-danger" name="enviar">Iniciar sesión</button>
            </form>


          </div>

        </div>

      </div>

      <div id="trampa"></div>


      <!--FOOTER-->
      
      <?php include '../Vista/partes/footer.php';?> 
       
    </body>

</html>