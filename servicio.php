<?php $page = 'servicios';
include 'include/header.php'; ?>
<!-- Contenido -->
<!-- Cabezera -->
<section class="page-title" style="background-image:url(images/banner_servicios5.jpg);">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="col-10 offset-1">
            <div class="pull-left">
                <h1>Servicios</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Servicios</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Fin cabezera -->
<section class="services-section style-two" id="servicios">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="sec-title centered">
                <div class="title">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Servicios íntegros, eficientes y responsables
                        </font>
                    </font>
                </div>
                <h2>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nuestros servicios</font>
                    </font>
                </h2>
                <div class="separator"></div>
            </div>
        </div>
        <!--Sec Title-->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 offset-1 ml-0 ">
                <div class="row d-flex justify-content-center">
                    <!--Services Block-->
                    <div class="services-block col-lg-4 col-md-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-sign"></span>
                            </div>
                            <h3 class="mb-1"><a href="property-detail.html">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit; color:#F04F36">Arriendos</font>
                                    </font>
                                </a></h3>
                            <div class="text mt-2 text-left">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <ul style="list-style: square;">
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['arriendos']['parrafos'][0] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['arriendos']['parrafos'][1] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['arriendos']['parrafos'][2] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['arriendos']['parrafos'][3] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['arriendos']['parrafos'][4] ?>
                                            </li>
                                            <li style="list-style: square;" class="mt-2">
                                                <?php echo $texto_servicios['arriendos']['parrafos'][5] ?>
                                            </li>

                                        </ul>
                                    </font>
                                </font>
                            </div>
                        </div>
                    </div>

                    <div class="services-block col-lg-4 col-md-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-tags"></span>
                            </div>
                            <h3><a href="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit; color:#F04F36">Ventas</font>
                                    </font>
                                </a></h3>
                            <div class="text text-left">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <ul>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['ventas']['parrafos'][0] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['ventas']['parrafos'][1] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['ventas']['parrafos'][2] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['ventas']['parrafos'][3] ?>
                                            </li>
                                            <div class="" style="margin-bottom: 50px;">
                                            </div>
                                        </ul>
                                    </font>
                                </font>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-lg-4 col-md-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="fas fa-gavel"></span>
                            </div>
                            <h3><a href="property-detail.html">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit; color:#F04F36">Asesorías Jurídicas</font>
                                    </font>
                                </a></h3>
                            <div class="text mt-2 text-left">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <ul>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['asesorias']['parrafos'][0] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['asesorias']['parrafos'][1] ?>
                                            </li>
                                            <li style="list-style: square;">
                                                <?php echo $texto_servicios['asesorias']['parrafos'][2] ?>
                                            </li>
                                            <div class="" style="margin-bottom: 208px;">
                                            </div>
                                        </ul>
                                    </font>
                                </font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Services Block-->

        </div>
    </div>
</section>
<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>
</body>

</html>