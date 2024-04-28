<!DOCTYPE html>
<html lang="es-MX">
<?php require '../../includes/_db.php' ?>


    
    <div class="modal fade" id="registerPlantasymacetas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de Plantas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">

                    <div class="container">
                        <div class="col-sm-6 offset-3 mt-5 mt-5_agregar">
                                <form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data">

                                    <div class="row row_agregar">
                                        <div class="col-sm-6 ">
                                            <div class="mb-3 ">
                                                <label for="nombre" class="form-label">Nombre *</label>
                                                <input type="text"  id="nombre" name="nombre" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="descripcion" class="form-label">Descripcion *</label>
                                                <input type="text"  id="descripcion" name="descripcion" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row_agregar">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="color" class="form-label">Color *</label>
                                                
                                                <select name="color" id="color" class="form-control" required>
                                                    <option value="Nuevo">Nuevo</option>
                                                    <option value="Existente">Existente</option>
                                                </select>
                                                
                                                <!--<input type="text"  id="color" name="color" class="form-control" >-->
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="precio" class="form-label">Precio *</label>
                                                <input type="text"  id="precio" name="precio" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row_agregar">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="cantidad" class="form-label">Cantidad *</label>
                                                <input type="number"  id="cantidad" name="cantidad" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="mb-3">
                                                <label for="cantidad" class="form-label">Cantidad minima *</label>
                                                <input type="number"  id="cantidad_min" name="cantidad_min" class="form-control" > 
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row row_agregar">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="categorias" class="form-label">Categorias *</label>
                                                <select name="categorias" id="categorias" class="form-control" required>
                                                   
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
                                                <div class="form-group">
                                                    <img src="img/planta.png" alt="avatar" id="img" />
                                                        <input type="file" class="form-control-file" name="imagen" id="imagen" required>
                                                        <div class="contenedor_cambiarfoto">
                                                            <label class="label_foto" for="imagen">Cambiar foto</label>
                                                        </div>

                                                          <!-------------IMAGEN----------------->
                                                            <script type="text/javascript">

                                                                var defaultFile = 'img/planta.png';

                                                                let file = document.getElementById( 'imagen' );
                                                                let img = document.getElementById( 'img' );

                                                                file.addEventListener( 'change', e => {
                                                                    if( e.target.files[0] ){
                                                                        const reader = new FileReader( );
                                                                        reader.onload = function( e ){
                                                                            img.src = e.target.result;
                                                                        }
                                                                        reader.readAsDataURL(e.target.files[0])
                                                                    }else{
                                                                        img.src = defaultFile;
                                                                    }
                                                                } );
                                                            </script>
                                                </div>
                                            </div>
                                        
                                    </div>
 

                                    <div class="mb-3">
                                        <input type="hidden" name="accion" value="insertar_plantasymacetas">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>  
    </div>                                         



</html>






<!--


<div class="row row_agregar">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="categorias" class="form-label">Categorias *</label>
                                                <select name="categorias" id="categorias" class="form-control" required>
                                                    <option value="electronico">electronico</option>
                                                    <option value="cocina">cocina</option>
                                                    <option value="farmaceutico">farmaceutico</option>
                                                    <option value="mascotas">mascotas</option>
                                                    <option value="jugueteria">jugueteria</option>
                                                    <option value="automovilstico">automovilstico</option>
                                                    <option value="vestimenta">vestimenta</option>
                                                    <option value="telefonia">telefonia</option>
                                                    <option value="deportes">deportes</option>
                                                    <option value="Plantas">Plantas</option>
                                                    <option value="Macetas">Macetas</option>
                                                    <option value="Otros">Otros</option>

                                                  </select>
                                            </div>   
                                        </div>
                                        
                                        
                                        
                                    </div>
                                    
                                   -->