<div class="row container" >
      <div class="card col-md-4">
    <div class="card-header">
        Agregar Usuario
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
              <input required type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Contraeña">
            </div>
            <div class="mb-3">
              <label for="" class="form-label" >Rol:</label>
              <select required name="rol" id="rol">
                  <option value="">Selección</option>
                  <option value="admin">Administrador</option>
                  <option value="vendedor">Vendedor</option>
                  <option value="cliente">Cliente</option>
              </select>
            </div>
            <input class="btn btn-info"  type="submit" value="Agregar">
            <a href="?controlador=us&accion=usinicio" class="btn btn-warning">Cancelar</a>
        </form>

    </div>
</div>
</div>