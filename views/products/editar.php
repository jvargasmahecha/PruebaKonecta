<div class="card">
  <div class="card-header">
    <h3>Editar Productos</h3>
  </div>

  <div class="card-body">
    <form action="" method="post">
      <div class="mb-3">
        <label for="id" class="form-label">Id:</label>
        <input readonly type="text" class="form-control" value="<?php echo $product->PD_Id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="Id producto">
      </div>

      <div class="row mb-3">
        <div class="col">
          <label for="nombre" class="form-label">Nombre:</label>
          <input required type="text" class="form-control" value="<?php echo $product->PD_Nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese nombre del producto">
        </div>
        <div class="col">
          <label for="referencia" class="form-label">Referencia:</label>
          <input required type="text" class="form-control" value="<?php echo $product->PD_Referencia; ?>" name="referencia" id="referencia" aria-describedby="helpId" placeholder="Ingrese referencia del producto">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
          <label for="precio" class="form-label">Precio:</label>
          <input required type="number" class="form-control" min="1000" value="<?php echo $product->PD_Precio; ?>" name="precio" id="precio" aria-describedby="helpId" placeholder="Ingrese el Precio">
        </div>
        <div class="col">
          <label for="peso" class="form-label">Peso en Gramos:</label>
          <input required type="number" class="form-control" min="100" value="<?php echo $product->PD_Peso; ?>" name="peso" id="peso" aria-describedby="helpId" placeholder="Ingrese el peso del producto">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="categoria" class="form-label">Categoria:</label>
          <?php
          $conexionBD = BD::crearInstancia();
          $sql = $conexionBD->query("SELECT * FROM categoria"); ?>
          <select required size="1" class="form-control" name="categoria" id="categoria">
            <option value="">Seleccione una categoria</option>        
            <?php foreach ($sql->fetchAll() as $categoria) { 
              if ($categoria['CT_Id'] === $product->categoria) 
              {?>
                <option selected="selected" value="<?php echo $categoria['CT_Id']; ?>"><?php echo $categoria['CT_Nombre'] ?></option><?php
              } else { ?>
                <option value="<?php echo $categoria['CT_Id']; ?>"><?php echo $categoria['CT_Nombre'] ?></option><?php 
              }
            } ?>
          </select>
        </div>

        <div class="col-md-4 mb-3">
          <label for="stock" class="form-label">Stock:</label>
          <input required type="number" class="form-control" min="1" value="<?php echo $product->PD_Stock; ?>" name="stock" id="stock" aria-describedby="helpId" placeholder="Ingrese el stock">
        </div>

        <div class="col-md-4 mb-3">
          <label for="fecha_creacion" class="form-label">Fecha de Creacion:</label>
          <input required type="date" class="form-control" value="<?php echo $product->PD_Fecha_Creacion; ?>" name="fecha_creacion" id="fecha_creacion" aria-describedby="helpId" placeholder="Fecha de creacion">
        </div>
      </div>

      <input name="" id="" class="btn btn-primary width-100 mt-1" type="submit" value="Editar Producto">
      <a href="?controller=products&accion=inicio" style="margin-left: 15px" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>