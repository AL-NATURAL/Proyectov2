soy list usuarios
<?php
session_start();
session_unset();
session_reset();
session_destroy();
header("Location:?controlador=us&accion=usinicio");
?>