<?php 

class ControllerPages{  //clase que contine los metodos 
    
    public function inicio(){ //metodo inicio que accede a la vista inicio
        include_once("views/pages/inicio.php");
    }

    
    public function nosotros(){ //metodo inicio que accede a la vista nosotros
        include_once("views/pages/nosotros.php");
    }
}
?>