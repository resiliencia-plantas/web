<script src="../js/sweetalert2@11.js"></script>    



<?php

$nombre = $_POST['tu_nombre'];
$correo = $_POST['direccion_de_correo_electronico'];
$titulo = $_POST['titulo'];
$mensaje = $_POST['tu_mensaje'];

$body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Titulo: " . $titulo . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send 
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'resiliencia.plantas.y.macetas@gmail.com';                     //SMTP username
    $mail->Password   = 'b j y e e o d j b c t j a h k s';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('resiliencia.plantas.y.macetas@gmail.com', $nombre);
    $mail->addAddress('resiliencia.plantas.y.macetas@gmail.com');     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto muy importante';
    $mail->Body    = $body;
    
    $mail->CharSet = 'UTF-8';
    

    $mail->send();
    
    
    
   
    
    echo '<script language=javascript>
            
            
                window.location.href = "../contacto.php";
            
            
           
           
        
            
        </script>';
    
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}

?>







