<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
</br>
      <div class="row container" >
      <div class="card col-md-4">
    <div class="card-header">
        Crear Usuario
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3">
              <label for="" class="form-label">Nombre:</label>
              <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">apellido:</label>
              <input required type="text" class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">celular:</label>
              <input required type="text" class="form-control" name="celular" id="celular" aria-describedby="helpId" placeholder="Celular">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Correo:</label>
              <input required type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Correo">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Usuario:</label>
              <input required type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Contraseña:</label>
              <span class="icon-eye-1">
              <i class="fas fa-eye"></i>
              </span>
              <input required type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Contraseña">
              <span class="mensaje" id="mensaje"></span>
            </div>
            <div class="mb-3">
              <label for="" class="form-label" hidden>Rol:</label>
              <input required type="text" class="form-control" name="rol" id="rol" value="cliente" aria-describedby="emailHelpId" readonly   placeholder="rol">
            </div>
            <input class="btn btn-info"  type="submit" value="Agregar">
            <a href="?controlador=us&accion=usinicio" class="btn btn-warning">Cancelar</a>
        </form>

    </div>
</div>
</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="jquery-3.6.0.min.js"></script>
    <script src="mensaje.js"></script>
    <script src="pass_ojo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>