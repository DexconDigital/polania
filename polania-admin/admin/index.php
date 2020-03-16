<?php $page = "Inicio | Administrador";
require_once("seguridad.php");
require_once("conexion.php");
?>
<?php
$user = $_SESSION["usuarioactual"];
// echo implode( $_SESSION) ; 
$con = Conect();
$qry = "SELECT * FROM usuarios where id_user ='$user'";
$sql = mysqli_query($con, $qry);
$usuario =  mysqli_fetch_array($sql);
$imagen_inicio = $usuario[0];
$page = "Inicio";
$nombre_inmobiliaria = 'Polania Inmobiliaria';
?>
<?php
$id_inmobiliria = 16;
$con = Conect();
$qry = "select * from noticias where id_inmobiliaria2 = '$id_inmobiliria' order by id DESC ";
$sql = mysqli_query($con, $qry);
?>
<?php
$qry = "SELECT * FROM `usuarios` WHERE id_user = '$user'";
$sql = mysqli_query($con, $qry);
$usuario =  mysqli_fetch_array($sql);
?>
<?php
$id_inmobiliria = 16;
$con = Conect();
$qry = "select * from noticias where id_inmobiliaria2 = '$id_inmobiliria' order by id DESC ";
$sql = mysqli_query($con, $qry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'layout/archivosheader.php'; ?>
    <script src="tinymce/tinymce.min.js"></script>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
    <script>
        function dataEdit($event) {
            var idnew = $($event).data('id');
            $.get("mi_ejemplo.php?id=" + idnew + "",
                function(data, status) {
                    var custom = JSON.parse(data);
                    $('#nom_edit').val(custom.nombre);
                    // $('#cel_edit').val(custom.telefono);
                    $('#descrip_edit').val(custom.descripcion);
                    $('#cor_asesor_edit').val(custom.correo);
                    $('#cargo_edit').val(custom.cargo);
                    tinymce.get('noticia_edit').setContent(custom.noticia);
                    $('#img_edit').prop('src', custom.imagen);
                    $('#archivo_edit').prop('src', custom.archivo);
                    $('#id_edit').val(idnew);
                });
        }
    </script>
</head>

<style>
    .form-control:focus{
    color: #495057;
    background-color: #fff;
    border-color: #f04f36;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(240, 79, 54, 0.51);
    }
</style>


<body onload="deshabilitaRetroceso()">

    <div id="position-relative d-flex align-items-center justify-content-center">
        <div id="particles-js" class="position-absolute div_parti">

        </div>

        <div id="segundo_div" class="dashboard clearfix position-absolute w-100 h-100 d-flex align-items-center justify-content-center">

            <ul class="tiles w-100">

                <div class="col1">

                    <!-- manual de usuario -->
                    <a href="archivo/Instructivo_Administracion_Asesores.pdf" download="Instructivo Administración Asesores.pdf">
                        <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="s-page" data-page-name="random-restored-page">
                            <div>
                                <p class="icon-arrow-right"></p>
                            </div>
                            <div>
                                <p>Descargar Manual de Usuario</p>
                            </div>
                        </li>
                    </a>
                    <!-- configuracion de usuario -->
                    <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#config">
                        <p class="icon-calendar-alt-fill"></p>
                    </li>
                    <!--lista  Asesores -->
                    <!-- <li class="border tile2 tile-big tile-4 fig-tile" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#lista_asesores">
                        <figure id="asesor">
                            <img src="images/asesores.png" />
                            <figcaption class="tile-caption caption-left">Lista de mis Asesores</figcaption>
                        </figure>
                    </li> -->
                    <!-- publicaciones de noticias -->
                    <li class="tile tile-big tile-5" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#lista_publicaciones">
                        <div>
                            <p><span class="icon-cloudy"></span> Publicaciones</p>
                        </div>
                    </li>
                </div>

                <div class="col2">

                    <!-- publicar -->
                    <li class="tile tile-big tile-1 slideTextLeft" data-toggle="modal" data-target="#publicar">
                        <div>
                            <p><span class="icon-skype"></span> Agregar</p>
                        </div>
                        <div>
                            <p>Nueva publicación</p>
                        </div>
                    </li>
                    <!-- agregar nuevo asesor -->
                    <!-- <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#publica_asesores">
                        <div>
                            <p><span class="icon-skype"></span> Agregar</p>
                        </div>
                        <div>
                            <p>Nueva Asesor</p>
                        </div>
                    </li> -->
                    <!-- vista previa -->
                    <li class="tile tile-small tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page" data-toggle="modal" data-target="#vista">
                        <div class="faces">
                            <div class="front"><span class="icon-picassa"></span></div>
                            <div class="back">
                                <p>Vista Previa</p>
                            </div>
                        </div>
                    </li>
                    <!-- cerrer sesion -->
                    <a href="../salir.php">
                        <li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page">
                            <div class="faces">
                                <div class="front"><span class="icon-instagram"></span></div>
                                <div class="back">
                                    <p>Cerrar Sesión</p>
                                </div>
                            </div>
                        </li>
                    </a>
                </div>
                <!-- texto de bienvenida -->

                <!-- footer -->
                <div class="col3">
                    <li class="tile tile-2xbig tile-9 fig-tile" data-page-name="random-r-page" data-toggle="modal" data-target="index.php">
                        <figure class="border cont_logo">
                            <img src="images/logo_blanco.png" />
                            <figcaption class="tile-caption caption-bottom">Bienvenido al administrador de noticias de tu página web, podrás Agregar, Modificar y Eliminar cuando desees y de una manera muy fácil e interactiva.
                        </figure>
                    </li>
                    <!-- <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="custom-page">
                        <div>
                            <p>Diseñado y Desarrollado por <a href="">Dexcon Digital</a> ©Copyright 2020 para Inmobiliaria XXXXX. Todos los derechos reservados.</p>
                        </div>
                    </li> -->
                </div>

            </ul>

            <!-- Modal Publicacion de noticias-->
            <div class="modal fade" id="publicar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Crear nueva noticia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="guardar.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Título Publicación:</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título Noticia" required>
                                    <small id="tituloHepl" class="form-text text-muted">Titulo principal de la publicación</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-form-label">Descripción Corta:</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción Corta" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda no superar los 121 caracteres</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Publicación:</label>
                                    <textarea name="noticia" id="noticia"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato </small>

                                </div>
                                <div class="custom-file mb-5">
                                    <label class="custom-file-label" for="customFile">Abrir una Imagen</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*" required>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una Archivo formato PDF que no supere las 2MB de peso</small>

                                </div>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Abrir un Archivo</label>
                                    <input type="file" class="custom-file-input" name="archivo" id="archivo" accept="application/pdf">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una Archivo formato PDF que no supere las 2MB de peso</small>

                                </div>

                                <input type="hidden" id="fecha" name="fecha">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn_publicar" value="crear">Crear Publicación</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal lista publicaciones-->
            <div class="modal fade" id="lista_publicaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lista Noticias</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Asesor</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  mysqli_fetch_array($sql)) {

                                        echo '<tr>
                                       <td>' . $res["id"] . '</td>
                                       <td>' . $res["nombre"] . '</td>

                                      <td><a href="mi_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#editar_asesor" onclick="dataEdit(this)"><i style="color: #F27852;" class="fas fa-edit"></i></a></td>

                                      <td><a href="#" data-href="eliminar.php?id=' . $res["id"] . '" data-toggle="modal"            data-target="#confirm-delete"><i style="color: #BA3B38;"class="fas fa-trash-alt"></i></a></td>
                                           </tr>';
                                    }

                                    echo '
                                    <div class="modal fade" id="editar_asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualiza tu Noticia</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_edit" value="">
                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Título Publicación</label>
                                                            <input type="text" class="form-control" name="nom_edit" id="nom_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Descripción Corta</label>
                                                            <input type="text" class="form-control" name="descrip_edit" id="descrip_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Es importante llenar este campo.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                        <label for="inputPassword" class="col-sm-3 col-form-label">Descripción:</label>
                                                             <div class="col-sm-12">
                                                                 <textarea name="noticia_edit" id="noticia_edit"></textarea>
                                                                 <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato </small> 
                                                             </div>
                                                          </div>
                                                        <div class="form-group mt-3 d-blok">
                                                            <label for="" class="col-sm-3 col-form-label">Imagen actual:</label>
                                                            <div class="col-sm-9">
                                                                <img src="" alt="" id="img_edit" width="200px" height="auto">
                                                            </div>
                                                            <small id="tituloHepl" class="form-text text-muted"> Esta es la imagen que tienes actualmente.</small>
                                                        </div>
                                                        <div class="custom-file mt-3">
                                                            <label for="" class="custom-file-label">Actualizar imagen</label>
                                                            <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                        </div>
                                                    <div class="custom-file mt-3">
                                                        <label for="" class="custom-file-label">Archivos</label>
                                                        <input type="file" class="custom-file-input" name="archivo_edit" id="archivo_edit" accept="application/pdf">
                                                        <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                    </div>
                                                        <input type="hidden" id="fecha" name="fecha">
                                                </div>
                                              
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>

                                </tbody>
                            </table>
                        </div>

                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro que quieres eliminar esta noticia, recuerda que si lo eliminas no podra rehacer los cambios?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn_publicar btn-ok">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $('#confirm-delete').on('show.bs.modal', function(e) {
                                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                                $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                            });
                        </script>
                    </div>
                </div>
            </div>
            <!-- <div class="modal fade" id="lista_publicaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                <Lista class="modal-title" id="exampleModalLabel">Lista de mis Asesores
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Asesor</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($res =  mysqli_fetch_array($sql)) {

                                    echo '<tr>
                                       <td>' . $res["id"] . '</td>
                                       <td>' . $res["nombre"] . '</td>

                                      <td><a href="mi_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#editar_asesor" onclick="dataEdit(this)"><i style="color: #359829;" class="fas fa-edit"></i></a></td>

                                      <td><a href="#" data-href="eliminar_asesor.php?id=' . $res["id"] . '" data-toggle="modal"            data-target="#confirm-delete"><i style="color: #53585A;"class="fas fa-trash-alt"></i></a></td>
                                           </tr>';
                                }

                                echo '
                                    <div class="modal fade" id="editar_asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_asesor.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualiza tu Asesor</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_edit" value="">
                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                                            <input type="text" class="form-control" name="nom_asesor" id="nom_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Celular:</label>
                                                            <input type="text" class="form-control" name="cel_asesor" id="cel_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                                        </div>
                                                        <div class="form-group ">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Número de WhatsApp:</label>
                                                        <input type="text" class="form-control" name="wapp_asesor" id="wapp_asesor_edit" value="">
                                                        <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                                    </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                                            <input type="text" class="form-control" name="cor_asesor" id="cor_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar correos corporativos.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Cargo del asesor:</label>
                                                            <input type="text" class="form-control" name="cargo" id="cargo_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Es importante llenar este campo.</small>
                                                        </div>
                                                        <div class="custom-file mb-5" style="display: none;">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Descripción:</label>
                                                            <textarea name="descrip" id="descrip_edit"></textarea>
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>

                                                        </div>
                                                        <div class="form-group mt-3 d-blok">
                                                            <label for="" class="col-sm-3 col-form-label">Imagen actual:</label>
                                                            <div class="col-sm-9">
                                                                <img src="" alt="" id="img_edit" width="200px" height="auto">
                                                            </div>
                                                            <small id="tituloHepl" class="form-text text-muted"> Esta es la imagen que tienes actualmente.</small>
                                                        </div>
                                                        <div class="custom-file mt-3">
                                                            <label for="" class="custom-file-label">Actualizar imagen</label>
                                                            <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                        </div>
                                                        <input type="hidden" id="fecha" name="fecha">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                ?>

                                </tbody>
                            </table>
                        </div>
                        
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro que quieres eliminar este asesor, recuerda que si lo eliminas no podra rehacer los cambios?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn_publicar btn-ok">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $('#confirm-delete').on('show.bs.modal', function(e) {
                                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                                $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                            });
                        </script>
                    </div>
                </div>
            </div> -->
            <!-- Modal eliminar noticia -->
            <div class="modal fade" id="eliminar-noticias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header modal_cabezera">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Publicación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal_cuerpo">
                            ¿Estas seguro de que quieres eliminar esta publicación, recuerda que si la eliminas no podra rehacer los cambios?
                            <br>

                        </div>
                        <div class="modal-footer modal_pie">
                            <button type="button" class="btn btn-secondary color_cancelar" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-primary color_aceptar btn-ok">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal de editar noticia -->
            <!-- <div class="modal fade" id="editar_noticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modify Noticia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                    <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" placeholder="Nombre y apellido" required>
                                    <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular ó Teléfono:</label>
                                    <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" placeholder="Celular" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                                </div>
                                <div class="custom-file mb-5">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Descripcion:</label>
                                    <textarea name="descrip" id="descrip"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>

                                </div>
                                <div class="custom-file mt-3">
                                    <label for="" class="custom-file-label">Imagen actual</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>

                                </div>
                                <input type="hidden" id="fecha" name="fecha">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Modal publicar asesores-->
            <!-- <div class="modal fade" id="publica_asesores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Asesor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="agregar_asesor.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                    <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" placeholder="Nombre y apellido" required>
                                    <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular:</label>
                                    <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" placeholder="Celular">
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.(Opcional)</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Número de WhatsApp:</label>
                                    <input type="text" class="form-control" name="tel_asesor" id="tel_asesor" placeholder="Celular">
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.(Opcional)</small>

                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                    <input type="email" class="form-control" name="cor_asesor" id="cor_asesor" placeholder="Asesor comercial" required>
                                    <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar correos corporativos.</small>
                                </div>
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Cargo del asesor:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                                    <small id="tituloHepl" class="form-text text-muted">Es importante este campo.</small>
                                </div>
                                 <div class="custom-file mb-5">
                                    <label for="inputPassword" class="col-form-label">Descripción del Asesor:</label>
                                    <textarea name="descrip" id="descrip"></textarea>
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>

                                </div> 
                                <div class="custom-file mt-3">
                                    <label for="" class="custom-file-label">Subir la foto del asesor</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                    <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>

                                </div>
                                <input type="hidden" id="fecha" name="fecha">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn_publicar" value="crear">Agregar asesor</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div> -->

            <!-- Modal lista de asesores-->
            <!-- <div class="modal fade" id="lista_asesores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>
                                <Lista class="modal-title" id="exampleModalLabel">Lista de mis Asesores
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre de Asesor</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($res =  mysqli_fetch_array($sql)) {

                                        echo '<tr>
                                       <td>' . $res["id"] . '</td>
                                       <td>' . $res["nombre"] . '</td>

                                      <td><a href="mi_ejemplo.php?id=' . $res["id"] . '" data-toggle="modal" data-id=' . $res["id"] . ' data-target="#editar_asesor" onclick="dataEdit(this)"><i style="color: #359829;" class="fas fa-edit"></i></a></td>

                                      <td><a href="#" data-href="eliminar_asesor.php?id=' . $res["id"] . '" data-toggle="modal"            data-target="#confirm-delete"><i style="color: #53585A;"class="fas fa-trash-alt"></i></a></td>
                                           </tr>';
                                    }

                                    echo '
                                    <div class="modal fade" id="editar_asesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <form method="post" id="form_data_1" action="update_asesor.php" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Actualiza tu Asesor</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <input type="hidden" name="id" id="id_edit" value="">
                                                        <div class="form-group">
                                                            <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                                                            <input type="text" class="form-control" name="nom_asesor" id="nom_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Primer nombre y primer apellido del asesor preferiblemente.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Celular:</label>
                                                            <input type="text" class="form-control" name="cel_asesor" id="cel_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                                        </div>
                                                        <div class="form-group ">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Número de WhatsApp:</label>
                                                        <input type="text" class="form-control" name="wapp_asesor" id="wapp_asesor_edit" value="">
                                                        <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar solo numeros.</small>

                                                    </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Correo electrónico:</label>
                                                            <input type="text" class="form-control" name="cor_asesor" id="cor_asesor_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Se recomienda ingresar correos corporativos.</small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Cargo del asesor:</label>
                                                            <input type="text" class="form-control" name="cargo" id="cargo_edit" value="">
                                                            <small id="tituloHepl" class="form-text text-muted">Es importante llenar este campo.</small>
                                                        </div>
                                                        <div class="custom-file mb-5" style="display: none;">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label">Descripción:</label>
                                                            <textarea name="descrip" id="descrip_edit"></textarea>
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato.</small>

                                                        </div>
                                                        <div class="form-group mt-3 d-blok">
                                                            <label for="" class="col-sm-3 col-form-label">Imagen actual:</label>
                                                            <div class="col-sm-9">
                                                                <img src="" alt="" id="img_edit" width="200px" height="auto">
                                                            </div>
                                                            <small id="tituloHepl" class="form-text text-muted"> Esta es la imagen que tienes actualmente.</small>
                                                        </div>
                                                        <div class="custom-file mt-3">
                                                            <label for="" class="custom-file-label">Actualizar imagen</label>
                                                            <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="image/*">
                                                            <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small>
                                                        </div>
                                                        <input type="hidden" id="fecha" name="fecha">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn_publicar">Actualizar</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                    </div>
                                    ';

                                    ?>

                                </tbody>
                            </table>
                        </div>
                        
                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro que quieres eliminar este asesor, recuerda que si lo eliminas no podra rehacer los cambios?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn_publicar btn-ok">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $('#confirm-delete').on('show.bs.modal', function(e) {
                                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                                $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                            });
                        </script>
                    </div>
                </div>
            </div> -->
            <!-- Modal configuracion user-->
            <div class="modal fade" id="config" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Configuración de Usuario Administrador</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="updateperfil.php" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $usuario[0]; ?>">
                                <input type="hidden" name="usuario" value="<?php echo $usuario[1]; ?>">
                                <div class="form-group ">
                                    <label for="inputPassword" class="col-form-label">Nombre:</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $usuario[1]; ?>">
                                    <small id="tituloHepl" class="form-text text-muted">Puede ingresar letras y numeros, recuerde que si lo cambia debe ingresar con este nuevo usuario</small>

                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Contraseña:</label>
                                    <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $usuario[2]; ?>">
                                    <small id="tituloHepl" class="form-text text-muted">Puede ingresar caracteres especiales @$#%&</small>
                                </div>

                                <!-- <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Teléfono de Usuario:</label>
                                    <input type="number" class="form-control" name="telefono" id="telefono" value="<?php echo $usuario[4]; ?>">
                                    <small id="tituloHepl" class="form-text text-muted"> Se recomienda agregar agregar solo numeros </small>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Cargo de Usuario:</label>
                                    <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $usuario[5]; ?>">
                                    <small id="tituloHepl" class="form-text text-muted"> Es un campo opcional</small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Dependencia:</label>
                                    <input type="text" class="form-control" name="dependencia" id="dependencia" value="<?php echo $usuario[6]; ?>">
                                    <small id="tituloHepl" class="form-text text-muted"> Es un campo opcional </small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-form-label">Foto de perfil de Usuario:</label>
                                    <div>
                                        <img width="200px" height="" src="<?php echo $usuario[7]; ?>">
                                    </div>

                                    <small id="tituloHepl" class="form-text text-muted">Esta es su foto de Usuario actualmente</small>
                                </div>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Subir una nueva foto de perfil</label>
                                    <input type="file" class="custom-file-input" name="imagen" id="imagen" accept="application/jpg">
                                    <small id="tituloHepl" class="form-text text-muted">Ingrese una imagen que no supere las 2MB de peso y tamaño de 900 pixeles de Ancho por 500 pixeles de Alto </small>
                                </div> -->
                        </div>

                        <div class="modal-footer">
                            <button type="submint" class="btn btn_cancelar" data-dismiss="modal">Cancelar</button>
                            <button class="btn btn_publicar">Actualizar Perfil</button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

            <!-- Modal de vista previa-->
            <div class="modal fade" id="vista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <!-- <h5>Vista previa de Asesores</h5>
                            <a href="../../asesores.php" target="_blank" role="button" class="btn btn btn-outline-success">Ir a la publicaión</a> -->


                            <!-- <hr> -->
                            <h5>Vista previa de Publicaciones</h5>
                            <a href="../../noticia.php" target="_blank" role="button" class="btn btn-outline-dark">Ir a la publicaión</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn_cancelar" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12" style="position: absolute;bottom: 0; width: 100%; height: 40px;color:white">
            <p class="text-center px-2 text-justify"> Diseñado y Desarrollado por <a class="mx-1 hover_footer" target="blank" href="https://www.dexcondigital.com"> Dexcon Digital </a> ©Copyright 2020 para
                Polania Inmobiliaria. Todos los derechos reservados. </p>
        </div>
    </div>

</body>
<?php include('layout/archivosfooter.php'); ?>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor colorpicker'
        ],
        language: 'es_MX',
        toolbar: 'undo redo cut copy paste selectall |  fontsizeselect | bold italic underline forecolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | print link',
        fontsize_formats: '8pt 10pt 12pt 13pt 14pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt 32pt 34pt 36pt 42pt'
    });
</script>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

</html>

<?php include 'layout/layoutFooter.php'; ?>