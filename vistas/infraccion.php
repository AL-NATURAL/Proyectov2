<?php
session_start();
//print_r($_SESSION);
if(isset($_SESSION)){
  $srol=$_SESSION['seRol'];
  $user=$_SESSION['us'];
  if($srol!="admin"){
    header("Location:?controlador=us&accion=productos");
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
<div class="card">
    <div class="card-header">
        <h5>Infracciones</h5> 
        <a name="" id="" class="btn btn-primary btn-info" href="?controlador=us&accion=crearad" role="button">Agregar usuario</a><br>
    </div>
    <div class="card-body ">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>IDInfraccion</th>
            <th>Usuario</th>
            <th>FECHA</th>
        </tr>
    </thead>
    <tbody>
        <?php while($infracciones as $infraccionbd) {?>
            <tr>
                <td><?php echo $infraccionbd->idinfraccion;?></td>
                <td><?php echo $infraccionbd->InfraccionUs;?></td>
                <td><?php echo $infraccionbd->InfFecha;?></td>
            </tr>
        <?php }?>
    </tbody>
</table>
    </div>
   
</div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="menu.js"></script>
  </body>
</html>