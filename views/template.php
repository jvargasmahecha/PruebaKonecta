<!doctype html>
<html lang="en">
  <head>
    <title>Cafeteria</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- link rel="icon" href="img/icon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <script  src="js/hora.js"></script>
    <script  src="js/carrito.js"></script>
    <script  src="js/paginacion.js"></script>    
  </head>
  <body>
      <nav class="navbar navbar-expand navbar-light bg-light ">
          <div class="nav navbar-nav">
              <a class="nav-item nav-link" href="?controller=pages&accion=inicio"><h5>Home</h5></a>
              <a class="nav-item nav-link" href="?controller=products&accion=inicio"><h5>Productos</h5></a>
              <a class="nav-item nav-link" href="?controller=orden&accion=crear"><h5>Comprar</h5></a>
              <a class="nav-item nav-link" href="?controller=pages&accion=nosotros"><h5>Contacto</h5></a>              
              <a class="nav-item nav-link" ><h5 id="HoraActual"></h5></a>  
          </div>    
      </nav>
      <div class="container">
          <div class="row">
              <div class="col-xs|sm|md|lg|xl-1-12">
                  <?php include_once("ruteador.php")?>
              </div>              
          </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>