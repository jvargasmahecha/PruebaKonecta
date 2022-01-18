<?php include_once("conection.php"); ?>

<div class="card">
  <div class="card-header">
    <h3>Agregar Productos</h3>
  </div>
  <div class="card-body">
    <form action="" method="post">
      <div class="row mb-3">
        <div class="col">
          <label for="nombre" class="form-label">Nombre:</label>
          <input required type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese nombre del producto">
        </div>
        <div class="col">
          <label for="referencia" class="form-label">Referencia:</label>
          <input required type="text" class="form-control" name="referencia" id="referencia" aria-describedby="helpId" placeholder="Ingrese referencia del producto">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label for="precio" class="form-label">Precio:</label>
          <input required type="number" class="form-control" min="1000" name="precio" id="precio" aria-describedby="helpId" placeholder="Ingrese el Precio">
        </div>
        <div class="col">
          <label for="peso" class="form-label">Peso en Gramos:</label>
          <input required type="number" class="form-control" min="100" name="peso" id="peso" aria-describedby="helpId" placeholder="Ingrese el peso del producto">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="categoria" class="form-label">Categoria:</label>
          <?php
          $conexionBD = BD::crearInstancia();
          $sql = $conexionBD->query("SELECT * FROM categoria"); ?>

          <select size="1" class="form-control" name="categoria" id="categoria" required>
            <option value="">Seleccione una categoria</option>
            <?php foreach ($sql->fetchAll() as $categoria) { ?>
              <option value="<?php echo $categoria['CT_Id']; ?>"><?php echo $categoria['CT_Nombre'] ?></option>
            <?php  } ?>
          </select>
        </div>

        <div class="col-md-4 mb-3">
          <label for="stock" class="form-label">Stock:</label>
          <input required type="number" class="form-control" min="1" name="stock" id="stock" aria-describedby="helpId" placeholder="Ingrese el stock">
        </div>

        <div class="col-md-4 mb-3">
          <label for="fecha_creacion" class="form-label">Fecha de Creacion:</label>
          <input required type="date" class="form-control" name="fecha_creacion" id="fecha_creacion" aria-describedby="helpId" placeholder="Fecha de creacion">
        </div>

      </div>

      <input name="" id="" class="btn btn-primary width-100" type="submit" value="Agregar Producto">
      <a href="?controller=products&accion=inicio" style="margin-left: 15px" class="btn btn-danger">Cancelar</a>

    </form>
  </div>
</div>