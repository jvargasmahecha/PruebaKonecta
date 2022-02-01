<?php 
//canaliza todos los datos que se envien
$controller="pages";
$accion="inicio";

if(isset($_GET['controller']) && isset($_GET['accion']) ){ //si hubo una solicutud por get se realiza la aignacion 
    
    if (($_GET['controller']!="") && ($_GET['accion']!="") ){ //si controller es diferentes se cambiar, sino conservo por defecto
        $controller=$_GET['controller']; //asigno
        $accion=$_GET['accion']; 
    }     
}

require_once("views/template.php");
?>