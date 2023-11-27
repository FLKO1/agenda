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
    
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" ></div>
        <br><br>
        <h2>Listado de Pacientes</h2>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Nuevo
        </button>
    <div class="table-responsive">
        <br>
        <table class="table">
            <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th>Correo</th>
                <th>Prevision</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr class="">
                    <td scope="row"> {{$paciente->id}}</td>
                    <td>{{$paciente->rut}}</td>
                    <td>{{$paciente->nombre}}></td>
                    <td>{{$paciente->apellido}}></td>
                    <td>{{$paciente->correo}}></td>
                    <td>{{$paciente->prevision}}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$paciente->id}}">
                            Editar
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$paciente->id}}">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>

    </div>   

</body>
</html>