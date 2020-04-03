<?php $page = 'inmuebles';
require 'controllers/detalleInmuebleController.php';
?>
<head>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
<!-- Datos para compartir por facebook -->
<meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'https://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>" />
    <meta property="og:title" content="<?php echo $tipo_inmueble.' en '.$gestion;?>" />
    <!-- <meta property="og:description" content="Inmueble ubicado en: <?php echo $barrio.', '. $ciudad.', '.$r['depto'];?> " /> -->
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $barrio.', '. $ciudad.', '.$r['depto'];?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto'];?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <!-- fin de datos para compartir por facebook -->
<?php 
include 'include/header.php';
?>
</head>
<body>
<style>
    #map {
        height: 300px;
        z-index: 20;
    }

    .leaflet-control {
        z-index: 200;
    }

    .leaflet-control {
        z-index: 20;
    }
</style>
<link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
    <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
</span>
<!-- Contenido -->

<link rel="stylesheet" href="./css/carousel.tamanos.css">
<link rel="stylesheet" href="./css/slick.css">
<link rel="stylesheet" href="./css/slick-theme.css">
<!-- cabezera -->
<section class="page-title" style="background-image:url(images/banner_detalle_inmueble.jpg);">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="col-10 offset-1">
            <div class="pull-left">
                <h1>Detalle Inmueble</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Detalle Inmueble</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Detalle inmueble -->
<div class="mt-5 mb-5">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side / Property Detail-->
            <div class="content-side col-lg-8 offset-lg-0 col-md-10 offset-md-1 col-sm-12 col-xs-12">
                <div class="property-detail">
                    <div class="inner-box">
                        <!--Upper Box-->
                        <div class="upper-box ">
                            <h2 id="tipo_inmueble"><?php echo $r['Tipo_Inmueble'] . ' / ' . $r['Gestion']; ?></h2>
                            <span><?php if ($r['Gestion'] == 'Arriendo') {
                                        echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                    } else if ($r['Gestion'] == 'Venta') {
                                        echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                    } else {
                                        echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                    }
                                    ?></span>
                            <div class="location" id="ubicacion"><span style="color: #F26336" class="icon fa fa-map-marker"></span> <?php echo $r['barrio'] . ', ' . $r['ciudad']; ?></div>
                            <ul class="post-detail">
                                <li class="p-0" id="codigo">Codigo: <?php echo $co; ?></li>
                                <li id="tipo_inmueble"><span style="color: #F26336" class="icon flaticon-squares"></span><?php echo $r['AreaConstruida'] . 'm<sup>2'; ?></li>
                                <li id="precio"><span style="color: #F26336" class="icon flaticon-bathtube-with-shower"></span> <?php echo $r['banos']; ?></li>
                                <li id="administracion"><span style="color: #F26336" class="icon flaticon-bed-1"></span><?php echo  $r['alcobas']; ?></li>
                                <li id="areaConstruida"><span style="color: #F26336" class="icon flaticon-garage"></span> <?php echo $r['garaje']; ?></li>
                            </ul>
                        </div>

                        <!-- main slider carousel items -->
                        <section class="mt-3" id="slide-detalle">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 0; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <section class="vertical-center-4 slider" id="miniaturas">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 0; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <ul class="row align-items-center pr-0">
                                <li class="col-sm-12 col-xl-auto mr-auto d-flex justify-content-center btn_ficha"><a class="btn boton-azul" style="font-size:1.8rem; color:white;" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=108-<?php echo $co ?>" target="_blank">Imprimir Ficha</a></li>
                                <li class="col-6 col-md-auto ml-auto m-top font-weight-bold">Compartir por: </li>
                                <li class="col-2 col-md-auto m-top"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.polania.co%2F%2Fdetalle-inmueble.php%3Fco%3D<?php echo $co; ?>-108" target="_blank"><img src="images/facebook.png" alt="" style="height: 30px;"></a></li>
                                <li class="col-2 col-md-auto m-top"><a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.polania.co%2F%2Fdetalle-inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><img src="images/twitter.png" alt="" style="height: 30px;"></i></a></li>
                                <li class="col-2 col-md-auto m-top"><a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.polania.co/detalle-inmueble.php?co%3d' . $co ?>" target="_blank"><img src="images/whatsapp.png" alt="" style="height: 36px;"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion mt-5 mb-5" id="accordionExample">
                        <!-- descricion -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4 class="texto_detalle enlaces">Descripción</h4>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body text-justify">
                                    <p><?php echo  $r['descripcionlarga']; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- caracteristicas basicas  -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h4 class="texto_detalle enlaces"> Características Básicas</h4>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body text-justify">
                                    <div class="ml-3 container">
                                        <ul class="">
                                            <li class="biñeta">Gestion: <?php echo $r['Gestion'] ?></li>
                                            <li class="biñeta">Precio: <?php if ($r['Gestion'] == 'Arriendo') {
                                                                            echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                                                        } else if ($r['Gestion'] == 'Venta') {
                                                                            echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                                                        } else {
                                                                            echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                                                        }
                                                                        ?></li>
                                            <?php if ($administracion != "") {
                                                echo '<li class="biñeta">Administración: $' . $administracion . '</li>';
                                            } ?>
                                            <li class="biñeta">Área Construida: <?php echo $area_construida; ?>m<sup>2<sup> </li>
                                            <li class="biñeta">Área Privada: <?php echo $area_privada; ?>m<sup>2<sup> </li>
                                            <li class="biñeta">Alcobas: <?php echo $alcobas; ?> </li>
                                            <li class="biñeta">Baños: <?php echo $banios; ?></li>
                                            <li class="biñeta">Garaje: <?php echo $garaje; ?> </li>
                                            <li class="biñeta">Antiguedad Inmueble: <?php echo $edad_inmueble; ?> años</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Características Internas -->
                        <div class="card">
                            <div class="card-header" id="headingfour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                        <h4 class="texto_detalle enlaces">Características Internas</h4>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php
                                    if (count($r['caracteristicasInternas']) > 0) {
                                        echo
                                            ' <div class="container"> <ul>';
                                        for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                            $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                            echo '<li class="ml-3 biñeta">' . $caracteristicas . '</li>';
                                        }
                                        echo  '</ul>
                                        </div>
                            ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- caracteristicas esternas -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h4 class="texto_detalle enlaces">Caracteristicas Externas</h4>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php
                                    if (count($r['caracteristicasExternas']) > 0) {
                                        echo
                                            '<div class="container"> <ul>';
                                        for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                            $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                            echo '<li class="ml-3 biñeta">' . $caracteristicas . '</li>';
                                        }
                                        echo  '</ul>
                                </div>
                            ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- caracteristicas alrededores -->
                        <div class="card">
                            <div class="card-header" id="headingfive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        <h4 class="texto_detalle enlaces">Caracteristicas Alrededores</h4>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php
                                    if (count($r['caracteristicasAlrededores']) > 0) {
                                        echo
                                            '<div class="container"> <ul>';
                                        for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                            $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                            echo '<li class="ml-3 biñeta">' . $caracteristicas . '</li>';
                                        }
                                        echo  '</ul>
                                </div>
                            ';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- video -->
                        <div class="card">
                            <div class="card-header" id="headingsix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        <h4 class="texto_detalle enlaces">Video</h4>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php if ($r['video'] != "") {
                                        echo
                                            '
                                    <div class="card contenedor_interna">
                                <div class="card-body">
                                <h4 class="texto_detalle">Video</h4>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe class="w-100" height="409" src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h4 class="texto_detalle mb-3 enlaces">Mapa de Ubicación</h4>
                        <!--Property Map Section-->
                        <div class="card mapa_tamaño">
                            <div class="">
                                <div id="map" class="w-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Sidebar Side-->
            </div>

            <div class="sidebar-side col-lg-4 offset-lg-0 col-md-10 offset-md-1 col-sm-12 col-xs-12">
                <aside class="sidebar">
                    <!-- Properties Posts -->
                    <div class="sidebar-widget properties-posts" id="p_similares">
                        <div class="sidebar-title">
                            <h3 class="text-center"> Contacto con el asesor</h3>
                            <div class="separator mx-auto"></div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="col-9">
                                <img src="<?php echo $asesor['FotoAsesor']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-5">
                            <div class="col-9 detalle_asesor">
                                <ul>
                                    <li><span class="color_icono icon fas fas fa-user mr-2"></span> <?php echo $asesor['ntercero']; ?></li>
                                    <li><span class="color_icono icon fas fas fa-phone mr-2"></span><a class="acesor_enlace" href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a></li>
                                    <li><span class="color_icono icon fas fas fa-envelope mr-2"></span> <a class="acesor_enlace" href="mailto:<?php echo $asesor['correo']; ?>"><?php echo $asesor['correo']; ?></a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- Lista de propiedades similares -->
                        <div class="col-12 mt-5">
                            <div class="">
                                <div class="sidebar-title">
                                    <h3 class="text-center"> Propiedades similares</h3>
                                    <div class="separator mx-auto"></div>

                                    <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <!--End Sidebar Side-->
        </div>
    </div>
</div>
</div>
</div>
<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>
<script src="js/script.js"></script>
<!-- <?php echo "<script> var codigoInmueble ='" . $co . "';</script>"; ?> -->
<script src="js/jquery.min.js"></script>
<script src="js/slick.min.js"></script>
<script>
    $('#slide-detalle').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '#miniaturas'
    });
    $('#miniaturas').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '#slide-detalle',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        variableWidth: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });
</script>
<!-- mapa del inmueble -->
<script src="mapas/leaflet.js" crossorigin=""></script>
<script>
    var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

    L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
    }).addTo(map);

    L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
        .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
        .openPopup();
</script>
</body>

</html>