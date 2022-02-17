<?php
// echo $controlador;
// echo $accion;
include_once("Controllers/controller.".$controlador.".php");
$objController="controlador".ucfirst($controlador);
$controller=new $objController;
$controller->$accion();

?>