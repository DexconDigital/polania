<?php $page = 'inicio';
include 'include/header.php'; ?>
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
                <h2>Nuestros servicios</h2>
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
                                                <h3><a href="quienes-somos.php#servicios" style="color:inherit;">ARRIENDOS</a></h3>
                                            </div>
                                            <a class="purchased" href="quienes-somos.php#servicios">
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
                                                <h3><a href="quienes-somos.php#servicios" style="color:inherit;">VENTAS</a></h3>
                                            </div>
                                            <a class="purchased" href="quienes-somos.php#servicios">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="house-block col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/asesoria.jpg" alt="imagen referente a asesorias">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3><a href="quienes-somos.php#servicios" style="color:inherit;">ASESORÍAS JURÍDICAS</a></h3>
                                            </div>
                                            <a class="purchased" href="quienes-somos.php#servicios">Ver más</a>
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
<section id="destacados">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="sec-title centered">
                <div class="title">Nuestras propiedades destacadas en Venta y Arriendo</div>
                <h2>Propiedades Destacadas</h2>
                <div class="separator"></div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 pl-0 pr-0" id="propiedades_destacadas">
                        <div class="property-block col-12 col-sm-6 col-lg-4 col-xl-4">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="detalle-inmueble.php?co=''"><img src="images/no_image.png" alt=""></a>
                                    <div class="sale">Arriendo</div>
                                    <div class="price">$ 1.000.000 </div>
                                </div>
                                <div class="lower-content">
                                    <div class="upper-box" style="min-height: 9.3rem;">
                                        <h3><a href="images/no_image.png">Apartamento</a></h3>
                                        <div class="location"><span class="icon flaticon-location-pin"></span> Ciudad - Barrio</div>
                                        <div class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum ea sequi ex nemo officiis. Voluptate ex provident rem, laudantium eveniet optio ut repudiandae quam id sequi mollitia. Commodi, accusantium dolorem!</div>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <ul class="row justify-content-center">
                                            <li class="col-auto"><span class="icon flaticon-squares"></span>3 m<sup>2</sup></li>
                                            <li class="col-auto"><span class="icon flaticon-bed-1"></span>3</li>
                                            <li class="col-auto"><span class="icon flaticon-bathtube-with-shower"></span>2</li>
                                            <li class="col-auto"><span class="icon flaticon-garage"></span>2</li>
                                            <li class="col-auto">Codigo: 435</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-block col-12 col-sm-6 col-lg-4 col-xl-4">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="detalle-inmueble.php?co=''"><img src="images/no_image.png" alt=""></a>
                                    <div class="sale">Arriendo</div>
                                    <div class="price">$ 1.000.000 </div>
                                </div>
                                <div class="lower-content">
                                    <div class="upper-box" style="min-height: 9.3rem;">
                                        <h3><a href="images/no_image.png">Apartamento</a></h3>
                                        <div class="location"><span class="icon flaticon-location-pin"></span> Ciudad - Barrio</div>
                                        <div class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum ea sequi ex nemo officiis. Voluptate ex provident rem, laudantium eveniet optio ut repudiandae quam id sequi mollitia. Commodi, accusantium dolorem!</div>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <ul class="row justify-content-center">
                                            <li class="col-auto"><span class="icon flaticon-squares"></span>3 m<sup>2</sup></li>
                                            <li class="col-auto"><span class="icon flaticon-bed-1"></span>3</li>
                                            <li class="col-auto"><span class="icon flaticon-bathtube-with-shower"></span>2</li>
                                            <li class="col-auto"><span class="icon flaticon-garage"></span>2</li>
                                            <li class="col-auto">Codigo: 435</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-block col-12 col-sm-6 col-lg-4 col-xl-4">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="detalle-inmueble.php?co=''"><img src="images/no_image.png" alt=""></a>
                                    <div class="sale">Arriendo</div>
                                    <div class="price">$ 1.000.000 </div>
                                </div>
                                <div class="lower-content">
                                    <div class="upper-box" style="min-height: 9.3rem;">
                                        <h3><a href="images/no_image.png">Apartamento</a></h3>
                                        <div class="location"><span class="icon flaticon-location-pin"></span> Ciudad - Barrio</div>
                                        <div class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum ea sequi ex nemo officiis. Voluptate ex provident rem, laudantium eveniet optio ut repudiandae quam id sequi mollitia. Commodi, accusantium dolorem!</div>
                                    </div>
                                    <div class="lower-box clearfix">
                                        <ul class="row justify-content-center">
                                            <li class="col-auto"><span class="icon flaticon-squares"></span>3 m<sup>2</sup></li>
                                            <li class="col-auto"><span class="icon flaticon-bed-1"></span>3</li>
                                            <li class="col-auto"><span class="icon flaticon-bathtube-with-shower"></span>2</li>
                                            <li class="col-auto"><span class="icon flaticon-garage"></span>2</li>
                                            <li class="col-auto">Codigo: 435</li>
                                        </ul>
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
                    <h2> Últimas noticias</h2>
                    <div class="separator"></div>
                    <div class="col-12 d-flex">
                        <div class="col-4 mt-5">
                            <a href="#">
                                <div class="card">

                                    <div class="imagen position-relative">
                                        <img src="images/no_image.png" class="card-img-top img_noticia" alt="...">
                                        <div class="blanco font-weight-bold animacion_ver_mas col-12 p-0 text-center"> Haz click para ver más </div>
                                    </div>

                                    <div class="card-body">

                                        <h2>Últimas Ofertas</h2>

                                        <h5 class="mb-3 text-muted"><span class="color_icono icon fas fas fa-calendar-alt"></span> 2/03/2020</h5>

                                        <p class="position-relative pt-3">Carta de Presentación</p>

                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-4 mt-5">
                            <a href="#">
                                <div class="card">

                                    <div class="imagen position-relative">
                                        <img src="images/no_image.png" class="card-img-top img_noticia" alt="...">
                                        <div class="blanco font-weight-bold animacion_ver_mas col-12 p-0 text-center"> Haz click para ver más </div>
                                    </div>

                                    <div class="card-body">

                                        <h2>Últimas Ofertas</h2>

                                        <h5 class="mb-3 text-muted"><span class="color_icono icon fas fas fa-calendar-alt"></span> 2/03/2020</h5>

                                        <p class="position-relative pt-3">Carta de Presentación</p>

                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-4 mt-5">
                            <a href="#">
                                <div class="card">

                                    <div class="imagen position-relative">
                                        <img src="images/no_image.png" class="card-img-top img_noticia" alt="...">
                                        <div class="blanco font-weight-bold animacion_ver_mas col-12 p-0 text-center"> Haz click para ver más </div>
                                    </div>

                                    <div class="card-body">

                                        <h2>Últimas Ofertas</h2>

                                        <h5 class="mb-3 text-muted"><span class="color_icono icon fas fas fa-calendar-alt"></span> 2/03/2020</h5>

                                        <p class="position-relative pt-3">Carta de Presentación</p>

                                    </div>

                                </div>
                            </a>
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
                    <div class="col-sm-12 col-lg-3 col-md-6"><img src="images/protecsa.png" alt="" class=""></div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php include 'include/footer.php'; ?>
<!-- fin footer -->
<!-- Conexion api -->
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/buscador.js"></script>
<!-- <script src="conexion_api/modelo_inmueble.js"></script> -->
<!-- <script src="conexion_api/inmuebles_destacados.js"></script> -->
</body>

</html>