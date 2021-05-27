<?php $page = 'noticias';
include 'include/header.php';
require 'controllers/noticiasController.php'; ?>
<!-- Contenido -->
<!-- Cabezera -->
<section class="page-title" style="background-image:url(images/banner_blog.jpg);">
    <div class="container-fluid">
        <div class="row">
        </div>
        <div class="col-10 offset-1">
            <div class="pull-left">
                <h1>Notas de Interés</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li>Notas de Interés</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Fin cabezera -->
<section id="ultimas_noticias">
    <div class="container-fluid">
        
            <div class="col-12">
                <div class="sec-title centered">
                    <div class="col-12 d-flex justify-content-center flex-wrap">
                        
                            <?php if (isset($noticias_array)) {
                                modelo_noticia($noticias_array);
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
</section>
<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>
</body>

</html>