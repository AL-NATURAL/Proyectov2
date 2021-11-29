<div class="row container" >
      <div class="card col-md-4">
    <div class="card-header">
        Agregar Usuario
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3">
              <label for="" class="form-label">Nombre:</label>
              <input required type="text" class="form-control" value="<?php echo $edusuario->nombre?>" name="nombre" id="nombre"  placeholder="Nombre">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">apellido:</label>
              <input required type="text" class="form-control" value="<?php echo $edusuario->apellido?>" name="apellido" id="apellido"  placeholder="Apellido">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">celular:</label>
              <input required type="text" class="form-control" value="<?php echo $edusuario->celular?>" name="celular" id="celular"   placeholder="Celular">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Correo:</label>
              <input required type="email" class="form-control" value="<?php echo $edusuario->correo?>" name="email" id="email"  placeholder="Correo">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Usuario:</label>
              <input required type="text" class="form-control" value="<?php echo $edusuario->usuario?>" name="usuario" id="usuario" readonly placeholder="Usuario">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Contraseña:</label>
              <input required type="password" class="form-control" value="<?php echo $edusuario->password?>" name="password" id="password" readonly  placeholder="Contraeña">
            </div>
            <div class="mb-3">
              <label for="" class="form-label" hidden>Rol:</label>
              <input required type="text" class="form-control" value="<?php echo $edusuario->rol?>" name="rol" id="rol" value="cliente" placeholder="rol">
            </div>
            <input class="btn btn-info"  type="submit" value="Actualizar">
            <a href="?controlador=us&accion=listaus" class="btn btn-warning">Cancelar</a>
        </form>

    </div>
</div>
</div>