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
        <script defer src="../Vista/javascript/jquery-3.6.0.min.js"></script>
        <script defer src="../Vista/javascript/subirImg.js"></script>

    </head>

    <body>

      <!--CABECERA-->

      <?php 
        if(validarSesion() && isset($_COOKIE['UsuarioLogeado'])){
          include '../Vista/partes/cabeceraLogeado.php';
        }else{
          header('Location: controladorLogin.php');
        }
      ?>
      
      <!--CUERPO-->
      
      <div class="container">

        <div class="row" id="cv">

          <div class="col-lg-12" id="">

            <br>    <br>

            <div class="row">  
                <div class="col-lg-2"></div> 
                <div class="col-lg-3">  
                    <div class=" input-group mb-3">
                    <?php 
                        //Si el usuario no tiene foto de perfil, se introduce por defecto
                        $url= '../Vista/imgs/usuarios/'.$datos->ImagenUsuario;
                        if (@getimagesize($url)==false) {
                            $url="../Vista/imgs/usuarios/default.png";
                        }
                        ?>
                        <img src=<?= $url?> class="imgPerfil" alt="...">
                        </div>
                        <br><br>
                        <form id="f-camb-foto" name="camfoto" method="POST" action="controladorPerfil.php" enctype="multipart/form-data">
                        <input type="file" name="Subirimagen" id="subirimagen"   accept="image/png, image/jpeg">
                        <label for="subirimagen" class="bg-danger">Elige una imagen ...</label>
                        <button type="submit" class="btn btn-danger" name="subir" id="btn-subirimg" disabled>sube nueva imagen de perfil</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">  
                    <div class="row">  
                        <div class="col-lg-12">
                            <h4> <?php echo ($datos->Nombre." ".$datos->Apellidos);?></h4>
                        </div>
                    </div>
                    <div class="row">        
                        <div class="col-lg-12">      
                            <h6>descripción super descriptiva</h6>
                        </div>    
                    </div>
                </div>  
            </div>

            <br><br> 
            
            <div class="row">
                <div class="col-lg-2"></div>   
                <div class="col-lg-4">
                    <h4>Datos de contacto</h4>
                </div>
                <div class="col-lg-8"></div>
            </div>     
            <div class="row">
                <div class="col-lg-3"></div>   
                <div class="col-lg-5">
                    <h5>Email : <?php echo $datos->Correo;?></h5>
                </div>
            </div>    
            <div class="row">
                <div class="col-lg-3"></div>   
                <div class="col-lg-5">
                    <h5>T.Fijo : <?php echo $datos->Telefijo;?></h5>
                </div>
                </div>    
            <div class="row">
                <div class="col-lg-3"></div>    
                <div class="col-lg-5">
                    <h5>T.Movil : <?php echo $datos->Telemovil;?></h5>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>   
                <div class="col-lg-4">
                    <h4>Datos de envío</h4>
                </div>
                <div class="col-lg-8"></div>
            </div>     
            <div class="row">
                <div class="col-lg-3"></div>   
                <div class="col-lg-5">
                    <h5>Dirección : <?php echo $datos->Direccion;?></h5>
                </div>
            </div>    
            <div class="row">
                <div class="col-lg-3"></div>   
                <div class="col-lg-5">
                    <h5>Población : <?php echo $datos->Poblacion;?></h5>
                </div>
            </div>    
            <div class="row">
                <div class="col-lg-3"></div>    
                <div class="col-lg-5">
                    <h5>Código postal : <?php echo $datos->CodPos;?></h5>
                </div>
            </div>
            
            </div>
            
        </div>

      </div>
      
                



     
      <!--FOOTER-->
      
      <?php include '../Vista/partes/footer.php';?> 

    </body>

</html> 