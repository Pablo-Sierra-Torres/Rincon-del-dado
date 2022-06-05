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
        <link rel="stylesheet" href="../Vista/css/producto.css">
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script defer src="../Vista/javascript/slider.js"></script>
        <script defer src="../Vista/javascript/dados.js"></script>

    </head>

    <body>

      <!--CABECERA-->

      <?php 
        if(validarSesion()){
          include '../Vista/partes/cabeceraLogeado.php';
        }else{
          include '../Vista/partes/cabecera.php';
        }
      ?>
      
      <!--CUERPO-->
      
      <div class="container">

        <div class="row" id="cv">

          <div class="col-lg-12" id="">

            <br>    <br>

            <div class="row">  
                <div class="col-lg-2"></div> 
                <div class="col-lg-5">  
                    <div class=" input-group mb-3">
                        <img src="../Vista/imgs/tienda/catan.png" class="imgPerfil" alt="...">                       
                    </div>
                </div>
                <div class="col-lg-5">  
                    <div class="row">  
                        <div class="col-lg-12">
                            <h4>Nombre del producto</h4>
                        </div>
                    </div>
                    <div class="row">        
                        <div class="col-lg-12">      
                            <h6>texto de relleno número 3</h6>
                        </div>    
                    </div>
                    <div class="row">
                        <h3>39.99 €<h3> 
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                          <button class="btn btn-danger" data-target="html" id="btnToLeft">
                              <img src="../Vista/imgs/recursos/left-arrow.png">
                          </button>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" id="comprarPro" class="btn btn-danger" name="subir">añadir al carrito</button>
                        </div> 
                    </div> 
                  </div>  
            </div>

            </div>
            
        </div>

      </div>
      
      <!--FOOTER-->
      
      <?php include '../Vista/partes/footer.php';?> 

    </body>

</html> 