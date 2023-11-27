<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('nav.name', 'Laravel') }}</title>
    
        <!-- Fonts -->
        <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css"
rel="stylesheet"
/>

</head>
<body>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NavBarDoctor</title>
    <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
        <div class="container">

          <a class="navbar-brand" href="#">
            <img
              id="MDB-logo"
              src="https://clinicadentalsorias.com/wp-content/uploads/cache/images/2023/11/Endodoncia-Clinica-Sorias-Salamanca/Endodoncia-Clinica-Sorias-Salamanca-3467844320.png"
              alt="MDB Logo"
              draggable="false"
              height="30"/>
          </a>
          
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
              <li class="nav-item">
                <a class="nav-link mx-2" href="#!"><i class="fas fa-plus-circle pe-2"></i>Calendario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#!"><i class="fas fa-bell pe-2"></i>Agenda</a>
              </li>
              <li class="nav-item ms-3">
                <a class="btn btn-black btn-rounded" href="#!">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>