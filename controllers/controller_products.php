<?php 

include_once("models/product.php");
include_once("conection.php");

BD::crearInstancia();   //Creo instancia a partir de DB y de su metodo crearInstancia

class ControllerProducts{
    public function inicio(){

        $products=Product::consultar(); //llamo el metodo consultar modelo y alamceno su informacion en $products para mostrarlos en inicio.

        include_once("views/products/inicio.php");
    }    
    
    
    public function crear(){

        if($_POST){
            
            //se canalizan los valores que vienen por POST
            $nombre=$_POST['nombre'];
            $referencia=$_POST['referencia'];
            $precio=$_POST['precio'];
            $peso=$_POST['peso'];
            $categoria=$_POST['categoria'];
            $stock=$_POST['stock'];
            $fecha_creacion=$_POST['fecha_creacion'];
            Product::crear($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha_creacion); //ejecuto el metodo crear  
            header("location:./?controller=products&accion=inicio");
        }
        
        include_once("views/products/crear.php");        
    }

    public function editar(){        

        if($_POST){//si hay un envio por metodo post asigno los valores
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
        
            $id=$_GET['id'];//recupero el id

            $product=Product::search($id);//accedo a el modelo y llamo metodo search y asigno sus datos a $product

            include_once("views/products/editar.php");
    }        
    
    public function delete(){

        $id=$_GET['id'];//recupero el id

        Product::delete($id); //accedo a el modelo y llamo metodo delete
        header("location:./?controller=products&accion=inicio");//redirecciono
    }
    
    public function cafeteria(){

        $products=Product::consultar();

        include_once("views/orden/crear.php");
    }

   
}
?>