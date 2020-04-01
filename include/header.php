<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<?php include './variables/metaEtiquetas.php' ?>
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
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Main Header-->
    <header class="main-header">
        <!-- Header Top One -->
        <div class="header-top-one">
            <div class="container-fluid">
                <div class="inner-container clearfix">
                    <!--Top Left-->
                    <div class="top-left ml-4">
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
                                <li><a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><img src="images/whatsapp.png" alt="icon whatsapp" style="height:26px; width:auto;"></a></li>
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
                                <img src="./images/polania_color.png" alt="Logo Polania Inmobiliaria" style="height:70px; width:auto;">
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
                                                    } ?>"><a href="./quienes-somos.php">Quiénes Somos</a></li>
                                        <li class="item <?php if ($page == 'servicios') {
                                                            echo 'current';
                                                        } ?>"><a href="./servicio.php">Servicios</a></li>
                                    <li class="item <?php if ($page == 'inmuebles') {
                                                        echo 'current';
                                                    } ?>"><a href="./inmuebles.php?">Inmuebles</a></li>
                                    <li class="nav-item dropdown">
                                        <a id="option_pse" class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
                                        <div id="menu" class="dropdown-menu"style="background-color: #616161;">
                                            <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=108&tipo=2" target="_blanck"><i class="fas fa-home"></i> Arrendatarios</a>
                                            <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=108&tipo=1" target="_blanck"><i class="fas fa-key"></i> Propietarios</a>
                                            <a class="dropdown-item" href=" https://www.zonapagos.com/t_Polaniainmobiliaria/pagos.asp" target="_blanck"><i class="fas fa-hand-holding-usd"></i> Pagos PSE</a>
                                        </div>
                                    </li>

                                    <li class="item <?php if ($page == 'noticias') {
                                                        echo 'current';
                                                    } ?>"><a href="./noticia.php">Notas de Interés</a></li>
                                    <li class="item <?php if ($page == 'contacto') {
                                                        echo 'current';
                                                    } ?>"><a href="./contacto.php">Contáctenos</a></li>
                                    <li class="item">
                                        <a href="https://www.zonapagos.com/t_Polaniainmobiliaria/pagos.asp" target="_blank" class="p-0 ml-3"> <img src="./images/logopse.png" alt="" class="img-responsive mx-auto d-block logo_pse" style="width:3.8em;"></a>
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
                                <li class="correo" ><a href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"><i class="far fa-envelope mr-2 icono_correo"></i><?php echo $datos_contacto['correo']['correo'] ?></a></li>

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
                    <a href="index.php" class="">
                        <img src="./images/polania_color.png" alt="">
                    </a>
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
                                <li class="item <?php if ($page == 'inicio') {
                                                    echo 'current';
                                                } ?>"><a href="./index.php">Inicio</a></li>
                                <li class="item <?php if ($page == 'quienes') {
                                                    echo 'current';
                                                } ?>"><a href="./quienes-somos.php">Quiénes Somos</a></li>
                                    <li class="item <?php if ($page == 'servicios') {
                                                        echo 'current';
                                                    } ?>"><a href="./servicio.php">Servicios</a></li>
                                <li class="item <?php if ($page == 'inmuebles') {
                                                    echo 'current';
                                                } ?>"><a href="./inmuebles.php?">Inmuebles</a></li>
                                <li class="nav-item dropdown item">
                                    <a class="nav-link dropdown-toggle" style="padding: 16px 35px 16px;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
                                    <div class="dropdown-menu menu_icon">
                                        <a id="hover" class="dropdown-item" style="color: black" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=108&tipo=2" target="_blanck"><i class="fas fa-home iconos"></i> Arrendatarios</a>
                                        <a id="hover" class="dropdown-item" style="color: black" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=108&tipo=1" target="_blanck"><i class="fas fa-key iconos"></i> Propietarios</a>
                                        <a id="hover" class="dropdown-item" style="color: black" href=" https://www.zonapagos.com/t_Polaniainmobiliaria/pagos.asp" target="_blanck" ><i class="fas fa-hand-holding-usd iconos"></i> Pagos PSE</a>
                                    </div>
                                </li>
                                <li class="item <?php if ($page == 'noticias') {
                                                    echo 'current';
                                                } ?>"><a href="./noticia.php">Notas de Interés</a></li>
                                <li class="item <?php if ($page == 'contacto') {
                                                    echo 'current';
                                                } ?>"><a href="./contacto.php">Contáctenos</a></li>
                                <li>
                                    <a href="https://www.zonapagos.com/t_Polaniainmobiliaria/pagos.asp" target="_blank" class="p-0 pt-2"><img src="./images/logopse.png" alt="" class="img-responsive mx-auto d-block logo2_pse" style="width:3.5em;"></a>
                                </li>
                            </ul>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
    </header>