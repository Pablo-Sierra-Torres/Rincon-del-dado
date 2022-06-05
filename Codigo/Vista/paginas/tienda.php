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
        <link rel="stylesheet" href="../Vista/css/tienda.css">
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script defer src="../Vista/javascript/slider.js"></script>
        <script defer src="../Vista/javascript/dados.js"></script>
        <script defer src="../Vista/javascript/jquery-3.6.0.min.js"></script>
        <script defer src="../Vista/javascript/realizarCompra.js"></script>


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

        <div class="row">

          <div class="col-lg-9" id="cajatienda">

            <h1>Tienda</h1>

            <!--INICIO ACORDEÓN-->

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Juegos de estrategia
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    <!--You can modify any of this with custom CSS or overriding our default variables. 
                      It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, 
                      though the transition does limit overflow.-->

                      <!--TARJETAS-->

                      <div class="container">

                        <div class="row">

                          <div class="col-lg-4">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/catan.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Catán</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 45,99€</a>
                              </div>
                            </div>

                          </div>

                          <div class="col-lg-4 tjt">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/karma.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Karmagan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 50,00€</a>
                              </div>
                            </div>

                          </div>

                          <div class="col-lg-4">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/mascarade.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Mascarade</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 22,99€</a>
                              </div>
                            </div>

                          </div>


                        </div>

                      </div>

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Clasicos de siempre
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <!--<strong>This is the second item's accordion body.</strong> It is hidden by default, 
                      until the collapse plugin adds the appropriate classes that we use to style each element.
                       These classes control the overall appearance, as well as the showing and hiding via CSS transitions. 
                       You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML 
                       can go within the <code>.accordion-body</code>, though the transition does limit overflow.-->

                      <!--TARJETAS-->

                      <div class="container">

                        <div class="row">

                          <div class="col-lg-4">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/monopoly.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Monopoly</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 40,99€</a>
                              </div>
                            </div>

                          </div>

                          <div class="col-lg-4">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/parchis.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Parchis</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 15,99€</a>
                              </div>
                            </div>

                          </div>

                          <div class="col-lg-4">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/ajedrez.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Ajedrez</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 9,99€</a>
                              </div>
                            </div>

                          </div>


                        </div>

                      </div>

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Juegos de cartas coleccionables
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    <!--<strong>This is the second item's accordion body.</strong> It is hidden by default, 
                      until the collapse plugin adds the appropriate classes that we use to style each element.
                       These classes control the overall appearance, as well as the showing and hiding via CSS transitions. 
                       You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML 
                       can go within the <code>.accordion-body</code>, though the transition does limit overflow.-->

                      <!--TARJETAS-->

                      <div class="container">

                        <div class="row">

                          <div class="col-lg-4">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/pokemon.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Pokemon</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 999,99€</a>
                              </div>
                            </div>

                          </div>

                          <div class="col-lg-4">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/yugi.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Yu-Gi-Oh</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 999,99€</a>
                              </div>
                            </div>

                          </div>

                          <div class="col-lg-4">

                            <div class="card" style="width: 18rem;">
                              <img src="../Vista/imgs/tienda/magic.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">MAGIC The Gathering</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Comprar 999,99€</a>
                              </div>
                            </div>

                          </div>


                        </div>

                      </div>

                  </div>
                </div>
              </div>
              
            </div>

            <!--FIN ACORDEÓN-->

          </div>


          <div class="col-lg-3" id="carrito">

            <h1>Tu cesta
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z"/>
              </svg>
            </h1>

            <hr>

            <div class="card" style="width: 18rem;">
              <img src="../Vista/imgs/tienda/monopoly.png" class="card-img-top" alt="...">
              <div class="card-body">

                <h5 class="card-title">Monopoly</h5>
                <hr>
              
        


                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg></button>
                  <button type="button" class="btn btn-primary pbt">40,99€</button>
                </div>


                <h5>Cantidad:

                  <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>

                  </select>

                </h5> 

              </div>

            </div>
/Vista
            <hr>

            <div class="card" style="width: 18rem;">
              <img src="../Vista/imgs/tienda/mascarade.jpg" class="card-img-top" alt="...">
              <div class="card-body">

                <h5 class="card-title">Mascarade</h5>
                <hr>
              
        


                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg></button>
                  <button type="button" class="btn btn-primary pbt">22,99€</button>
                </div>


                <h5>Cantidad:

                  <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>

                  </select>

                </h5> 

              </div>

            </div>

            <hr>
              
            <h3 style="text-align: center;">Total: 63,98€</h3>

            <button class="btn btn-primary" style="width: 100%;" id="id-btn-pago"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg>Pagar todo</button>
            </div>


          </div>

        </div>

      </div>


      <!--FOOTER-->
      
      <?php include '../Vista/partes/footer.php';?> 
       
      <div class="card d-none" style="width:35rem;height:min-cotent;position:absolute;top:30%;left:25%" id="tarjeta-creada">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end" id="id-cerrar-card">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
        </svg>
      </div>
    <div class="card-body">
        <div action="" role="form">
          <div class="form-group">
          <div class="container">
            <h5 class="card-title">Confirmar compra</h5>
              <label for="id-form-pago" class="form-label"> Metodo de pago <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
              </svg></label>
              <select  class="form-select" name="form-pago" id="id-form-pago" aria-label="default">
                  <option value="0">Selecciona un m&eacute;todo de pago</option>  
                  <option value="1">Tarjeta de cr&eacute;dito</option>  
                  <option value="2">Pagar en tienda</option>  
              </select>
                <div id="opcion-1" class="d-none">
                  <div class="row">
                    <div class="col-6">
                      <label for="id-card-name" class="form-label">Nombre del titular</label>
                      <input type="text" name="nombre-tarjeta" id="id-nombre-tarjeta" class="form-control" placeholder="Nombre de la tajeta">
                      <span class="form-text">Nombre completo de la tarjeta</span>    
                    </div>
                    <div class="col-6">
                      <label for="id-card-number" class="form-label">N&uacute;mero del titular</label>
                      <input type="text" name="numero-tarjeta" id="id-numero-tarjeta" class="form-control" placeholder="Numero de la tajeta">  
                    </div>
                   </div>
  
                    <div class="row">
                      <div class="col-6">
                        <label for="id-fecha-tarjeta" class="form-label">Fecha de caducidad</label>
                        <input type="text" name="fecha-tarjeta" id="id-fecha-tarjeta" class="form-control" placeholder="Fecha de caducidad">
                        <span class="form-text"></span>    
                      </div>
                      <div class="col-6">
                        <label for="id-card-cvv" class="form-label">N&uacute;mero CVV</label>
                        <input type="text" name="cvv-tarjeta" id="id-card-cvv" class="form-control" placeholder="Numero CVV">  
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-check" style="margin-top:2%;">
                        <input type="checkbox" class="form-check-input" name="recordar-metodo" id="id-recordar-metodo">
                        <label class="form-check-label" for="id-recordar-metodo">Guardar datos de tarjeta para la proxima compra</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="opcion-2" class="d-none">
                  <div class="row">
                    <div class="col-6">
                      <label for="id-nombre-comprador" class="form-label">Nombre</label>
                      <input type="text" name="nombre-comprador" id="id-nombre-comprador" class="form-control" placeholder="Nombre">   
                    </div>
                    <div class="col-6">
                      <label for="id-apellidos-comprador" class="form-label">Apellidos</label>
                      <input type="text" name="apellidos-comprador" id="id-apellidos-comprador" class="form-control" placeholder="Apellidos">  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label for="id-fecha-comprador" class="form-label">Fecha</label>
                      <input type="date" name="fecha-comprador" id="id-fecha-comprador" class="form-control">
                      <span class="form-text">Seleccione una fecha</span>    
                    </div>
                    <div class="col-6">
                      <label for="id-hora-comprador" class="form-label">Hora</label>
                      <select name="hora-comprador" id="id-hora-comprador" class="form-select">
                        <option value="00h" selected>Selecciona una hora</option>
                        <option value="10h">10:00</option>
                        <option value="1030h">10:30</option>
                        <option value="11h">11:00</option>
                        <option value="1130h">11:30</option>
                        <option value="12h">12:00</option>
                        <option value="1230h">12:30</option>
                        <option value="13h">13:00</option>
                        <option value="1330h">13:30</option>
                        <option value="14h">14:00</option>
                        <option value="16h">16:00</option>
                        <option value="1630h">16:30</option>
                        <option value="17h">17:00</option>
                        <option value="1730h">17:30</option>
                        <option value="18h">18:00</option>
                        <option value="1830h">18:30</option>
                        <option value="19h">19:00</option>
                        <option value="1930h">19:30</option>
                        <option value="20h">20:00</option>
                      </select>  
                    </div>
                  </div>
                </div>
            </div>
          </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top:2%">
              <button type="submit" class="btn btn-dark">Continuar con la compra</button>
            </div>
            
          </div>
        </div>  
        </form>
    </div>
  </div>

    </body>

</html>