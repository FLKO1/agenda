<!doctype html>
<html lang="en">

<head>
  <title>PANEL DE CONTROL</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
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
                        <a class="nav-link active" href="{{route('home')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('paciente.index') }}">ADMINISTRAR PACIENTES</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('disponibilidad.index') }}">ADMINISTRAR DISPONIBILIDAD</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('especialidad.index')}}">ADMINISTAR ESPECIALIDAD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/calendario')}}">CALENDARIO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('cita.index')}}">ADMINISTRA CITA</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class= "container">
    <h1>HOLA, ESTE ES TU PANEL</h1>
    <h3>Selecciona en el menu lo que quieres hacer!</h3>
    </div>

    



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>
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

</html>
