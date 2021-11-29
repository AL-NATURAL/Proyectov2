<?php
session_start();
//print_r($_SESSION);
if(isset($_SESSION)){
  $srol=$_SESSION['seRol'];
  $user=$_SESSION['us'];
  if($srol==""){
    header("Location:?controlador=us&accion=usinicio");
  }else{
    echo "Bienvenido".$_SESSION['nombre'];
  }
  
}else{
 header("Location:?controlador=us&accion=usinicio");
  
}
//echo isset($_SESSION['id']);


?>
<div class="cabecera">
  <div class="menu">
  <a href="#" class="bt-menu"><span class="icon-menu"></span></a>
  </div>

  <ul class="lista">
    <li><a href="#"><?php echo $_SESSION['us']?></a></li>
    <li><a href="?controlador=us&accion=cambio&user=<?php echo $_SESSION['us'];?>">cambiar contraseña</a></li>
    <li><a href="?controlador=us&accion=cerrar">Cerrar sesion</a></li>
  </ul>

    </div>

<div class="container row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
    </div>
    <br></br>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
    </div>
    <br></br>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
    </div>
    <br></br>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
    </div>
    <br></br>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
    </div>
    <br></br>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
    </div>
    </br>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="menu.js"></script>
  </body>
</html>