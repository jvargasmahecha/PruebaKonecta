<?php 

class BD{ //clase conexion a base de datos - utilizo PDO
    private static $instancia=NULL;  // variable donde almaceno la conexion a BD

    public static function crearInstancia(){ //Me permite crear una instancia a partir de una conex

        if(!isset( self::$instancia)){ // Si no hay conexion se crea y si la hay se retorna.
            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION; //Creo opciones que notifiquen en caso de errores

            self::$instancia= new PDO('mysql:host=localhost;dbname=cafeteria','root','',$opcionesPDO); //Creo conexion PDO
        }
        return self::$instancia;
    }
}
?>