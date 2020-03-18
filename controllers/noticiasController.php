<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 16 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $id = $field['id'];
    $nombre = $field['nombre'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $archivo = $field['archivo'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'polania-admin/admin/' . $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo,

    );
}
function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 80;
        $limite_de_cadena2 = 20;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        } else {
            $descrip = $descrip . '...<br><br>';
        }
        echo '
    

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '">
                                <div class="card">

                                    <div class="imagen position-relative">
                                        <img src="' . $r[$i]['imagen'] . '" class="card-img-top img_noticia" alt="...">
                                        <div class="blanco font-weight-bold animacion_ver_mas col-12 p-0 text-center"> Haz click para ver más </div>
                                    </div>

                                    <div class="card-body">

                                        <h2>' . $nombre . '</h2>

                                        <h5 class="mb-3 text-muted"><span class="color_icono icon fas fas fa-calendar-alt"></span> ' . $r[$i]['fecha'] . '</h5>

                                        <p class="position-relative pt-3">' . $descrip . '</p>

                                    </div>

                                </div>
                            </a>
                        </div>';
    }
}
function modelo_ultimas_noticia($r)
{
    if (count($r) > 2) {
        $cantidad_noticias = 3;
    } else {
        $cantidad_noticias = count($r);
    }

    for ($i = 0; $i < $cantidad_noticias; $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 80;
        $limite_de_cadena2 = 20;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        } else {
            $descrip = $descrip . '...<br><br>';
        }
        echo '
    

                    <div class="col-12 col-md-6 col-lg-4 mt-5">
                            <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '">
                                <div class="card">

                                    <div class="imagen position-relative">
                                        <img src="' . $r[$i]['imagen'] . '" class="card-img-top img_noticia" alt="...">
                                        <div class="blanco font-weight-bold animacion_ver_mas col-12 p-0 text-center"> Haz click para ver más </div>
                                    </div>

                                    <div class="card-body">

                                        <h2>' . $nombre . '</h2>

                                        <h5 class="mb-3 text-muted"><span class="color_icono icon fas fas fa-calendar-alt"></span> ' . $r[$i]['fecha'] . '</h5>

                                        <p class="position-relative pt-3">' . $descrip . '</p>

                                    </div>

                                </div>
                            </a>
                        </div>';
    }
}
