<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_plantasymacetas':
            eliminar_plantasymacetas();

        break;        
        case 'editar_plantasymacetas':
        editar_plantasymacetas();

        break;

        case 'insertar_plantasymacetas':
        insertar_plantasymacetas();

        break;    
    }
    
    switch($_POST['accion']){
        case 'eliminar_user':
            eliminar_user();

        break;        
        case 'editar_user':
        editar_user();

        break;

        case 'insertar_user':
        insertar_user();

        break;    
    }
}

//INSERTAR, EDITAR O ELIMINAR PLANTAS Y MACETAS
function insertar_plantasymacetas(){

    global $conexion;
    extract($_POST);


        //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio=$_FILES['imagen']['size'];
    
        //se realiza la lectura de la imagen
                $imagenSubida=fopen($_FILES['imagen']['tmp_name'], 'r');
                $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin =mysqli_escape_string($conexion,$binariosImagen);
                


    $consulta="INSERT INTO plantasymacetas (nombre, descripcion, color, precio, cantidad, cantidad_min, categorias, imagen)
    VALUES ('$nombre', '$descripcion', '$color', '$precio', $cantidad ,$cantidad_min, '$categorias', '$imagenFin');" ;

    mysqli_query($conexion, $consulta);
    
    //header("Location: ../views/usuarios/");
    
    echo ' <script>
    
        $(document).ready(function(){
            swal({
                title: "Registrado correctamente!",
                text: "Preciono OK",
                type: "success"
            }).then(function() {
                window.history.go(-1);
                
            });
        });

    </script>';

}
function editar_plantasymacetas(){

    global $conexion;
    extract($_POST);


        //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio=$_FILES['imagen']['size'];
        //se realiza la lectura de la imagen
                $imagenSubida=fopen($_FILES['imagen']['tmp_name'], 'r');
                $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin =mysqli_escape_string($conexion,$binariosImagen);
                
    $consulta="UPDATE plantasymacetas SET nombre = '$nombre', descripcion = '$descripcion', color = '$color', precio = '$precio', cantidad = '$cantidad', categorias = '$categorias', imagen = '$imagenFin' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    //header("Location: ../views/usuarios/");
    
    echo ' <script>
    
        $(document).ready(function(){
            swal({
                title: "Registro editado correctamente!",
                text: "Preciono OK",
                type: "success"
            }).then(function() {
                window.history.go(-1);
                
            });
        });

    </script>';
}
function eliminar_plantasymacetas(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM plantasymacetas WHERE id = $id";
    mysqli_query($conexion, $consulta);
    
    //header("Location: ../views/usuarios/");
    
    //window.location = "..//login.php";
    
    echo ' <script>
    
        $(document).ready(function(){
            swal({
                title: "Registro eliminado correctamente!",
                text: "Preciono OK",
                type: "success"
            }).then(function() {
                window.history.go(-1);
                
            });
        });

    </script>';
}
        

//INSERTA, EDITAR O ELIMINAR USUARIOS
function insertar_user(){

    global $conexion;
    extract($_POST);


        //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio=$_FILES['imagen']['size'];
    
        //se realiza la lectura de la imagen
                $imagenSubida=fopen($_FILES['imagen']['tmp_name'], 'r');
                $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin =mysqli_escape_string($conexion,$binariosImagen);
                


    $consulta="INSERT INTO user (nombre, correo, password, telefono, imagen)
    VALUES ('$nombre', '$correo', '$password', $telefono, '$imagenFin');" ;

    mysqli_query($conexion, $consulta);
    
    //header("Location: ../views/usuarios/");
    
    echo ' <script>
    
        $(document).ready(function(){
            swal({
                title: "Usuario Registrado con Exito!",
                text: "Preciono OK",
                type: "success"
            }).then(function() {
                window.location = "_sesion/login.php";
            });
        });

    </script>';

}
function editar_user(){

    global $conexion;
    extract($_POST);


        //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio=$_FILES['imagen']['size'];
        //se realiza la lectura de la imagen
                $imagenSubida=fopen($_FILES['imagen']['tmp_name'], 'r');
                $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin =mysqli_escape_string($conexion,$binariosImagen);
                
    $consulta="UPDATE user SET nombre = '$nombre', correo = 'correo', password = '$password', telefono = '$telefono', WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
function eliminar_user(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM user WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
?>