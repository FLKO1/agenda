<!doctype html>
<html lang="en">

<head>
  <title>CRUD PREVISION</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <h1>ESTE ES TU PANEL PARA PREVISION</h1>
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">PANEL DE PREVISION</h2>
            </div>
            <div>
                <a href="{{route('prevision.create')}}" class="btn btn-primary">CREAR</a>
            </div>
        </div>
    
        <div class="col-12 mt-4">
            <table class="table table-bordered text-white">
                <tr class="text-secondary">
                    <th>Nombre</th>
                </tr>
                @foreach($previsions as $prevision)
                <tr>
                    <td class="fw-bold">{{$prevision->nombre}}</td>

                    <td>
                       <!-- <form action="" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form> -->
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