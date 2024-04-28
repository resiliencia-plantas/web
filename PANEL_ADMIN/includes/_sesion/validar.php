<?php

/**
 * Validacion de datos para poder iniciar sesion
 */
require_once ("../_db.php");
$correo=$_POST['correo'];
$password=$_POST['password'];
session_start();
$_SESSION['correo']=$correo;


$conexion=mysqli_connect("localhost","root","","resiliencia");
$consulta="SELECT*FROM user where correo='$correo' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header('Location: ../../views/usuarios/index.php');


}else{
    echo'no se puedo regitrar';
    header('location: ../../index.php');
    session_destroy();
}
?>
  
  <?php

  /**
   * Parte de registro de usuarios
   */
 if(isset ($_POST['registrar'])){
if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_FILES['imagen']) >= 1) {
      $nombre = trim($_POST['nombre']);
      $correo = trim($_POST['correo']);
      $password = trim($_POST['password']);
      $telefono = trim($_POST['telefono']);
      $imagen = trim($_FILES['imagen']); /*deskewImage*/
    
    //variables donde se almacenan los valores de nuestra imagen
                $tamanoArchvio=$_FILES['foto']['size'];
    
        //se realiza la lectura de la imagen
                $imagenSubida=fopen($_FILES['foto']['tmp_name'], 'r');
                $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
        //se realiza la consulta correspondiente para guardar los datos
        
        $imagenFin =mysqli_escape_string($conexion,$binariosImagen);

      $consulta = "INSERT INTO user (nombre, correo, telefono, password, imagen)
      VALUES ('$nombre', '$correo', '$telefono', '$password', '$imagenFin')";

     mysqli_query($conexion, $consulta);
     mysqli_close($conexion);

 }
} else {
     echo"no se pudo registrar";
 }
?>







