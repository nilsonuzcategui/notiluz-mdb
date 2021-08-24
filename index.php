<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once('apis/head.php') ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Notiluz Internacional</title>
    <meta name="description" content="Aquí encontrarás las  explícitas Noticias, de nuestra amada 'Obra Luz del Mundo' a nivel Nacional e Internacional y otros aconteceres del mundo cristiano, las mejores y más importantes acciones de nuestro día a día las podrás disfrutar aquí.">
    <meta property="og:title" content="Notiluz | Noticias Luz del Mundo"/>
    <meta property="og:description" content="Aquí encontrarás las  explícitas Noticias, de nuestra amada 'Obra Luz del Mundo' a nivel Nacional e Internacional y otros aconteceres del mundo cristiano, las mejores y más importantes acciones de nuestro día a día las podrás disfrutar aquí."/>
    <meta property="og:url" content="hptts://notiluz.com/">
    <meta property="og:site_name" content="Notiluz" />
    <meta property="og:image" content="<?=$ruta_inicio?>/img/logo-para-redes.png" />
    <meta property="og:image:secure_url" content="<?=$ruta_inicio?>/img/logo-para-redes.png">
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="250" />

    
  </head>
  <body>
    

    <?php include_once('apis/header.php') ?>

    <div class="container-fluid">
      <div class="row">

        <!-- MENU IZQUIERDO -->
        <?php include_once('apis/sidebar.php') ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <!-- SLIDER HOME -->
          <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel" >
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="img/slidertop1.jpg"
                  class="d-block w-100"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="img/slidertop2.jpg"
                  class="d-block w-100"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-mdb-target="#carouselExampleIndicators"
              data-mdb-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-mdb-target="#carouselExampleIndicators"
              data-mdb-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- LOGOS -->
          <div style="display: flex;justify-content: space-around;">
            <img src="img/logo.png" style="width: 120px;height: 120px;">
            <img src="img/logo-luz-del-mundo.png" style="width: 120px;height: 120px;">
          </div>
          <hr>


          <div class="align-items-center pt-3 pb-2 mb-3">
            <section class="text-center" style="display: block;width: 100%;">
              <h2>Inicio</h2>
            </section>

            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseOne"
                    aria-expanded="false"
                    aria-controls="collapseOne"
                  >
                    Hermano Puertas
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-mdb-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">
                        Micros
                      </a>
                      <a type="button" class="list-group-item list-group-item-action">
                        Tratados
                      </a>
                      <a href="<?=$ruta_inicio?>/preguntas-y-respuestas/" class="list-group-item list-group-item-action">
                        Preguntas y Respuestas
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        Libros
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Venezuela
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-mdb-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    

                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">
                        Panes Calientes
                      </a>
                      <a type="button" class="list-group-item list-group-item-action">
                        Informativos
                      </a>
                      <a href="#"" class="list-group-item list-group-item-action">
                        Radios
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        Guía Dominical
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        Campametos
                      </a>
                    </div>


                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Internacional
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-mdb-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    
                    
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">
                        Directorio
                      </a>
                      <a type="button" class="list-group-item list-group-item-action">
                        Noticias
                      </a>
                    </div>


                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseFor"
                    aria-expanded="false"
                    aria-controls="collapseFor"
                  >
                    Radios
                  </button>
                </h2>
                <div
                  id="collapseFor"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-mdb-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    
                    
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action">
                        Directorio
                      </a>
                      <a type="button" class="list-group-item list-group-item-action">
                        Noticias
                      </a>
                    </div>


                  </div>
                </div>
              </div>



              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#collapseFiv"
                    aria-expanded="false"
                    aria-controls="collapseFiv"
                  >
                    Notiluz
                  </button>
                </h2>
                <div
                  id="collapseFiv"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-mdb-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    
                    
                    <div class="list-group">
                      <a href="<?=$ruta_inicio?>/notialegria/" class="list-group-item list-group-item-action">
                        Notialegria
                      </a>
                      <a type="button" class="list-group-item list-group-item-action">
                        Agroecoluz
                      </a>
                      <a type="button" class="list-group-item list-group-item-action">
                        Nosotros
                      </a>
                      <a type="button" class="list-group-item list-group-item-action">
                        Equipo
                      </a>
                    </div>


                  </div>
                </div>
              </div>





            </div>
          </div>
        </main>

      </div>
    </div>

    

    <?php include_once('apis/footer.php') ?>
  </body>
</html>
