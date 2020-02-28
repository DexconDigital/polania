<?php $page = 'inmuebles';
include 'include/header.php';
$codigo = $_GET["co"]; 
$ch = curl_init();
$headers =  'Authorization:Cj0p24oe4NvB9Cu3npAh9DRlNN0kfAeorYo3TKMh-933';
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $codigo . '');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);
?>
<!-- Contenido -->
<!-- cabezera -->
<section class="page-title" style="background-image:url(images/banner_inmuebles.png">
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
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side / Property Detail-->
            <div class="content-side col-lg-8 offset-lg-0 col-md-10 offset-md-1 col-sm-12 col-xs-12">
                <div class="property-detail">
                    <div class="inner-box">
                        <!--Upper Box-->
                        <div class="upper-box">
                            <h2 id="tipo_inmueble"></h2>
                            <div class="location" id="ubicacion"></div>
                            <ul class="post-detail">
                                <li class="p-0" id="codigo">Codigo: </li>
                                <!-- <li id ="tipo_inmueble"><span class="icon fa fa-calendar"></span></li> -->
                                <!-- <li id ="precio"><span class="icon fa fa-calendar"></span></li>
                                <li id ="administracion"><span class="icon fa fa-map-marker"></span></li>
                                <li id ="areaConstruida"><span class="icon fa fa-map-marker"></span></li>
                                <li id ="areaTotal"><span class="icon fa fa-map-marker"></span></li>
                                <li id ="alcobas"><span class="icon fa fa-map-marker"></span></li>
                                <li id ="banos"><span class="icon fa fa-map-marker"></span></li> -->
                            </ul>
                        </div>

                        <!--Carousel Box-->
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Atras</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <ul class="row align-items-center pr-0">
                                    <li class="col-sm-12 col-xl-auto mr-auto d-flex justify-content-center"><a class="btn btn-primary boton-azul" style="font-size:1.8rem;" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=<?php echo $codigo ?>" target="_blank">Imprimir Ficha</a></li>
                                    <li class="col-6 col-md-auto ml-auto m-top">Compartir por: </li>
                                    <li class="col-2 col-md-auto m-top"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.grrfincaraiz.com.co%2Fgrr%2Fdetalle-inmueble.php%3Fco%3D<?php echo $codigo; ?>" target="_blank"><img src="images/facebook.png" alt="" style="height: 36px;"></a></li>
                                    <li class="col-2 col-md-auto m-top"><a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.grrfincaraiz.com.co%2Fgrr%2Fdetalle-inmueble.php%3Fco%3D' . $codigo . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><img src="images/twitter.png" alt="" style="height: 36px;"></i></a></li>
                                    <li class="col-2 col-auto d-md-none m-top"><a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.grrfincaraiz.com.co/grr/detalle-inmueble.php?co%3d' . $codigo ?>" target="_blank"><img src="images/whatsapp.png" alt="" style="height: 36px;"></a></li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="pt-4">Descripcion</h3>
                        <div class="text">
                            <p id="descripcion"></p>
                        </div>

                        <h4>Informacion</h4>
                        <!--List Columns-->
                        <div class="list-columns">
                            <div class="row clearfix">
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    <ul class="list-style-three">
                                        <li id="gestion">Gestion: </li>
                                        <li id="precio">Precio: $</li>
                                        <li id="administracion">Administracion: </li>
                                        <li id="areaConstruida">Area Construida: </li>
                                        <li id="areaTotal">Area Total: </li>
                                        <li id="alcobas">Alcobas: </li>
                                        <li id="banos">Baños: </li>
                                        <li id="garaje">Garaje: </li>
                                        <li id="edad_inmueble">Antiguedad Inmueble: </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contenedor_externas">
                            <h4>Caracteristicas Externas</h4>
                            <!--List Columns-->
                            <div class="list-columns">
                                <div class="row clearfix">
                                    <div class="column col-12">
                                        <ul class="list-style-three" id="lista_caracteristicas_externas">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contenedor_internas">
                            <h4>Caracteristicas internas</h4>
                            <!--List Columns-->
                            <div class="list-columns">
                                <div class="row clearfix">
                                    <div class="column col-12">
                                        <ul class="list-style-three" id="lista_caracteristicas_internas">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>Ubicacion</h4>
                        <!--Property Map Section-->
                        <div class="property-map-section">
                            <!--Map Outer-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.989004319481!2d-74.08263218523801!3d4.595991996661083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f990631614bff%3A0xbceb0a0b1545fc54!2zQ3JhLiAxMCAjNy0zLCBCb2dvdMOh!5e0!3m2!1ses-419!2sco!4v1557225039574!5m2!1ses-419!2sco" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!--Sidebar Side-->
                </div>
            </div>
            <div class="sidebar-side col-lg-4 offset-lg-0 col-md-10 offset-md-1 col-sm-12 col-xs-12">
                <aside class="sidebar" >
                    <!-- Properties Posts -->
                    <div class="sidebar-widget properties-posts" id="p_similares">
                        <div class="sidebar-title">
                            <h3 class="text-md-center">Propiedades similares</h3>
                            <div class="separator mx-auto"></div>
                        </div>
                        <!-- Lista de propiedades similares -->
                    </div>

                </aside>
            </div>
            <!--End Sidebar Side-->
        </div>
    </div>
</div>
</div>
<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>
<?php echo "<script> var codigoInmueble ='" . $codigo . "';</script>"; ?>
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/detalle_inmueble.js"></script>
<script src="conexion_api/modelo_inmueble.js"></script>
<script src="conexion_api/similares.js"></script>
<!-- <script src="conexion_api/similares.js"></script> -->
</body>

</html>