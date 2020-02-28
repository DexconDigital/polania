<?php $page = 'clientes';
include 'include/header.php'; ?>
<!-- Contenido -->
<!-- Cabezera -->
<section class="page-title" style="background-image:url(images/banner.png">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="col-10 offset-1">
            <div class="pull-left">
                <h1>Clientes</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Clientes</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Fin cabezera -->
<!-- Cards de categorias -->
<section id="categorias">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-md-10 col-lg-10">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="arrendatarios.php">
                            <div class="card mt-4">
                                <img src="images/Arrendatarios-cliente.png" class="card-img-top mt-4" alt="imagen referente a arrendatarios">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Arrendatarios</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="propietario.php">
                            <div class="card mt-4">
                                <img src="images/propietarios-cliente.png" class="card-img-top mt-4" alt="imagen referente a arrendatarios">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Propietarios</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <a href="https://gateway2.tucompra.com.co/sites/grrfincaraiz" target="_blank">
                        <div class="card mt-4">
                            <img src="images/logopsecliente.png" class="card-img-top mt-4" alt="">
                            <div class="card-body">
                                <h3 class="card-title text-center">Pagos PSE</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>
</body>
</html>