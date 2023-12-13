<!doctype html>
<html lang="en">

<head>
  <title>CRUD DISPONIBILIDAD</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
    <h1>ESTE ES TU PANEL PARA DISPONIBILIDAD</h1>
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">PANEL DE DISPONIBILIDAD</h2>
            </div>
            <div>
                <a href="{{route('disponibilidad.create')}}" class="btn btn-primary">CREAR</a>
            </div>
        </div>
    
        <div class="col-12 mt-4">
            <table class="table table-bordered text-white">
                <tr class="text-secondary">
                    <th>Nombre</th>
                </tr>
                @foreach($disponibilidads as $disponibilida)
                <tr>
                    <td class="fw-bold">{{$disponibilida->nombre}}</td>
                    </td>
                    <td>
                        <form action="{{ route('disponibilidad.destroy', ['id' => $disponibilidad->id]) }}" 
                            method="POST" 
                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta disponibilidad?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>