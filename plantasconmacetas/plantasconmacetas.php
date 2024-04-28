<?php include('../header_aside_footer/header.php') ?>
  
  <?php $usuario = "SELECT * FROM plantasymacetas WHERE categorias='plantas_con_macetas'"; ?>

  <link rel="stylesheet" href="../css/estilos_aside.css">
  
  <link rel="stylesheet" href="../blog/css/estilo_plantas.css">
  
  <script src="../blog/js/jquery.js"></script>
  
<body>
   
    <section class="group today-special">
          <h2 class="group__title">Plantas con Macetas</h2>
          <div class="container container--flex">
             
                <?php $resultado = mysqli_query($conexion, $usuario);
      
                while($row=mysqli_fetch_assoc($resultado)) { ?>
             
                <div class="column column--50-25 galeria__item">
                  
                    <img width="100" src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" class="today-special__img galeria__img">
                  
                    <div class="today-special__title"><?php echo $row["nombre"];?></div>
                  
                    <div class="today-special__price"><?php echo $row["precio"];?></div>
                  
                  
                  
                </div>
              
              
              <?php } mysqli_free_result($resultado);?>
              
          </div>
      </section>

</body>
     
    <script src="../blog/js/modal.js"></script>                         
      
<?php include('../header_aside_footer/footer.php') ?>     