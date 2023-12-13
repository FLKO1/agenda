<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paciente Antiguo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
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
            </ul>
        </div>
    </div>
</nav>
    <h2>Si es paciente antiguo, ingrese su rut</h2>
    <form action="" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ingrese su Rut</label>
          <input type="text" class="form-control" id="rut" name="rut" required>
          <div class="form-text">Si ingreso anteriormente sus datos, solo tendra que ingresar su rut para poder agendar hora.</div>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>
</body>
</html>