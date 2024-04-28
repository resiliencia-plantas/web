<!--HEADER-->
<?php include('../header_aside_footer/header.php') ?>

<!--ESTILOS-->
<link rel="stylesheet" href="css/estilos_contacto.css">



<form action="php/enviar-prueba.php" method="post" class="formulario" onsubmit="return validar();">
    
        <h1 class="formulario_titulo">Contáctenos</h1>
       
        <input type="text" class="formulario_input" name="tu_nombre" id="nombre">
        <label for="" class="formulario_label">Nombre</label>
    
   
        <input type="text" class="formulario_input" name="direccion_de_correo_electronico" id="correo">
        <label for="" class="formulario_label">Email</label>
    
   
        <input type="text" class="formulario_input" name="titulo" id="titulo">
        <label for="" class="formulario_label">Titulo</label>
   
   
        <textarea class="textarea_100" name="tu_mensaje" id="mensaje"></textarea>
        <label for="" class="formulario_label_textarea">Mensaje</label>
        
        <input type="submit" class="formulario_submit" onclick="EventoAlert()" name="submit">
   
    
</form>

<!--VALIDAR FORMULARIO ANTES DE ENVIAR-->
 <script src="js/validar.js"></script>
 
<!--SWEET ALERT-->
<script src="js/sweetalert2@11.js"></script>

<!--INPUTS RESPONSIVE-->
<script src="js/form.js"></script>

<!--FOOTER-->
<?php include('../header_aside_footer/footer.php') ?>
