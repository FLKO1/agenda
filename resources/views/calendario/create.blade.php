<!doctype html>
<html lang="en">
    <head>
        <title>CREA TUS HORAS</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <h1>hola mundo!</h1>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    EVENTO DEL DIA
                </h5>
            </div>
            <div class="modal-body">

                <form action="{{route('calendario.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Titulo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="title"
                            id="title"
                            aria-describedby="helpId"
                            placeholder="Nombre del dia"
                            required
                        />
                        <small id="helpId" class="form-text text-muted">Ejm:Lunes/Martes...</small>
                    </div>


                    <div class="mb-3">  
                        <div> 
                            <label for="disponibilidad_id" class="form-label">Disponibilidad</label>
                            <select name="disponibilidad_id" id="disponibilidad_id" class="form-control">
                                <option value="0">Disponible</option>
                                <option value="1">Ocupado</option>
                                <option value="2">Feriado</option>
                                <option value="3">No Laboral</option>
                            </select>
                            <small id="helpId" class="form-text text-muted">Tiene que seleccionar uno</small>
                        </div> 
                    </div>

                    <div class="mb-3 ">
                        <label for="start" class="form-label">Start</label>
                        <input
                            type="date"
                            class="col-xs-2"
                            name="start"
                            id="start"
                            aria-describedby="helpId"
                            required
                        />
                        <small id="helpId" class="form-text text-muted">Seleccione el dia</small>
                    </div>

                    <div class="mb-3">
                        <label for="end" class="form-label">End</label>
                        <input
                            type="time"
                            class="col-xs-2"
                            name="end"
                            id="end"
                            aria-describedby="helpId"
                            required
                        />
                        <small id="helpId" class="form-text text-muted">Ingrese la hora</small>
                    </div>
                
                        <button type="button" class="btn btn-success">GUARDAR</button>   
                </form>  
            </div>
        </div>
    
            
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
