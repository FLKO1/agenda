<!doctype html>
<html lang="en">

<head>
  <title>CITAS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FullCalendar -->
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>

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
    <div class="d-grid gap-2 d-md-block col-6 mx-auto">
        <a href="{{route('cita.create')}}" class="btn btn-primary">CREAR</a>

        <a href="{{route('inicio')}}" class="btn btn-primary">IR A INICIO</a>
    </div>
    <br>
    <div class="row justify-content-center align-items-center g-2">
        <div class="table-responsive">
            <table class="container">
                <thead>
                    <tr>
                        <th scope="col">Nombre del Dia</th>
                        <th scope="col">Dia</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Rut</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-secondary">
                    </tr>
                    @foreach($citas as $cita)
                    <tr>
                        <td class="fw-bold">{{$cita->calendario->nombre}}</td>
                        <td class="fw-bold">{{$cita->calendario->start}}</td>
                        <td class="fw-bold">{{$cita->calendario->end}}</td>
                        <td class="fw-bold">{{$cita->paciente->nombre}}</td>
                        <td class="fw-bold">{{$cita->paciente->rut}}</td>
                        <td class="fw-bold">{{$cita->especialidad}}</td>
                        <td><a href="{{route('cita.edit', ['id' => $cita->id]) }}" class="btn btn-warning">Editar cita</a></td>
                            <td>
                                <form action="{{ route('cita.destroy', ['id' => $cita->id]) }}" method="POST" 
                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este evento?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar Evento</button>
                            </form>
                        </td>
                            
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        
    </div>
    


</body>

</html>