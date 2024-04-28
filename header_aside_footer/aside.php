<?php $usuario = "SELECT * FROM plantasymacetas WHERE color='nuevo'"; ?>

<!-----------ESTILOS DEL SLIDE----------->

<!--estilos-->
<link rel="stylesheet" href="../css/estilos_aside.css">

<!--estilo del slide-->
<link rel="stylesheet" href="../css/superslides.css">

<section class="banner">
    <img src="../img/banner/pexels-psrvsky-pi-54155085-8600338.jpg" alt="" class="banner__img">
    <div class="banner__content">RESILIENCIA PLANTAS Y MACETAS</div>
</section>

<!--<div class="container-slider">
    <div class="slider" id="slider">
            <div class="slider__section">
                <img src="../img/slide1.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="../img/slide2.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="../img/slide3.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="../img/slide4.jpg" alt="" class="slider__img">
            </div>
    </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
</div>-->
<!--<div id="slides">
    <ul class="slides-container">
        <li><img src="../img/slide1.jpg" alt=""></li>
        <li><img src="../img/slide2.jpg" alt=""></li>
        <li><img src="../img/slide3.jpg" alt=""></li>
        <li><img src="../img/slide4.jpg" alt=""></li>
    </ul>
    
    <nav class="slides-navigation">
        <a href="" class="next">&#62;</a>
        <a href="" class="prev">&#60;</a>
    </nav>
    
</div>-->

<!--SLIDER AUTOMATICO Y MANUAL-->
<script src="../js/slider.js"></script>
<!--JQUERY-->
<script src="../js/jquery.js"></script>
<!--<script src="../js/jquery.superslides.js"></script>-->
<!------------------------------------>

<!--SLIDE INFINITO DE FOTOS VARIAS-->
<div class="contenedor">
    <div id="slider_fotografico"></div>
</div>
<!------------------------------>

<!------------MAIN----------->
<div class="contenedor_main">
<main class="main">
      <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Bienvenido a Resiliencia</h2>
            
            <p class="main__txt">Resiliencia tiene para ofrecerles:<br><br>

                🌱🌱 Macetas de fibrocemento, varios modelos y medidas, en color crudo o impermeabilizadad en negro, gris o blanco! <br><br>

                🌿💪🙌Armado de macetas con plantas acorde al espacio y los recursos requeridos!  <br><br>

                🧹​✂️​🏕️​⛺​Realización y mantenimiento de jardines.<br><br>

                Cualquier consulta  estamos a disposición mediante los link de Whatsapp y contacto!<br><br>

                Gracias por elegirnos!🌱​🌺​🍃​🌿​</p>
            
            <!--<p class="main__txt">Descubre las plantas más hermosas, que mejor se adaptan a tu espacio, región geográfica y estilo de vida sin salir de casa. A la hora que sea y donde estés: Resiliencia es la tienda online en la que podrás escoger plantas según tus espacios, gustos y necesidades con un simple clic pero también somos tus cómplices en la creación de ese rincón vegetal que necesitas para refugiarte.  ¿Es tu primera vez? No te preocupes, que prometemos acompañarte en todo el proceso.</p>-->
        </div>  
      </section>
      
      <!--<section class="banner__medio">
      <img src="img/portada_medio_jpg.jpg" alt="" class="banner__img__medio">
      <div class="banner__content__medio">La Mejor Diversion esta Aquí</div>
      
      
      
  </section>-->
      
      
      
      
      
      <!--<section class="group main__about__description">
          <div class="container container--flex">
              <div class="column column--50">
                  <img src="../img/pexels-wendywei-13260479.jpg" alt="">
              </div>
              
              
              <div class="column column--50">
                 
                  <h3 class="comlumn__title">Sorteos <strong><u><a href="http://cafe.nyxberry.net/Member/Intro.aspx">Proximamente</a></u></strong></h3> 
                  <p class="column__txt">Si hay algun sorteo activo lo publicaremos en este link!</p>
                  <a href="http://wolfteam.softnyx.com/Event/2018Halloween/landing.html" class="btn btn--contact">VER</a>
              </div>
          </div>
      </section>-->
      
      
      
      <section class="group today-special">
          <h2 class="group__title">Nuevo Ingreso de Plantas y Macetas</h2>
          <div class="container container--flex">
             
                <?php $resultado = mysqli_query($conexion, $usuario);
      
                while($row=mysqli_fetch_assoc($resultado)) { ?>
             
                <div class="column column--50-25">
                  
                    <img width="100" src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" class="today-special__img">
                  
                    <div class="today-special__title"><?php echo $row["nombre"];?></div>
                  
                    <div class="today-special__price"><?php echo $row["precio"];?></div>
                  
                  
                  
                </div>
              
              
              <?php } mysqli_free_result($resultado);?>
              
          </div>
      </section>
      
      
  </main>
  </div>
  <!----------------------------->








