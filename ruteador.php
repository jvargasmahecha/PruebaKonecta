<?php
//cambiar de controller y acceder a ciertas acciones 

include_once("controllers/controller_".$controller.".php");

$objController="Controller".ucfirst($controller); // class controllerPages

$controller= new $objController();//

$controller->$accion();

?>