<?php 

include_once("models/product.php");
include_once("conection.php");

BD::crearInstancia(); 

class ControllerProducts{
    public function inicio(){

        $products=Product::consultar();

        include_once("views/products/inicio.php");
    }    
    
    
    public function crear(){

        if($_POST){
            
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $referencia=$_POST['referencia'];
            $precio=$_POST['precio'];
            $peso=$_POST['peso'];
            $categoria=$_POST['categoria'];
            $stock=$_POST['stock'];
            $fecha_creacion=$_POST['fecha_creacion'];
            Product::crear($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion);
            header("location:./?controller=products&accion=inicio");
        }
        
        include_once("views/products/crear.php");        
    }

    public function editar(){        

        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];   
            $referencia=$_POST['referencia'];
            $precio=$_POST['precio'];
            $peso=$_POST['peso'];
            $categoria=$_POST['categoria'];
            $stock=$_POST['stock'];
            $fecha_creacion=$_POST['fecha_creacion'];

            Product::editar($id,$nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion);
            header("location:./?controller=products&accion=inicio");
        }
        
            $id=$_GET['id'];

            $product=Product::search($id);

            include_once("views/products/editar.php");
    }        
    
    public function delete(){
        print_r($_GET);

        $id=$_GET['id'];

        Product::delete($id);
        header("location:./?controller=products&accion=inicio");
    }
    
    public function cafeteria(){

        $products=Product::consultar();

        include_once("views/orden/crear.php");
    }

   
}
?>