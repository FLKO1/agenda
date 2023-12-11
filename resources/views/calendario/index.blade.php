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
<script src="{{asset('js/agenda.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>

</head>

<body>
    <h2>Agenda dias</h2>
    <div id="calendar"></div>
    <div>
        <a href="{{route('calendario.create')}}" class="btn btn-primary">CREAR</a>
    </div>
    <div class="row justify-content-center align-items-center g-2">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Nombre del Dia</th>
                        <th scope="col">Dia</th>
                        <th scope="col">Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-secondary">
                    </tr>
                    @foreach($calendarios as $calendario)
                    <tr>
                        <td class="fw-bold">{{$calendario->title}}</td>
                        <td class="fw-bold">{{$calendario->star}}</td>
                        <td class="fw-bold">{{$calendario->end}}</td>

                </tbody>
            </table>
        </div>
        
    </div>
    


</body>

</html>