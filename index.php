<?php $page = 'inicio';
require 'controllers/indexController.php';
require 'controllers/noticiasController.php';
require 'variables/metaEtiquetas.php';?>


<head>
    
</head>
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
require 'variables/variables.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Stylesheets -->
    <link href="./variables/variable.php" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap3.css">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style2.css">
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
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
    </header>


<!-- slide de imagenes -->
<main id="hero">
    <div id="carouselHero" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide_2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide_3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselHero" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
        <a class="carousel-control-next" href="#carouselHero" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Atras</span>
        </a>
        <!-- <div class="overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 offset-md-3 text-center text-md-center">
                        <h1 class="font-weight-bold">GRR FINCA RAIZ</h1>
                        <p class="d-none d-md-block">¡El inmueble que quieres está aqui!
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</main>
<!-- slide de imagenes fin -->
<!-- Busqueda -->
<?php include 'include/buscador.php'; ?>
<!-- fin formulario -->
<!-- Servicios -->
<section id="services" class="houses-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="sec-title centered">
                <div class="title">Servicios íntegros, eficientes y responsables</div>
                <h2>Clientes</h2>
                <div class="separator"></div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-10 offset-1 pl-0 pr-0">
                        <div class="house-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/arriendos.jpg" alt="imagen referente a arriendos">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3><a href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=108&tipo=2" target="_blanck" style="color:inherit;">ARRENDATARIOS</a></h3>
                                            </div>
                                            <a class="purchased" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=108&tipo=2" target="_blanck">
                                                Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="house-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/ventas.jpg" alt="Imagen referente a ventas">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3><a href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=108&tipo=1" target="_blanck" style="color:inherit;">PROPIETARIOS</a></h3>
                                            </div>
                                            <a class="purchased" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=108&tipo=1" target="_blanck">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="house-block col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/pagos-en-linea.jpg" alt="imagen referente a asesorias">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3><a href="https://www.zonapagos.com/t_Polaniainmobiliaria/pagos.asp" target="_blanck" style="color:inherit;">PAGOS EN LÍNEA</a></h3>
                                            </div>
                                            <a class="purchased" href="https://www.zonapagos.com/t_Polaniainmobiliaria/pagos.asp" target="_blanck">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- propiedades destacadas -->
<!-- <section id="destacados">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="sec-title centered">
                <div class="title">Nuestras propiedades destacadas en Venta y Arriendo</div>
                <h2>Propiedades Destacadas</h2>
                <div class="separator"></div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-10 row justify-content-center offset-md-1 pl-0 pr-0" id="propiedades_destacadas">
                        <?php
                        if (is_array($api)) {
                            inmuebles_destacados($api);
                        } else {
                            echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section> -->

<section class="call-to-action" style="background-image:url(images/banner_frase.jpg)">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-column col-md-8 col-sm-12 col-xs-12">
                <h2>Encuentra tu inmueble ideal</h2>
                <div class="text">Necesitas
                    asesoría, no dudes en comunicarte con nosotros</div>
            </div>
            <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                <a href="contacto.php" class="btn btn-primary enviar">Contáctanos</a>
            </div>
        </div>
    </div>
</section>
<section id="ultimas_noticias">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="sec-title centered">
                    <div class="title">Entradas recientes</div>
                    <h2> Notas de Interés</h2>
                    <div class="separator"></div>
                    <div class="col-12 justify-content-center mt-5">
                        <div class="d-flex justify-content-center flex-wrap">
                            <?php if (isset($noticias_array)) {
                                modelo_ultimas_noticia($noticias_array);
                            } else {
                                echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="Aliados">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="sec-title centered">
                    <div class="title">Trabajamos con los mejores</div>
                    <h2>Nuestros aliados</h2>
                    <div class="separator"></div>
                </div>
            </div>
            <div class="col-11 pl-0 container">
                <!-- <div class="owl-carousel owl-theme responsiveSlide"> -->
                <div class="row justify-content-center d-flex align-items-center">
                    <div class="col-sm-12 col-lg-3 col-md-6"><img src="images/inmove.png" alt="" class="img-responsive"></div>
                    <div class="col-sm-12 col-lg-3 col-md-6"><img src="images/SIMI.png" alt="" class="img-responsive"></div>
                    <div class="col-sm-12 col-lg-3 col-md-6"><img src="images/metrocuadrado.png" alt="" class="img-responsive"></div>
                    <div class="col-sm-12 col-lg-3 col-md-6"><img src="images/zurichseguros.png" alt="" class=""></div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php include 'include/footer.php'; ?>
<!-- fin footer -->
<?php include 'include/archivos_footer.php' ?>
</body>

</html>