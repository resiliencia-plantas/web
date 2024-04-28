<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
   
    <!--<div class="row">
        <div class="col-sm-4">
            <a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'electronico'?>">
                electronica
            </a>
        </div>
        <div class="col-sm-4">
            <a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'cocina'?>">
                Cocina
            </a>
        </div>  
        <div class="col-sm-4">
            <a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'farmaceutico'?>">
                Farmaceutico
            </a>
        </div>  
    </div>-->
    
    <div class="row">
        <!--<div class="col-sm-4">
            <a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'jugueteria'?>">
                jugueteria
            </a>
        </div>-->

        <div class="col-sm-4">
            <a class="catmascotas" href="productosCategoria.php?categoria=<?php echo 'blog_fotos'?>">
            Blog Fotos
            </a>
        </div>
        <div class="col-sm-4">
            <a class="catautomovilstico" href="productosCategoria.php?categoria=<?php echo 'blog_img'?>">
                Blog Img
            </a>
        </div>
    </div>
    

    <div class="row">
        <div class="col-sm-4">
            <a class="catvestimenta" href="productosCategoria.php?categoria=<?php echo 'Plantas'?>">
            Plantas
            </a>
        </div>
        <div class="col-sm-4">
            <a class="cattelefonia" href="productosCategoria.php?categoria=<?php echo 'Macetas'?>">
            Macetas
            </a>
        </div>
        <div class="col-sm-4">
            <a class="catdeportes" href="productosCategoria.php?categoria=<?php echo 'plantas_con_macetas'?>">
            Plantas con Macetas
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <input class="soon" type="button" value="Mas categorias proximamenente">
        </div>
    </div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>