<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
    
    <!--ESTILOS DE LA VENTANA MODAL-->
    <link rel="stylesheet" href="css/estilos_modal.css">
    
    <link rel="stylesheet" href="css/estilos_productos_categoria.css">

    <div id= "content">
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <center><h1>Resiliencia - Plantas y Macetas</h1></center>
                        
                        
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerPlantasymacetas">
                            Nuevo Registro
                        </button>
                        
                        <?php  include ('producto_agregar.php') ?>
                        
                    </div>
                    <div class="col-sm-12">
                        <div class="table-responsive">


                            <table class="table table-striped table-hover">
                                <thead>

                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Color</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Cantidad minima</th>
                                        <th>Categorias</th>
                                        <th>Imagen</th>
                                        <th>Acciones</th>


                                    </tr>

                                </thead>

                                <tbody>

                                    <?php

                                        $sql = "SELECT * FROM plantasymacetas";
                                        $productos = mysqli_query($conexion, $sql);
                                        if($productos -> num_rows > 0){
                                            
                                                //probando "CODIGO PARA PAGINAR HASTA 5 RESULTADOS"//
                                            
                                           $total = $productos->num_rows;
                                           $limit = 10; // poner 5 para achicar la cantidad de vistas de registro
                                            
                                            $pages = ceil($total / $limit);
                                            if(isset($_GET['page'])){
                                                $page = $_GET['page'];
                                            }else{
                                                $page = 1;
                                            }
                                            $start = ($page - 1) * $limit;
                                            $pagination = " LIMIT $start, $limit";
                                            $sql = $sql . $pagination;
                                            $productos = mysqli_query($conexion, $sql);
                                            
                                            //---------------------------------//    
                                            
                                        foreach($productos as $key => $row ){
                                    ?>
                                    <!--funcion y estilos para celdas en error-->
                                    <?php

                                        if ($row['cantidad'] <= $row['cantidad_min']) {
                                          $color = '#F78E8E';
                                          $clase = 'problema';
                                        } else {
                                          $clase = 'correcto';
                                        }

                                        // ...

                                    ?>
                                    <style>
                                          .problema{
                                            background-color: <?php echo $color?>;
                                            color: #000000;
                                        }
                                    </style>
                                    
                                    <!-- empieza la tabla-->
                                    <tr>
                                        <td <?php echo  'class="'.$row['categorias'] .'"'; ?>><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                        <td><?php echo $row['descripcion']; ?></td>
                                        <td><?php echo $row['color']; ?></td>
                                        <td><?php echo $row['precio']; ?></td>



                                        <td <?php echo  'class="'.$clase .'"'; ?>><?php echo $row['cantidad']; ?></td>
                                        <td><?php echo $row['cantidad_min']; ?></td>


                                        <td><?php echo $row['categorias']; ?></td>
                                        <td><img width="100" src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" ></td>

                                        <td class="contenedor_eliminar_editar">
                                            <div class="contenedor_editar">
                                                <button type="button"  class="editar" data-bs-toggle="modal" data-bs-target="#plantasymacetasEditar<?php echo $row['id']?>">
                                                  Editar
                                                </button>  
                                            </div>
                                            
                                            
                                            
                                            <div class="contenedor_eliminar">
                                                <button type="button"  class="eliminar" data-bs-toggle="modal" data-bs-target="#plantasymacetasEliminar<?php echo $row['id']?>">
                                                    Eliminar
                                                </button>
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                        </td>
                                        
                                        
                                            
                                            <?php  include ('producto_eliminar.php') ?>
                                            <?php  include ('producto_editar.php') ?>
                                        
                                    </tr>


                                    <?php
                                    }
                                    }else{

                                        ?>
                                        <tr class="text-center">
                                        <td colspan="4">No existe registros</td>
                                        </tr>

                                        <?php
                                    }?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
                <!------------CODIGO PARA HACER LA PAGINACION------------->
                    
        <div class="paginado">

                        <?php
    
                            //seleccionar todo de la tabla tatuajes
                            $query = "SELECT * FROM plantasymacetas";
    
                            $resultado = mysqli_query($conexion, $query);
    
                            //contar el total de registros
                            $total_registros = mysqli_num_rows($resultado);
    
                            //usando ceil para dividir el total de registros entre $limit 
                            $total_paginas = ceil($total_registros / $limit);
    
                            //link a primera pagina
                            echo "<center><a href='index.php?page=1'>".'Primera'."</a>";
    
                            for($i=1; $i<=$total_paginas; $i++){
                                echo "<a href='index.php?page=".$i."'>".$i."</a>";
                            }
                            //link a la ultima pagina
                            echo "<a href='index.php?page=$total_paginas'>".'Ultima '."</a></center>";
    
    
                        ?>
                        
        </div>    
                    
    <!--------------------------------------------------------------------->


        <section>
            <div class= "container">
                <div class= "row"></div>
                <div class= "col-lg-9"></div>
            </div>
        </section>    
    </div>
    
    <?php require '../../includes/_footer.php' ?>
</html
