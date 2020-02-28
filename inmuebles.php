<?php $page = 'inmuebles';
if(isset($_GET["pag"])){
    $pagina = $_GET["pag"];
}else{
    $pagina=1;
}
    $ciudad=0;
    $barrio=0;
    $gestion=0;
    $tipo_inmueble=0;
    $alcobas =0;
    $banos=0;
    $min=0;
    $max=0;
    
if(isset($_GET["ci"]) || isset($_GET["bar"]) || isset($_GET["ge"]) || isset($_GET["in"]) 
    || isset($_GET["al"]) || isset($_GET["ban"]) || isset($_GET["min"]) || isset($_GET["max"]))
    {
        $ciudad= $_GET["ci"];
        $barrio= $_GET["bar"];
        $gestion= $_GET["ge"];
        $tipo_inmueble= $_GET["in"];
        $alcobas = $_GET["al"];
        $banos= $_GET["ban"];
        $min=$_GET["min"];
        $max=$_GET["max"];
    }
include 'include/header.php'; ?>
<!-- Contenido -->
<!-- Cabezera -->
<section id="hero" class="page-title" style="background-image:url(images/banner_inmuebles.png">
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
<section id="inmuebles" class="property-grid-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 pl-0 pr-0" id="inm">
                        <!-- Lista de inmuebles  -->
                        
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item previus"><a class="page-link" onclick="paginador('ant')">Atras</a></li>
                <li class="page-item next"><a class="page-link" onclick="paginador('sig')">Siguiente</a></li>
            </ul>
        </nav>
    </div>
</section>


<!-- fin contenido -->
<!-- footer -->
<?php include 'include/footer.php'; ?>
<!-- Convertir variables -->
<?php
 echo '<script>var ciudad = ' . $ciudad . '</script>';
 echo '<script>var barrio = ' . $barrio . '</script>'; 
 echo '<script>var gestion = ' . $gestion . '</script>'; 
 echo '<script>var tipo_inmueble = ' . $tipo_inmueble . '</script>'; 
 echo '<script>var alcobas = ' . $alcobas . '</script>'; 
 echo '<script>var banos = ' . $banos . '</script>'; 
 echo '<script>var min = ' . $min . '</script>'; 
 echo '<script>var max = ' . $max . '</script>'; 
 ?>
<!-- conexion_api -->
<?php echo "<script> var pagina ='" . $pagina . "';</script>"; ?>
<script src="conexion_api/buscador.js"></script>
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/modelo_inmueble.js"></script>
<script src="conexion_api/listarInmuebles.js"></script>

</body>

</html>