<!DOCTYPE html>

<html>

    <head>

        <title>El Rincón del dado</title>
       
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="../Vista/bootstrap/css/bootstrap.min.css">
		    <script src="../Vista/bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../Vista/css/var.css">
        <link rel="stylesheet" href="../Vista/css/cabecera.css">
        <link rel="stylesheet" href="../Vista/css/footer.css">
        <link rel="stylesheet" href="../Vista/css/registro.css">
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script defer src="../Vista/javascript/slider.js"></script>
        <script defer src="../Vista/javascript/dados.js"></script>



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

      <div class="container" style="margin-bottom:100px;">

        <div class="row" id="cv">

          <div class="col-lg-12" id="cajalogin">


            <h4>Reponer producto</h4>

            <form id ="formularioReponer" method="POST" action="controladorAdmin.php">
            <div class="row">
              <div class="col-lg-6">  
              <h5>Nombre producto</h5>
              <div class=" input-group mb-3">
               
                <input id = "nombreproducto1" type="text" class="form-control" name="nombreproducto1" placeholder="Catán" required>
              </div>
              </div>
              <div class="col-lg-6">
              <h5>Cantidad</h5>
              <div class=" input-group mb-3">
                
                <input id="cantidad" type="number" class="form-control" name="cantidad" placeholder="" min="1" required>
                
              </div>
              </div>
              <button id="btnAñadir" type="submit" class="btn btn-danger" name="addProduct" id="addProduct" >Añadir</button>
                
            </div>
            </form>
            <br>
            <hr>
            <br>
            <h4>Eliminar producto</h4>

            <form id = "formularioReponer" method="POST" action="controladorAdmin.php">
            <div class="row">
              <h5>Nombre del producto a eliminar</h5>
              <div class=" input-group mb-3"> 
                <input id = "nombreproducto2" type="text" class="form-control" name="nombreproducto2" placeholder="Catán" required>
              </div>
              
              <button id="btnEliminar" type="submit" class="btn btn-danger" name="delProduct" id="delProduct">Eliminar</button>
              </div>    
            </form>
            <br>
            <hr>
            <br> 
            <form name="cerrar" method="POST" action="controladorPerfil.php">          
                <button type="submit" class="btn btn-danger" name="cerrarSesion" id="cerrar">Cerrar sesión</button>
            </form>               
          </div>
        </div>
        
      </div>
      <!--FOOTER-->
      
      <?php include '../Vista/partes/footer.php';?> 
      
    </body>

</html>