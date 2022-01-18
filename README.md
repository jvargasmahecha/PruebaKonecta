# PruebaKonecta
Cafeteria
<!-- TABLE OF CONTENTS -->
<details open="open">
    <summary><h2 style="display: inline-block">Índice</h2></summary>
    <ol>
      <li>
        <a href="#sobre-el-proyecto">Sobre el proyecto</a>
       </li>
      <li>
        <a href="#Inicio-del-proyecto">Inicio del proyecto</a>
      </li>
      <li><a href="#usos">Usos</a></li>
    </ol>
  </details>
  
  
  
  <!-- ABOUT THE PROJECT -->
  ## Sobre el proyecto
  
  El proyecto permite almacenar y gestionar el inventario de los productos de una cafetería. Se puede realizar la inserción de productos nuevos, listado de productos existentes, modificación de productos existentes y eliminación de productos 
    ("CRUD").  
    Además tiene  consultas que permiten conocer cuál es el producto que más stock tiene y  cuál es el producto más vendido.

  
  
  <!-- GETTING STARTED -->
  ## Inicio del proyecto
  
  Para poder usar el presente proyecto, tomar en consideración lo siguiente:
  
  1-Clonar el repositorio en su máquina local o descargar la carpeta comprimida.
  
  2-Crear una base de datos en MySQL e importar las entidades y registros del archivo: (https://github.com/jvargasmahecha/PruebaKonecta/blob/main/cafeteria.sql)  

 El nombre de la base de datos que usted debe crear es: Cafeteria
  
  La base de datos tiene las siguiente entidades:
  
  ![](https://github.com/jvargasmahecha/PruebaKonecta/blob/main/parametrosBD.png) 
  
  3. Agregar la carpeta **PruebaKonecta** ([https://github.com/jvargasmahecha/PruebaKonecta) ; 
  en su servidor web en su máquina local. Usted puede usar Xampp.
  4. Agregar la información necesaria para la conexión a la base de datos. Modificar el archivo **conection.php** que está en la carpeta **PruebaKonecta** 
  ```php
  <?php 
  class BD{ 
      private static $instancia=NULL; 
  
      public static function crearInstancia(){
  
          if(!isset( self::$instancia)){ 
              $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION; //
  
              self::$instancia= new PDO('mysql:host=localhost;dbname=cafeteria','root','',$opcionesPDO);
          }
          return self::$instancia;
      }
  }
  ?>
  ```
  
  <!-- USAGE EXAMPLES -->
  ## Usos
  
  USO:
   Ingresar a través de un navegador a http://localhost/pruebakonecta/
