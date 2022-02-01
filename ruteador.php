<?php
 //cambiar de controller y acceder a ciertas acciones 
 
include_once("controllers/controller_".$controller.".php");

$objController="Controller".ucfirst($controller);  // armo Class ControllerProduct

$controller= new $objController();// Almacena el controlador mas el nombre del controlador

$controller->$accion();

?>