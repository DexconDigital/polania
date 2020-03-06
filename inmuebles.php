<?php $page = 'inmuebles';
include 'include/header.php';
require 'controllers/inmueblesController.php'; ?>
<!-- Contenido -->
<!-- Cabezera -->
<section id="hero" class="page-title" style="background-image:url(images/banner_inmuebles.jpg);">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="col-10 offset-1">
            <div class="pull-left">
                <h1>Inmuebles</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Inmuebles</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Formulario de busqueda -->
<?php include 'include/buscador.php'; ?>
<!-- Lista de inmuebles -->
<section id="inmuebles" class="mb-5 col-lg-offset-1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Lista de inmuebles  -->

                    <div class="col-12 col-lg-11 col-md-10 row justify-content-start" id="propiedades_destacadas">
                        <!-- propiedades -->
                        <?php
                        if (is_array($api)) {
                            listar_inmuebles($api['Inmuebles']);
                        } else {
                            echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINADOR -->
        <div class="col-12 col-lg-11 text-center">
            <?php if (is_array($api)) : ?>
                <ul class="pagination mt-4 align-items-end justify-content-center">
                    <?php if ($paginator->getPrevUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                    <?php endif; ?>
                    <?php foreach ($paginator->getPages() as $page) : ?>
                        <?php if ($page['url']) : ?>
                            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($paginator->getNextUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>
        <!-- PAGINADOR -->
    </div>
</section>


<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>
<!-- buscador -->
<?php include 'include/archivos_footer.php' ?>


</body>

</html>