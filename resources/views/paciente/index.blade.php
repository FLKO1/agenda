<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de control Paciente</title>
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
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" ></div>
        <br><br>
        <h2>Listado de Pacientes</h2>
        <br>
        <div class="d-grid gap-2 d-md-block"> 
        <a href="{{route('paciente.registro')}}" class="btn btn-primary">AGREGAR</a>
        </div>

    <div class="table-responsive">
        <br>
        <table class="table">
            <thead class="bg-dark text-white">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th>Correo</th>
                <th>Prevision</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr class="">
                    <td scope="row">{{$paciente->id}}</td> 
                    <td>{{$paciente->rut}}</td>
                    <td>{{$paciente->nombre}}</td>
                    <td>{{$paciente->apellido}}</td>
                    <td>{{$paciente->correo}}</td>
                    <td>{{$paciente->prevision}}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$paciente->id}}">
                            Editar
                        </button>
                        <form action="{{route('paciente.destroy', ['id'=>$paciente->id])}}" 
                        method="POST"
                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta disponibilidad?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
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