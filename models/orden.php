<?php 
class Orden{
    public $OR_Id;
    public $PD_Id;	
    public $OR_Fecha_Creacion;
    public $OR_Cantidad;

    public function __construct($OR_Id, $PD_Id, $OR_Fecha_Creacion, $OR_Cantidad){
        $this->OR_Id=$OR_Id;
        $this->PD_Id=$PD_Id;
        $this->OR_Fecha_Creacion=$OR_Fecha_Creacion;
        $this->OR_Cantidad=$OR_Cantidad;
    }

    public static function crear($PD_Id, $OR_Cantidad){
        $conexionBD=BD::crearInstancia(); 
        $sql=$conexionBD->prepare("INSERT INTO `ordenes`(`PD_Id`, `OR_Cantidad`) VALUES (?,?)");        
        $sql->execute(array($PD_Id,$OR_Cantidad));
        
        $sql=$conexionBD->prepare("UPDATE productos SET PD_Stock=PD_Stock-? WHERE PD_Id=?");
        $sql->execute(array($OR_Cantidad, $PD_Id));
    }

    public static function validarStock($PD_Id, $OR_Cantidad){
        $conexionBD=BD::crearInstancia();
        echo "<script>console.log('Debug Objects: " . $PD_Id . "' );</script>";
        $sql=$conexionBD->query("SELECT `PD_Stock` FROM `productos` WHERE PD_Id=?");
        $sql->execute(array($PD_Id));
        $product=$sql->fetch();  
        if($product['PD_Stock'] >= $OR_Cantidad){
            return true;
        }else{
            return false;
        }
    }    
}
?>