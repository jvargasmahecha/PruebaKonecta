</br>
<div class="card">
    <div class="card-header" >
        <h3>Producto con mayor Stock</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $conexionBD = BD::crearInstancia();
                $sql = $conexionBD->query("SELECT PD_Id, PD_Nombre, PD_Precio, MAX(PD_Stock) AS PD_Stock 
                                            FROM `productos` 
                                            GROUP BY PD_Id, PD_Nombre, PD_Precio
                                            ORDER BY MAX(PD_Stock) DESC LIMIT 0,1");
                ?>
                    <?php foreach ($sql->fetchAll() as $product) { ?> 
                        <tr>
                        <td> <?php echo $product['PD_Id']; ?> </td>
                        <td> <?php echo $product['PD_Nombre']; ?> </td>
                        <td>$<?php echo number_format($product['PD_Precio']); ?> </td>
                        <td> <?php echo $product['PD_Stock']; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>
</div>

</br>
<div class="card">
    <div class="card-header" >
        <h3>Producto mas vendido</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $conexionBD = BD::crearInstancia();
                $sql = $conexionBD->query("SELECT productos.PD_Id, PD_Nombre, PD_Precio, SUM(ordenes.OR_Cantidad) AS OR_Cantidad 
                                            FROM `productos` 
                                            INNER JOIN ordenes on productos.PD_Id = ordenes.PD_Id
                                            GROUP BY productos.PD_Id, PD_Nombre, PD_Precio
                                            ORDER BY SUM(ordenes.OR_Cantidad) DESC LIMIT 0,1");
                ?>
                    <?php foreach($sql->fetchAll() as $product) { ?> 
                        <tr>
                        <td> <?php echo $product['PD_Id']; ?> </td>
                        <td> <?php echo $product['PD_Nombre']; ?> </td>
                        <td>$<?php echo number_format($product['PD_Precio']); ?> </td>
                        <td> <?php echo $product['OR_Cantidad']; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>
</div>

</br>
    <div>
        <a  class="btn btn-primary width-100 mt-1" href="?controller=products&accion=crear" role="button">Agregar Producto</a>
    </div>
    </br>
<div class="card">
    <div class="card-header" >
        <h2>Lista de Productos</h2>
    </div>    
    <div class="card-body">
        <table class="table table-bordered " id="tabla" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha Creacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) { ?> <!-- Recupero los datos del modelo, motodo consultar que asigno su inf a $products -->
                    <tr>
                        <td> <?php echo $product->PD_Id; ?> </td>
                        <td><?php echo $product->PD_Nombre; ?></td>
                        <td><?php echo $product->PD_Referencia; ?></td>
                        <td>$<?php echo number_format($product->PD_Precio); ?></td>
                        <td><?php echo $product->PD_Peso; ?></td>
                        <td><?php echo $product->CT_Nombre; ?></td>
                        <td><?php echo $product->PD_Stock; ?></td>
                        <td><?php echo $product->PD_Fecha_Creacion; ?></td>
                        <td>
                            <div class="col-xs-3" role="group" aria-label="">
                                <a href="?controller=products&accion=editar&id=<?php echo $product->PD_Id; ?>" class="btn btn-primary ">Editar</a>
                                <a href="?controller=products&accion=delete&id=<?php echo $product->PD_Id; ?>" style="margin-left: 10px " class="btn btn-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>   

</div>