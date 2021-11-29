<?php
    session_start();
    //print_r($_SESSION);
?>
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
<div class="container">
</br>
    <div class="row">
        <div class="card col-md-4 ">
            <div class ="card-header">
              Cambiar Contraseña
            </div>  
            <div class="card-body">
              <form action="" method="POST">
                <div class="">
                  <label for="" class="form-label">Usuario</label>
                  <input type="text" readonly class="form-control" name="user" id="user"  value="<?php echo $_SESSION['us']; ?>" required>
                </div>
                <div class="">
                  <label for="" class="form-label">Contraseña Actual</label>
                 <span class="icon-eye-1">
                 <i class="fas fa-eye"></i>
                 </span>
                 <input type="password" class="form-control" name="actual" id="actual"  placeholder="Contraseña actual" required>
                </div>
                <div class="">
                  <label for="" class="form-label">Nueva contraseña</label>
                  <span class="icon-eye">
                  <i class="fas fa-eye"></i>
                  </span>
                  <input type="password" class="form-control" name="nueva" id="nueva" placeholder="Contraseña nueva" required>
                  <span class="mensaje" id="mensaje"></span>
                </div>
                <div class="">
                </br>
                  <input type="submit" class="btn btn-info" value="Actualizar" >
                  <a href="?controlador=us&accion=usinicio" class="btn btn-warning">Cancelar</a>
                </div>
              </form>
            </div>   
        </div>
    </div>  
</div>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="mensaje.js"></script>
    <script src="pass_ojo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>