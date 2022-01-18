<?php 
include_once("models/product.php");
include_once("models/orden.php");
include_once("conection.php");

BD::crearInstancia();

class ControllerOrden{


    public function crear(){
        $error = '';
        if($_POST){
            $id=$_POST['id'];
            $cantidad=$_POST['cantidad'];
            /* $montoValido = Orden::validarStock($id, $cantidad);            
            if($montoValido === true) {
                Orden::crear($id, $cantidad);
                header("location:./?controller=orden&accion=crear");
            }else{
                $error = 'El monto digitado excede la unidades disponibles';
            } */
            Orden::crear($id, $cantidad);
            header("location:./?controller=orden&accion=crear");
            $products=Product::consultar(); 
        }else{
            $products=Product::consultar(); 
        }
        
        include_once("views/orden/crear.php");        
    }
}
?>