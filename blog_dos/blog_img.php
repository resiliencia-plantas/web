<?php include('../header_aside_footer/header.php')?>
   
   <?php $usuario = "SELECT * FROM plantasymacetas WHERE categorias='blog_img'"; ?>
    
    <link rel="stylesheet" href="css/estilo_blog_dos.css">
    <script src="js/jquery.js"></script>

<body>

    


 
    <h1 class="titutlo_galeria">Mi Galeria</h1> 
    <div class="gallery-container">
      
        <?php $resultado = mysqli_query($conexion, $usuario);
      
            while($row=mysqli_fetch_assoc($resultado)) { ?>  
       
        <div class="gallery__item">
            <img src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" alt="" class="gallery__img">
            <h2 class="gallery__title"><?php echo $row["nombre"];?></h2>
        </div>
        
        <?php } mysqli_free_result($resultado);?>

    </div>
  
  

    
    
    


    

</body>


<script src="js/modal.js"></script>


<?php include('../header_aside_footer/footer.php')?>