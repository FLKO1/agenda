<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGRESE DATOS</title>
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

<div class="container mt-5">
    @if(session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif

    <h2>INGRESE SU DATOS</h2>
    <form action="{{route('paciente.registro')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="rut" class="form-label">RUT:</label>
            <input type="text" class="form-control" id="rut" name="rut" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico:</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="mb-3">
            <label for="prevision" class="form-label">Previsión:</label>
            <select class="form-control" id="prevision" name="prevision" required>
                <option value="Fonasa">Fonasa</option>
                <option value="Isapre">Isapre</option>
                <option value="Ninguno">Ninguno</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
