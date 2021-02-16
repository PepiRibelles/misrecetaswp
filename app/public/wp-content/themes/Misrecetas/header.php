<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="recetas, cocina, comida">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/_resources/olla.png">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@300&display=swap" rel="stylesheet">
   
    <?php wp_head();
       
    ?>
</head>

<body>
    <div class="container ">
        <header class=" marg-iz block-center-row">
            <p class="hdr ">Mis Recetas</p>
        </header>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                    'container' => 'nav',
                    'container_class' => 'nave block-center-row marg-iz',
                    'after' => '<span>|</span>'

                )
            ); 
            
        ?>


        <!--<nav> !!!!!!!!Hay que cambiar el nav... separar | del texto de los enlaces
            <ul class="nave marg-iz block-center-row">
                <li> Inicio |</li>
                <li> <a href="Recetas.html">| Recetas | </a></li>
                <li> <a href="Contactar.html">| Contactar </a></li>
            </ul>
        </nav>-->