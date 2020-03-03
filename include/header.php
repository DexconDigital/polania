<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/loading.svg" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->
<?php
require './variables/variables.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- <meta name="keywords" content="Arriendo de inmuebles, venta de inmuebles, inmobiliaria, arriendo apartamento, arriendo casa, venta apartamentos, venta casa, casas en arriendo, apartamentos en arriendo"/>
    <meta name="description" content="Inmobiliaria Grr, pagina de ventas, arriendos y avaluos de inmuebles, puedes comprar y arrendar los mejores inmuebles en bogota" />
    <meta property="og:type"               content="Inmuebles, Inmobiliaria" />
    <meta property="og:title"              content="Inmueble de Grr Finca Raiz" />
    <meta property="og:description"        content="¡Mira este increible inmueble!" />
    <meta property="og:image"              content="http://www.grrfincaraiz.com.co/grr/images/slide3.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex" />
    <meta name="author" content="Dexcon Digital" />
    <meta name="copyright" content="www.dexcondigital.com" /> -->
    <title>Inmobiliaria Polania</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/bootstrap3.css">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style2.css">
    <?php if ($page == 'inmuebles') {
        echo '<link rel="stylesheet" href="./css/carrousel.inmuebles.css">';
    } ?>
    <!-- <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <!-- Main Header-->
    <header class="main-header">
        <!-- Header Top One -->
        <div class="header-top-one">
            <div class="container-fluid">
                <div class="inner-container clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="links clearfix">
                            <li><a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope mr-2 icono_correo"></i><?php echo $datos_contacto['correo']['correo'] ?></a></li>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right clearfix">
                        <!--social-icon-->
                        <div class="social-icon">
                            <ul class="clearfix">
                                <!-- <li><a target="_blank" href="https://www.facebook.com/grr.fincaraiz.1?ref=bookmarks"><img src="images/facebook.png" alt="icon facebook" style="height:22px; width:auto;"></a></li> -->
                                <!-- <li><a href=""><img src="images/twitter.png" alt="icon twitter" style="height:22px; width:auto;"></li> -->
                                <!-- <li><a target="_blank" href="https://www.instagram.com/grr_fincaraiz/?hl=es-la"><img src="images/instagram.png" alt="icon facebook" style="height:22px; width:auto;"></a></li> -->
                                <!-- <li><a target="_blank" href="https://www.youtube.com/channel/UCDw7z49ZfgvhMU_oCVGnpbw?view_as=subscriber"><img src="images/youtube.png" alt="icon youtube" style="height:22px; width:auto;"></a></li> -->
                                <li><a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><img src="images/whatsapp.png" alt="icon whatsapp" style="height:22px; width:auto;"></a></li>
                            </ul>
                        </div>
                        <ul class="number">
                            <li><span class="icon fas fas fa-phone"></span><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>" style="color:inherit;"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top One End -->
        <!-- Main Box -->
        <div class="main-box">
            <div class="container-fluid">
                <div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box p-0">
                        <div class="logo">
                            <a href="index.php" class="ml-4">
                                <img src="./images/polania_blanco_2.png" alt="Logo de la inmobiliaria Grr" style="height:70px; width:auto;">
                            </a>
                        </div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="item <?php if ($page == 'inicio') {
                                                        echo 'current';
                                                    } ?>"><a class="items_menu" href="./index.php">Inicio</a></li>
                                    <li class="item <?php if ($page == 'quienes') {
                                                        echo 'current';
                                                    } ?>"><a href="./quienes-somos.php">Quienes Somos</a></li>
                                    <li class="item <?php if ($page == 'inmuebles') {
                                                        echo 'current';
                                                    } ?>"><a href="./inmuebles.php">Inmuebles</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle"  style="padding: 12px 22px 16px;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
                                        <div class="dropdown-menu" style="background-color: #66302E;">
                                            <a class="dropdown-item" href="#"> Arrendatarios</a>
                                            <a class="dropdown-item" href="#"> Propietarios</a>
                                            <a class="dropdown-item" href="#"> Pagos PSE</a>
                                        </div>
                                    </li>
                                    <li class="item <?php if ($page == 'blog') {
                                                        echo 'current';
                                                    } ?>"><a href="./blog.php">Blog</a></li>
                                    <li class="item <?php if ($page == 'contacto') {
                                                        echo 'current';
                                                    } ?>"><a href="./contacto.php">Contáctenos</a></li>
                                    <li>
                                        <a href="#" target="_blank" class="p-0"> <img src="./images/logopse.png" alt="" class="img-responsive mx-auto d-block logo_pse" style="width:3.8em;"></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    <!--Nav Outer End-->

                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="header-top-one">
                <div class="container-fluid">
                    <div class="inner-container clearfix">
                        <!--Top Left-->
                        <div class="top-left">
                            <ul class="links clearfix">
                                <li><a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope mr-2 icono_correo"></i><?php echo $datos_contacto['correo']['correo'] ?></a></li>

                            </ul>
                        </div>
                        <!--Top Right-->
                        <div class="top-right clearfix">
                            <!--social-icon-->
                            <div class="social-icon">
                                <ul class="clearfix">
                                    <!-- <li><a target="_blank" href="https://www.facebook.com/grr.fincaraiz.1?ref=bookmarks"><img src="images/facebook.png" alt="icon facebook" style="height:22px; width:auto;"></a></li> -->
                                    <!-- <li><a href=""><img src="images/twitter.png" alt="icon twitter" style="height:22px; width:auto;"></li> -->
                                    <!-- <li><a target="_blank" href="https://www.instagram.com/grr_fincaraiz/?hl=es-la"><img src="images/instagram.png" alt="icon facebook" style="height:22px; width:auto;"></a></li> -->
                                    <!-- <li><a target="_blank" href="https://www.youtube.com/channel/UCDw7z49ZfgvhMU_oCVGnpbw?view_as=subscriber"><img src="images/youtube.png" alt="icon youtube" style="height:22px; width:auto;"></a></li> -->
                                    <li><a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><img src="images/whatsapp.png" alt="icon whatsapp" style="height:22px; width:auto;"></a></li>
                                </ul>
                            </div>
                            <ul class="number">
                                <li><span class="icon fas fas fa-phone"></span><a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>" style="color:inherit;"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <!--Logo-->
                <div class="logo pull-left">
                    <img src="./images/polania_color.png" alt="">
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class=" <?php if ($page == 'inicio') {
                                                echo 'current';
                                            } ?>"><a href="./index.php">Inicio</a></li>
                                <li class="item <?php if ($page == 'quienes') {
                                                    echo 'current';
                                                } ?>"><a href="./quienes-somos.php">Quienes Somos</a></li>
                                <li class="item <?php if ($page == 'inmuebles') {
                                                    echo 'current';
                                                } ?>"><a href="./inmuebles.php">Inmuebles</a></li>
                                <li class="nav-item dropdown item">
                                    <a class="nav-link dropdown-toggle" style="padding: 16px 22px 16px;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
                                    <div class="dropdown-menu">
                                        <a id="hover" class="dropdown-item" style="color: black" href="#"> Arrendatarios</a>
                                        <a id="hover" class="dropdown-item" style="color: black" href="#"> Propietarios</a>
                                        <a id="hover" class="dropdown-item" style="color: black" href="#"> Pagos PSE</a>
                                    </div>
                                </li>
                                <li class="item <?php if ($page == 'blog') {
                                                    echo 'current';
                                                } ?>"><a href="./blog.php">Blog</a></li>
                                <li class="item <?php if ($page == 'contacto') {
                                                    echo 'current';
                                                } ?>"><a href="./contacto.php">Contáctenos</a></li>
                                <li>
                                    <a href="#" target="_blank" class="p-0 pt-2"><img src="./images/logopse.png" alt="" class="img-responsive mx-auto d-block logo2_pse" style="width:3.5em;"></a>
                                </li>
                            </ul>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
    </header>