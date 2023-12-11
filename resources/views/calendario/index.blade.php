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
    </script>
  
</head>

<body>
    <div class="container">
        calendario
    <div id='calendar'></div>
    </div>
<!-- Modal trigger button -->
<button
    type="button"
    class="btn btn-primary btn-lg"
    data-bs-toggle="modal"
    data-bs-target="#evento"
>
    Launch
</button>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div
    class="modal fade"
    id="evento"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    EVENTO DEL DIA
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">

                <form id="tuFormularioId" action="">
                    @csrf

                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input
                            type="text"
                            class="form-control"
                            name="id"
                            id="id"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Titulo</label>
                        <input
                            type="text"
                            class="form-control"
                            name="title"
                            id="title"
                            aria-describedby="helpId"
                            placeholder="Ingrese un titulo al evento"
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
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
                            <small id="helpId" class="form-text text-muted">Tiene que elegir</small>
                        </div> 
                    </div>

                    <div class="mb-3">
                        <label for="start" class="form-label">Start</label>
                        <input
                            type="date"
                            class="form-control"
                            name="start"
                            id="start"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="mb-3">
                        <label for="end" class="form-label">End</label>
                        <input
                            type="date"
                            class="form-control"
                            name="end"
                            id="end"
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                </form>  
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardar">GUARDAR</button>
                <button type="button" class="btn btn-warning" id="btnModificar">MODIFICAR</button>
                <button type="button" class="btn btn-danger" id="btnEliminar" >ELIMINAR</button>
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >CERRAR</button>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(
        document.getElementById("modalId"),
        options,
    );
</script>


  </body>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>