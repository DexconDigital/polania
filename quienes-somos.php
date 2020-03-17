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
            <div class="content-column col-12 col-md-11 pl-0 ml-0 d-flex flex-wrap align-items-center ">
                <div class="col-lg-6 col-md-12 col-12 text-quienes">
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
                                    <?php echo $texto_quienes_somos['quienes_somos']['parrafos'][0] ?><br><br>
                                    <?php echo $texto_quienes_somos['quienes_somos']['parrafos'][1] ?>
                                </font>
                            </font>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!--Image Column-->
                    <div class="image-column col-12  col-md-12 d-flex pr-0  aling-items-center text-center">
                        <img src="images/quienes_somos.jpg" alt="imagen que acompaña el quienes somos de la empresa." style="width:100%; height:100%;">
                    </div>
                </div>
            </div>

            <div class="content-column col-12 col-md-11  ml-0 d-flex flex-wrap align-items-center">
                <div class="col-lg-6 col-md-12 col-12 ">
                    <div class="image-column col-12  col-md-12 d-flex p-0 aling-items-center text-center">
                        <img src="images/valores.jpg" alt="imagen que acompaña el quienes somos de la empresa." style="width:100%; height:100%;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ">
                    <!-- Columna de mision y vision -->
                    <div class="content-column col-12 col-md-12 pr-0">
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
                    <div class="content-column col-12 col-md-12 pr-0">
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
<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>