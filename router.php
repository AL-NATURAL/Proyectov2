<?php 

$controlador;
$accion;
include_once("controlador/ctrl_".$controlador.".php");
    $objcontrol="Controlador".ucfirst($controlador);
    $controler= new $objcontrol();
    $controler->$accion();
?>