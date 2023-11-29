<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header"> 
                    <h5 class="modal-title ">DATOS  HORARIO:</h5> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('horario.create')}}" method="post" enctype="multipart/form-data"> 
                    @csrf 
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" name="id" id="id"> 
                            <div class="col-lg-12 mb-2">  
                                <div>
                                    <label for="nombre" class="form-label">Dia<code style="font-size: 14px">*</code></label>
                                    <input type="text" class="form-control rounded-pill" name="nombre" id="nombre" required placeholder="Ingrese nombre completo">
                                </div> 
                            </div> 
                            <div class="col-lg-12 mb-2">  
                                <div>
                                    <label for="horas" class="form-label">Horas<code style="font-size: 14px">*</code></label>
                                    <input type="text" class="form-control rounded-pill" name="horas" id="horas"  required placeholder="Ingrese nombre completo">
                                </div> 
                            </div> 
                            <div class="col-lg-12 mb-2">   
                            </div>
                            <div class="col-lg-12 mb-2">  
                                <div> 
                                    <label for="estado" class="form-label">Estado<code style="font-size: 14px">*</code></label>
                                    <select name="estado" id="estado" class="form-control">
                                        <option value="0">Disponible</option>
                                        <option value="1">Ocupado</option>
                                        <option value="2">Feriado</option>
                                        <option value="3">No Laboral</option>
                                    </select>
                                </div> 
                            </div>
                        </div> 
                    </div> 
                    <div class="modal-footer"> 
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    @if ($errors->any())  
                        <script>
                            $(document).ready(function() {
                                $('#exampleModal').modal('show');
                            });
                        </script>
                    @endif
                </form>
            </div>
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