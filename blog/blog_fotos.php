<?php include('../header_aside_footer/header.php')?>
   
   <?php $usuario = "SELECT * FROM plantasymacetas WHERE categorias='blog_fotos'"; ?>
    
    <link rel="stylesheet" href="css/estilo_plantas.css">
    <script src="js/jquery.js"></script>

<body>

    
<h1 class="titutlo_galeria">Mis Fotos</h1>
<ul class="galeria">
  
  <?php $resultado = mysqli_query($conexion, $usuario);
      
                while($row=mysqli_fetch_assoc($resultado)) { ?>
   
    <li class="galeria__item"><img src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" class="galeria__img"><h2 class="nombre"><?php echo $row["nombre"];?></h2></li>
    <!--<li class="galeria__item"><img src="img/2.png" class="galeria__img"><h2 class="nombre">Planta2</h2></li>
    <li class="galeria__item"><img src="img/3.png" class="galeria__img"><h2 class="nombre">Planta3</h2></li>
    <li class="galeria__item"><img src="img/4.png" class="galeria__img"><h2 class="nombre">Planta4</h2></li>
    <li class="galeria__item"><img src="img/5.png" class="galeria__img"><h2 class="nombre">Planta5</h2></li>
    <li class="galeria__item"><img src="img/6.png" class="galeria__img"><h2 class="nombre">Planta6</h2></li>
    <li class="galeria__item"><img src="img/7.png" class="galeria__img"><h2 class="nombre">Planta7</h2></li>
    <li class="galeria__item"><img src="img/9.png" class="galeria__img"><h2 class="nombre">Planta8</h2></li>
    <li class="galeria__item"><img src="img/10.png" class="galeria__img"><h2 class="nombre">Planta9</h2></li>
    <li class="galeria__item"><img src="img/11.png" class="galeria__img"><h2 class="nombre">Planta10</h2></li>
    <li class="galeria__item"><img src="img/12.png" class="galeria__img"><h2 class="nombre">Planta11</h2></li>
    <li class="galeria__item"><img src="img/13.png" class="galeria__img"><h2 class="nombre">Planta12</h2></li>
    <li class="galeria__item"><img src="img/14.png" class="galeria__img"><h2 class="nombre">Planta13</h2></li>
    <li class="galeria__item"><img src="img/15.png" class="galeria__img"><h2 class="nombre">Planta14</h2></li>-->
    
    <?php } mysqli_free_result($resultado);?>
    
</ul>

    

</body>


<script src="js/modal.js"></script>


<?php include('../header_aside_footer/footer.php')?>