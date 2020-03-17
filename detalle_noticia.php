<?php $page = 'noticias';
include 'include/header.php';
require_once('controllers/detalle_noticiasController.php'); ?>
<!-- Contenido -->
<!-- Cabezera -->
<!-- Fin cabezera -->
<section class="mt-5 mb-5">
    <div class="col-12">
        <div class="sec-title centered">
            <div class="title">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Entradas recientes
                    </font>
                </font>
            </div>
            <h2>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;"><?php echo $nombre ?></font>
                </font>
            </h2>
            <div class="separator"></div>
        </div>
    </div>
    <div class="container  justify-content-center">
        <div class="col-12">
            <div class="p-0">
                <div class="col-12">
                    <img id="cont_img_noticia" class="img-fluid-top w-30 h-30 mr-4 mb-4" src="<?php echo $ruta_imagen ?>" alt="">
                    <p class="text-justify">
                        <?php echo $noticia ?>
                    </p>
                </div>
            </div>
            <div class="container col-12 text-center mb-4">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-5 col-md-5 col-12">
                        <span class="text-muted"> Publicado el: <?php echo $fecha_complete; ?></span>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <?php if ($ruta_archivo != $comparador . "") {
                            echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                        } ?>

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