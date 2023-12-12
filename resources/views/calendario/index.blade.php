<!doctype html>
<html lang="en">

<head>
  <title>CALENDARIO</title>
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<!--<script src=""></script> -->
  
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script>

    /*  
    document.addEventListener('DOMContentLoaded', function() {
        let formulario = document.querySelector("form");
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:"es",

          headerToolbar: {
            left: 'prev,next today',
            center: 'title', 
            right: 'dayGridMonth,timeGridWeek,listWeek' 
          },

          dateClick:function(info){
            $("#evento").modal("show");
          }




        });
        calendar.render();

        document.getElementById("btnGuardar").addEventListener("click",function(){
            const formulario = document.getElementById("tuFormularioId");
            const datos= new FormData(formulario);
            console.log(datos);
            console.log(formulario.title.value);
            
            
            axios.post("/calendario/store", datos).
            then(
                (respuesta)=>{
                    $("#calendario").modal("hide");
                }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )
        })
      });
      */
    </script>
  
</head>

<body> 
    <h2>ADMINISTRA TUS HORAS</h2>
    <div class="d-grid gap-2 d-md-block"> 
            <a href="{{route('calendario.create')}}" class="btn btn-primary">AGREGAR</a>
     </div>
    <div class="container mt-5">
        <table class="table">
            <thead class="bg-dark text-white">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Dia</th>
                <th scope="col">Hora</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($calendarios as $calendario)
                <tr class="">
                    <td scope="row">{{$calendario->id}}</td> 
                    <td>{{$calendario->title}}</td>
                    <td>{{$calendario->star}}</td>
                    <td>{{$calendario->disponibilidad_id}}</td>
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


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>