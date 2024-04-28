<?php
  include("../php/cn.php");
  
  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RESILIENCIA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!--Estilo HEADER-->
        <link rel="stylesheet" href="../css/estilos_header.css">
        <!--CDN FONT AWESOME-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!--ESTILOS DEL BOTON WHATSAPP-->
        <link rel="stylesheet" href="../boton_flotante_whatsapp/estilos.css">
        
        
    </head>
    <body>
        
        <div class="contenedor_header">
                   
            <header class="header" id="header">
               
               
                <a href="resiliencia.php"><h1 class="logo"><img src="../img/resiliencia.jpeg" alt=""></h1></a>
                
                <nav class="nav__menu">
                    <ul class="ul__menu" id="ul__menu">
                        <li class="li"><a href="../header_aside_footer/resiliencia.php">Inicio</a></li>
                        <li class="li"><a href="../quienes_somos/quienes_somos.php">Acerca de mi</a></li>
                        <li class="li submenu_dos"><a href="#" class="submenu_dos">Blog <i class="fa-solid fa-chevron-down"></i></a>
                        
                            <ul class="ul_submenu active" id="ul_submenu_dos">
                               
                                <div class="contenedor_flecha">
                                    <div class="arrow-left active"></div>
                                </div>
                               
                                <li class="li_submenu"><a href="../blog/blog_fotos.php">Fotos</a></li>
                                <li class="li_submenu"><a href="../blog_dos/blog_img.php">Img Recreativo</a></li>
                                
                            </ul>
                        
                        </li>
                        
                        <li class="li submenu"><a href="#" class="submenu">Plantas y Macetas <i class="fa-solid fa-chevron-down"></i></a>
                          
                            
                            
                            <ul class="ul_submenu active" id="ul_submenu">
                               
                                <div class="contenedor_flecha">
                                    <div class="arrow-left active"></div>
                                </div>
                               
                                <li class="li_submenu"><a href="../plantas/plantas.php">Plantas</a></li>
                                <li class="li_submenu"><a href="../macetas/macetas.php">Macetas</a></li>
                                <li class="li_submenu"><a href="../plantasconmacetas/plantasconmacetas.php">Plantas con Macetas</a></li>
                            </ul>
                           
                        </li>
                        <!--<li class="li"><a href="#">Contacto</a></li>-->
                    </ul>
                </nav>
                
                
                
                <div class="contenedor__btn__menu">
                  
                    <div class="container-boton">
                        <a href="https://bit.ly/Plantas_y_Macetas" target="_blank">
                            <img class="boton" src="../boton_flotante_whatsapp/icono.png" alt="">
                        </a>
                    </div>  
                   
                    <div class="contacto">
                         <a href="../contacto/contacto.php">CONTACTO</a>
                    </div>
                         
             
                    <input type="checkbox" id="input__btn__menu" class="input__btn__menu">
                    <label for="input__btn__menu" class="label__btn__menu"><i class="fa-solid fa-bars"></i></label>
                </div>
                
                
                
                
            </header>           
               
                         
        </div>    
    
<script src="../js/script.js"></script>