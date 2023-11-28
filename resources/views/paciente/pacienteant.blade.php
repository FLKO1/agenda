<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paciente Antiguo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h2>Si es paciente antiguo, ingrese su rut</h2>
    <form action="" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ingrese su Rut</label>
          <input type="text" class="form-control" id="rut" name="rut" required>
          <div class="form-text">Si ingreso anteriormente sus datos, solo tendra que ingresar su rut para poder agendar hora.</div>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>
</body>
</html>