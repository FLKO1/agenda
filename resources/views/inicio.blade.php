<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css"
rel="stylesheet"/>
<!--CSS Carrusel Imegen -->
<link 
rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


</head>
<!-- Body -->
<body>

    <!-- nav -->
    <!--Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
          <a class="navbar-brand" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link active" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('paciente.registro') }}">Paciente nuevo</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('paciente.regpacantiguo')}}">Paciente Antiguo</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Confirmar hora</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Login</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

    <!-- Carrusel de imagen -->
    <div class="container mt-5">
        <div class="row">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.freepik.com/fotos-premium/revision-dientes-dentista-serie-fotos-relacionadas_21730-8405.jpg?w=2000" class="d-block mx-auto img-fluid" style="width: 850px; height: 300px;" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="https://previews.123rf.com/images/klavapuk/klavapuk1605/klavapuk160500025/57442540-fondo-transparente-sobre-la-odontolog%C3%ADa-y-el-cuidado-dental.jpg" class="d-block mx-auto img-fluid" style="width: 850px; height: 300px;" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="https://previews.123rf.com/images/charactervectorart/charactervectorart2009/charactervectorart200900090/155931276-concepto-de-odontolog%C3%ADa-y-atenci%C3%B3n-m%C3%A9dica-dientes-blancos-sanos-cuidado-dental-profesional.jpg" class="d-block mx-auto img-fluid" style="width: 850px; height: 300px;" alt="Imagen 3">
            </div>
            <!-- Agrega más elementos de carrusel según sea necesario -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
            </div>
    </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Iniciar el carrusel con intervalo automático
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 2000 // Cambia el valor a la duración deseada en milisegundos
        });
    });
</script>
<!-- FIN CARRUSEL -->

<!--Imagen para confirmar hora -->
<div class="container mt-4">
  <a href="#">
    <img src="https://www.institutoncologicofalp.cl/wp-content/uploads/2020/12/horas1img.png"
     alt="Confirmar Hora" class="img-fluid" style="width: 200px; height: 200px;">
</a>
<h5>Confirmar Hora</h5>
</div>
<div class="container mt-4">
  <a href="#">
    <img src="https://png.pngtree.com/element_our/20190531/ourlarge/pngtree-cartoon-office-calendar-image_1297462.jpg"
     alt="Confirmar Hora" class="img-fluid" style="width: 200px; height: 200px;">
</a>
<h5>PEDIR Hora</h5>
</div>


</body>

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>DentalWeb
            </h6>
            <p>
                Esta pagina sirve para agendar horas, ningun dato es compartido para externos.Realizado para Geena C Odontologa y pagina echa por Francisco L.K realizada en Php con laravel y Bootstrap
            </p>
          </div>
          <!-- Grid column --> 
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Lenguaje usados
            </h6>
            <p>
              <a href="#!" class="text-reset">php</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Bootstrap</a>
            </p>
            <p>
              <a href="#!" class="text-reset">JavaScript</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Arriba</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Paciente nuevo</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Paciente antiguo</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contactanos</h6>
              <i class="fas fa-envelope me-3"></i>
              francisco.lazo06@inacapmail.cl
            </p>
            <p><i class="fas fa-phone me-3"></i> + 569 53541923</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">DentalWeb</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</html>