<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
    
        <div class="modal fade" id="plantasymacetasEliminar<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar el Registro de <?php echo $row['nombre']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                    </div>

                    <div class="modal-body">

                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3">
                                    <div class="alert alert-danger text-center">
                                        <p>¿Desea confirmar la eliminacion del registro?</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form action="../../includes/_functions.php" method="POST">
                                                <input type="hidden" name="accion" value="eliminar_plantasymacetas">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <input type="submit" name="" value="eliminar" class="btn btn-success">
                                                <a href="./" class="btn btn-danger">cancelar</a>
                                            </form>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>     
            
    </body>
</html>