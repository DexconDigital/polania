<?php $page = "Lista de Noticias";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$id = $_GET["id"];
$con = Conect();
$qry = "SELECT * FROM noticias where id ='$id' and id_inmobiliaria2 = 12";
$sql = mysqli_query($con, $qry);
$res =  mysqli_fetch_array($sql);
?>
<style>
    .color_boton {
        background-color: #002230;
        color: white;

    }

    .color_boton:hover {
        color: white;
    }

    .conct_botton {
        text-align: center;

    }

    .container {
        background-color: white;
    }

    input[type]:focus {
        border-color: #B58D10;
         !important;
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px #B58D10;
         !important;
        outline: 0 none;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9" style=" margin-top: 27px;">
            <h2 class="text-center">Editar Noticia</h2>
            <form method="post" action="uptade.php" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $res[0]; ?>">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Titulo Noticia</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $res[1]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion Corta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $res[2]; ?>">
                        <small id="tituloHepl" class="form-text text-muted">Titulo principal de la publicación</small>
                    </div>
                </div>
                <div class="form-group row mb-4 ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Url del Video</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="url" id="url" value="<?php echo $res[7]; ?>">
                        <small id="tituloHepl" class="form-text text-muted">Url del video en Youtube</small>
                    </div>
                </div>
                <div class="form-group row mb-4 ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Instagram Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="insta_url" id="insta_url" value="<?php echo $res[8]; ?>">
                        <small id="tituloHepl" class="form-text text-muted">Url de la noticia en Instagram</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Noticia:</label>
                    <div class="col-sm-10">
                        <textarea name="noticia" id="noticia"><?php echo $res[5]; ?></textarea>
                        <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato </small> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Imagen Actual</label>
                    <div class="col-sm-10">
                        <img src="<?php echo $res[3]; ?>" alt="" width="200px" height="auto">
                    </div>
                    <div class="col-sm-10 offset-2">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                        <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB de peso y tamaño de 900 pixeles de Ancho por 500 pixeles de Alto</small> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Archivo Actual</label>
                    <label for="" class="col-sm-10 col-form-label"><?php echo $res[4]; ?></label>
                    <div class="col-sm-8 offset-2">
                        <input type="file" class="form-control-file" name="archivo" id="archivo" accept="application/pdf">
                        <small id="tituloHepl" class="form-text text-muted"> Ingrese una Archivo formato PDF que no supere las 2MB de peso</small> 
                    </div>
                </div>
                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2 conct_botton">
                        <button class="btn color_boton">Actualizar Noticia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/validacion.js"></script>
<?php include 'layout/layoutFooter.php'; ?>