
<!DOCTYPE html>
<html lang="en">
 
   <link rel="stylesheet" href="css/estilos_modal.css">
    <body>
        
        <div class="modal fade" id="plantasymacetasEditar<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar el Registro de <?php echo $row['nombre']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            
                    </div>
                    <div class="modal-body">        
                        <h2>Editar Credito</h2>

                        <div class="container" id="plantasymacetasEditar<?php echo $row['id']?>">
                            <div class="col-sm-6 offset-3 mt-5">
                                <form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data" >
                                    
                                    <input class="input_oculto" type="hidden" name="id" value="<?php echo $row['id']; ?>" >

                                    <div class="row row_agregar">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre *</label>
                                                <input type="text"  id="nombre" name="nombre" value="<?php echo $row ['nombre']; ?>" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="descripcion" class="form-label">Descripcion *</label>
                                                <input type="text"  id="descripcion" name="descripcion" value="<?php echo $row ['descripcion']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row_agregar">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="color" class="form-label">Ingreso *</label>
                                                
                                                <select name="color" id="color" class="form-control" required>
                                                
                                                    <option value="<?php echo $row['color']; ?>" selected><?php echo $row['color']; ?></option>
                                                
                                                    <option value="Nuevo">Nuevo</option>
                                                    <option value="Existente">Existente</option>
                                                
                                                </select>
                                                <!--<input type="text"  id="color" name="color" value="<?php echo $row ['color']; ?>"  class="form-control" required>-->
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="precio" class="form-label">Precio *</label>
                                                <input type="text"  id="precio" name="precio"  value="<?php echo $row ['precio']; ?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row_agregar">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="cantidad" class="form-label">Cantidad *</label>
                                                <input type="number"  id="cantidad" name="cantidad"  value="<?php echo $row ['cantidad']; ?>" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="mb-3">
                                                <label for="cantidad" class="form-label">Cantidad minima *</label>
                                                <input type="number"  id="cantidamin" name="cantidadmin" value="<?php echo $row ['cantidad_min']; ?>" class="form-control" required>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row row_agregar">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="categorias" class="form-label">Categorias *</label>
                                                <select name="categorias" id="categorias" class="form-control" required>
                                                
                                                <option value="<?php echo $row['categorias']; ?>" selected><?php echo $row['categorias']; ?></option>

                                                <!--<option value="electronico">electronico</option>
                                                <option value="cocina">cocina</option>
                                                <option value="farmaceutico">farmaceutico</option>
                                                <option value="mascotas">mascotas</option>
                                                <option value="jugueteria">jugueteria</option>
                                                <option value="automovilstico">automovilstico</option>
                                                <option value="vestimenta">vestimenta</option>
                                                <option value="telefonia">telefonia</option>
                                                <option value="deportes">deportes</option>-->
                                                <option value="Plantas">Plantas</option>
                                                <option value="Macetas">Macetas</option>
                                                <option value="plantas_con_macetas">Plantas con Macetas</option>
                                                <option value="blog_fotos">Blog Fotos</option>
                                                <option value="blog_img">Blog Img</option>

                                                </select>
                                            </div>   
                                        </div>
                                        
                                        
                                            
                                            <div class="col-sm-6">
                                                <div class="mb-3">  
                                                   
                                                    <div class="form-group" id="plantasymacetasEditar<?php echo $row['id']?>">
                                                        <img width="100" src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" id="img<?php echo $row['id']?>">   
                                                        <input type="file" class="form-control-file"  name="imagen" id="foto_editar<?php echo $row['id']?>" required>
                                                        <div class="contenedor_cambiarfoto">
                                                            <label class="label_foto" for="foto_editar<?php echo $row['id']?>">Cambiar foto</label>
                                                        </div>
                                                        
                                                        <script type="text/javascript">
                                                                /*const defaultFile_ditar = 'img/no_image.jpg';*/
                                                            
                                                            var defaultFile_ditar = 'img/no_image.jpg';
                            

                                                            var file_editar = document.getElementById( 'foto_editar<?php echo $row['id']?>' );
                                                            var img_editar = document.getElementById( 'img<?php echo $row['id']?>' );
                                                            file_editar.addEventListener( 'change', e => {
                                                                if( e.target.files[0] ){
                                                                    const reader = new FileReader( );
                                                                        reader.onload = function( e ){
                                                                            img_editar.src = e.target.result;
                                                                        }
                                                                        reader.readAsDataURL(e.target.files[0]);
                                                                }else{
                                                                                        img_editar.src = defaultFile_ditar;
                                                                                    }
                                                            } );

                                                        </script>
                                                        
                                                    </div>
                                                </div>    
                                            </div>
 
                                    </div>

                                    

                                    <div class="mb-3">
                                        <input type="hidden" name="accion" value="editar_plantasymacetas">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>        
        
    </body>
</html>