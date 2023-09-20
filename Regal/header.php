<?php wp_head(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regal Realty</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <div class="background-image">
    <header>
        <div class="wrapper padding-border blue-background">
            <div class="row">
                <div class="column fit change-fit">
                <a href="#" class="logo text-dec text-white">
                    <img src="wp-content/themes/Regal/logo.png" class="logo-size">
                </a>

                </div>
                <div class="column align-center dont-show">
                    <ul>
                    <?php

                    wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation',
                        'container' => 'nav',
                        'container_class' => 'your-menu-container-class', // Add your container class here
                        'menu_class' => 'your-menu-ul-class p-nav text-dec main-color ok', // Add your menu ul class here
                        'menu_id' => 'your-menu-id', // Add your menu id here
                    ));

                    ?>
                    </ul>
                </div>
                <div class="column nav-gap align-end fit test">
                    <a href="#" class="btn btn-header fit black">
                        <div class="icon-holder align-center small-gap"><i class='bx bxs-cart black'></i><p class="test black">CART</p></div>
                    </a>
                </div>
                <div class="column hide align-end fit">
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <nav class="nav-gap overlay-content col">
                        <?php

                        wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation'

                        ));

                        ?> 

                        </nav>
                      </div>
                      
                      <span onclick="openNav()">&#9776;</span>
                </div>
            </div>
        </div>
    </header>