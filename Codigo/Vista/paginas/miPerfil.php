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
        <link rel="stylesheet" href="../Vista/css/miPerfil.css">
        
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

            <h2>Parte 1</h2>    

            <div class="row">  
                <div class="col-lg-2"></div> 
                <div class="col-lg-3">  
                    <div class=" input-group mb-3">
                    <?php 
                        //Si el usuario no tiene foto de perfil, se introduce por defecto
                        // $url= 'Assets/images/candidates/'.$this->get('candidate')->id.'/'.$this->get('candidate')->photo;
            
                        /*if (@getimagesize($url)==false) {
                            $url="Assets/images/candidates/default.png";
                        }
                        
                        <div class="profile-img" style="width: 250px; height: 250px; background-size: cover; background-position: center; background-image: url('/<?= $url ?>');">
                        </div>*/
                    ?>
                        <img src="../Vista/imgs/usuarios/default.png" class="imgPerfil" alt="...">
                    </div>
                </div>
                <div class="col-lg-3">  
                    <div class=" input-group mb-3">
                        <br>
                        <h4><?php echo $datos->Nombre;?></h4>
                        <br><br>
                        <h6>descripción super descriptiva</h6>
                    </div>
                </div>  
                <div class="col-lg-4"></div>  
            </div>
            <h2>Parte 2</h2>            

          </div>

        </div>

      </div>
      
                



     
      <!--FOOTER-->
      
      <?php include '../Vista/partes/footer.php';?> 

    </body>

</html> 