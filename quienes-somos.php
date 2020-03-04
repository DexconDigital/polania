<?php $page = 'quienes';
include 'include/header.php'; ?>
<!-- Contenido -->
<!-- hero -->
<section class="page-title" style="background-image:url(images/banner_quienes_somos.jpg);">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="col-10 offset-1">
            <div class="pull-left">
                <h1>Quiénes somos</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Quiénes somos</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style>
    .bold-text {
        text-align: justify;

    }
</style>
<section class="about-section" style="background-image:url()">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!--Content Column-->
            <div class="content-column col-12 col-md-10 pl-0 pr-0 ml-0 d-flex align-items-center">
                <div class="col-6 pl-0">
                    <div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title">
                            <div class="title">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Acerca de Polania</font>
                                </font>
                            </div>
                            <h2>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Quiénes somos</font>
                                </font>
                            </h2>
                            <div class="separator"></div>
                        </div>
                        <div class="bold-text">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit; text-aling:justify;">
                                    <?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?><br>
                                    <?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?>
                                </font>
                            </font>
                        </div>
                    </div>
                </div>
                <div class="col-6 pr-0">
                    <!--Image Column-->
                    <div class="image-column col-12  col-md-12 d-flex pr-0  aling-items-center text-center">
                        <img src="images/quienes_somos.jpg" alt="imagen que acompaña el quienes somos de la empresa." style="width:100%; height:100%;">
                    </div>
                </div>
            </div>

            <div class="content-column col-12 col-md-11  ml-0 d-flex align-items-center">
                <div class="col-6  ">
                    <div class="image-column col-12  col-md-12 d-flex  aling-items-center text-center">
                        <img src="images/valores.jpg" alt="imagen que acompaña el quienes somos de la empresa." style="width:100%; height:100%;">
                    </div>
                </div>
                <div class="col-6 ">
                    <!-- Columna de mision y vision -->
                    <div class="content-column col-12 col-md-12">
                        <div class="inner-column">
                            <!--Sec Title-->
                            <div class="sec-title mt-4">
                                <h2>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Misión</font>
                                    </font>
                                </h2>
                                <div class="separator"></div>
                            </div>
                            <div class="bold-text">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <?php echo $texto_quienes_somos['mision']['parrafo'] ?>
                                    </font>
                                </font>
                            </div>
                        </div>
                    </div>
                    <div class="content-column col-12 col-md-12">
                        <div class="inner-column">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Visión</font>
                                    </font>
                                </h2>
                                <div class="separator"></div>
                            </div>
                            <div class="bold-text">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <?php echo $texto_quienes_somos['vision']['parrafo'] ?>
                                    </font>
                                </font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
            <div class="col-12 col-lg-11 offset-1 ml-0">
                <div class="row ">
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