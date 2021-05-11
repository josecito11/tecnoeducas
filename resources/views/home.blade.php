@extends('app')

@section('content')
hola
<!-- Main -->
    <main id="main">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/img2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/img3.jpg" class="d-block w-100" alt="...">
              </div>

              <div class="overlay">
                  <div class="container">
                      <div class="row align-items-center">

                        <div class="col-md-6 offset-md-6 text-md-rigth text-center">
                            <h1>TecnoEduca</h1>
                            <p class="d-none d-md-block">Por fin disponible en línea, un evento que vale la pena compartir,
                                la primera experiencia online con profesionales que llevan el aprendizaje a otro nivel.
                            </p>
                            <a href="{{route('registro')}}" class="btn btn-light">Quiero ser alumno</a>
                            <button class="btn btn-tecnoeduca">Más información</button>
                        </div>

                      </div>
                  </div>
              </div>

            </div>
          </div>
    </main>
    <!-- /Main -->

    <!-- Cursos -->
     <section id="cursos" class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <small>Conoce nuestros</small><h2>Cursos</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <div class="card" >
                        <img src="images/html.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Html</h5>
                          <p class="card-text">Es un  lenguaje de marcado que se utiliza para el desarrollo de páginas web.</p>
                          <a href="#" class="btn btn-tecnoeduca" data-toggle="modal" data-target="#htmlModal">Ver curso</a>
                        </div>
                      </div>
                </div>
    
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/css.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Css</h5>
                          <p class="card-text">Hojas de estilo en cascada, es el lenguaje de estilos utilizado para describir la presentación en documentos html.</p>
                          <a href="#" class="btn btn-tecnoeduca">Ver curso</a>
                        </div>
                      </div>
                </div>
    
                <div class="col-12 col-md-4 col-lg-4 mb-2">
                    <div class="card" >
                        <img src="images/javascript.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">JavaScript</h5>
                          <p class="card-text">Es un lenguaje de programación ligero, interpetado o compilado con funciones de primera clase.</p>
                          <a href="#" class="btn btn-tecnoeduca">Ver curso</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>

        
     </section>
    <!-- /Cursos -->

    <!-- Clase Online -->
    <section id="clase-online">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12 pl-0 pr-0">
            <img src="images/joven.jpg" alt="">
          </div>
          <div class="col-lg-6 pt-4 pb-4">
            <h2>Clase de prueba online Agosto 2021</h2>
            <p>
              Regístrate a la clase de prueba online, rellena el formulario de contacto, para que podamos tener más 
              información sobre las necesidades específicas y puedas concretar una clase gratuita de 30 minutos con
              el rpofesor que mejor se adapte a tus necesidades académicas. 
            </p>

            <a href="" class="btn btn-outline-ligth">Registrarme</a>
          </div>

        </div>
      </div>
    </section>
    <!-- End/clase online -->

    <!-- Sé maestro -->
    <section id="maestro" class="pt-4 pb-4">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <small class="text-uppercase"> Conviertete en un</small>
            <h2>Maestro</h2>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            Participa en el proceso de selección y forma parte del equipo <abbr data-toggle="tooltip" title="Es el nombre de tu nueva familia">TecnoEduca.</abbr> 
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 pt-2">

            <form>
              <div class="form-row">
                <div class="col-12 col-md-6 form-group">
                  <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-12 col-md-6 form-group">
                  <input type="text" class="form-control" placeholder="Apellidos">
                </div>
              </div>

              <div class="form-row">
                <div class="col form-group">
                  <textarea name="description" class="form-control"></textarea>
                  <small>Incluye un título en tu descripción</small>
                </div>
              </div>

              <div class="form-row">
                <div class="col form-group">
                  <button type="button" class="btn btn-tecnoeduca btn-block">Enviar</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </section>
    <!-- /Sé maestro -->


@endsection
