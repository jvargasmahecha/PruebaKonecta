<link rel="stylesheet" href="./css/site.css" />

<div class="container" style="margin-top:2em">
    <div class="card">
        <div class="card-header">
            <h2>Productos Disponibles</h2>
        </div>
        <div class="card-body">
            <div class="listing-section">
                <?php foreach ($products as $product) { ?>
                <div class="product">
                    <div class="image-box">
                        <div class="images" id="image-1"></div>
                    </div>
                    <div class="text-box">
                        <h2 class="item"><?php echo $product->PD_Nombre; ?></h2>
                        <h3 class="price">$<?php echo number_format($product->PD_Precio); ?></h3>
                        <form action="" method="post">
                            <p class="description">Existencia : <?php echo $product->PD_Stock; ?></p>
                            <label for="cantidad">Cantidad:</label>
                            <input type="text" name="cantidad" id="cantidad" value="1">        
                            <input type="hidden" name="id" id="cantidad" value="<?php echo $product->PD_Id; ?>"> 
          
                             <button type="submit" name="comprar" class="btn btn-primary button">Comprar</button>
                       </form>
                      <!-- <h3 style="color:red"><?php echo $error ?></h3> -->
                    </div>
                </div>   
                    <?php } ?>
            </div>
        </div>
    </div>
</div>



