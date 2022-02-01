<?php 
class Product{
    public $PD_Id;
    public $PD_Nombre;
    public $PD_Referencia;
    public $PD_Precio;
    public $PD_Peso;
    public $categoria;
    public $PD_Stock;
    public $PD_Fecha_Creacion;
    public $CT_Nombre ;

    public function __construct($PD_Id,$PD_Nombre,$PD_Referencia,$PD_Precio,$PD_Peso,$categoria,$PD_Stock,$PD_Fecha_Creacion,$CT_Nombre){ //recibir la infromacion para crear la lista de objetos
        $this->PD_Id=$PD_Id; //asigno
        $this->PD_Nombre=$PD_Nombre;
        $this->PD_Referencia=$PD_Referencia;
        $this->PD_Precio=$PD_Precio;
        $this->PD_Peso=$PD_Peso;
        $this->categoria=$categoria;
        $this->PD_Stock=$PD_Stock;
        $this->PD_Fecha_Creacion=$PD_Fecha_Creacion;
        $this->CT_Nombre=$CT_Nombre;
    }

    public static function consultar(){
        $listProducts=[]; //almacenara todos los empleados que recupero de bd

        $conexionBD=BD::crearInstancia(); //variable que almacena conexion
                        
        $sql=$conexionBD->query("SELECT `PD_Id`, `PD_Nombre`, `PD_Referencia`, `PD_Precio`, `PD_Peso`, `PD_Stock`, `categoria`, productos.PD_Fecha_Creacion, categoria.CT_Nombre
        FROM `productos`
        INNER JOIN categoria on categoria.CT_Id = productos.categoria
        ");

        foreach($sql->fetchAll() as $product){ //recupero los datos de la consulta y los recibo como $product
        $listProducts[]= new Product($product['PD_Id'],$product['PD_Nombre'],$product['PD_Referencia'],
        $product['PD_Precio'],$product['PD_Peso'],$product['categoria'],$product['PD_Stock'],
        $product['PD_Fecha_Creacion'],$product['CT_Nombre']);
        }

        return $listProducts;        
    }

    public static function crear($PD_Nombre,$PD_Referencia,$PD_Precio,$PD_Peso,$categoria,$PD_Stock,$PD_Fecha_Creacion){
        $conexionBD=BD::crearInstancia(); 

        $sql=$conexionBD->prepare("INSERT INTO productos(PD_Nombre, PD_Referencia, PD_Precio, PD_Peso, categoria, PD_Stock, PD_Fecha_Creacion) VALUES(?,?,?,?,?,?,?)");
        $sql->execute(array($PD_Nombre,$PD_Referencia,$PD_Precio,$PD_Peso,$categoria,$PD_Stock,$PD_Fecha_Creacion));
    }    

    public static function search($PD_Id){//busca informacion por id
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("SELECT `PD_Id`, `PD_Nombre`, `PD_Referencia`, `PD_Precio`, `PD_Peso`, `PD_Stock`, `categoria`, productos.PD_Fecha_Creacion, categoria.CT_Nombre
        FROM `productos`
        INNER JOIN categoria on categoria.CT_Id = productos.categoria WHERE PD_Id=?");
        $sql->execute(array($PD_Id));//valor de PD_Id=?
        $product=$sql->fetch(); //$ recepciona la informaciond el registro consultado     
        return new Product($product['PD_Id'],$product['PD_Nombre'],$product['PD_Referencia'],
        $product['PD_Precio'],$product['PD_Peso'],$product['categoria'],$product['PD_Stock'],
        $product['PD_Fecha_Creacion'],$product['CT_Nombre']);
    }
    
    public static function editar($PD_Id,$PD_Nombre,$PD_Referencia,$PD_Precio,$PD_Peso,$categoria,$PD_Stock,$PD_Fecha_Creacion){
        $conexionBD=BD::crearInstancia();
        
        $sql=$conexionBD->prepare("UPDATE productos SET  PD_Nombre=?, PD_Referencia=?, PD_Precio=?, PD_Peso=?, categoria=?, PD_Stock=?, PD_Fecha_Creacion=? WHERE PD_Id=?");
        $sql->execute(array($PD_Nombre,$PD_Referencia,$PD_Precio,$PD_Peso,$categoria,$PD_Stock,$PD_Fecha_Creacion,$PD_Id ));
    }

    public static function delete($PD_Id){ //paso el parametro id que se eliminara
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("DELETE FROM productos WHERE PD_Id=?"); 
        $sql->execute(array($PD_Id));// remplazo el ? por PD_Id
    }          

}
?>