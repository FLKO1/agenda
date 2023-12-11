<div class="container bs5-grid-row">
    <form action="{{route('calendario.store')}}" method="POST">
        @csrf
        <div>
        <div class="mb-3">
            <label for="title" class="form-label">Nombre del dia</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">ejm:Lunes-Martes..</small>
        </div>
        <div class="mb-3">
            <label for="star" class="form-label">Seleccione dia </label>
            <input
                type="Date"
                class="form-control"
                name="star"
                id="star"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Seleccione en el calendario el dia</small>
        </div>
        <div class="mb-3">
            <label for="end" class="form-label">Hora</label>
            <input
                type="Time"
                class="form-control"
                name="end"
                id="end"
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button type="button" class="btn btn-outline-success">Crear</button>
        </div>
    </form>
</div>