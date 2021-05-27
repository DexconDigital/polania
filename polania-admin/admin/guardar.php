<?php
require_once 'conexion.php';

$nombre = $_REQUEST["titulo"];
$descripcion = $_REQUEST["descripcion"];
$fecha = $_REQUEST["fecha"];
$noticia = $_POST["noticia"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $foto );
$destino = "fotos/".$nombre_foto;
$fecha = date( "Y-m-d" );
$id_inmo = 16;
$nombre_ar = $_FILES['archivo']['name'];

$limite_kb = 2;
if ( $nombre_ar != "" ) {
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $rutas = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = str_replace( " ", "", $nombre_ar );
    $destinos = "archivo/".$nombre_archivo;

    if ( $tamanio <= $limite_kb * 1024 ) {
        $nombre_archivo = str_replace( " ", "", $nombre_ar );
        $destinos = "archivo/".$nombre_archivo;

    } else {
        echo "";
    }
    $con = Conect();
    copy( $rutas, $destinos );
}

//  Lorem Ipsum es simplemente un texto ficticio de la industria de impresión y composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500, cuando una impresora desconocida tomó una galera de tipo y la mezcló para hacer un libro de muestras. Ha sobrevivido no solo cinco siglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios.

$con = Conect();
copy( $ruta, $destino );

if ( $nombre_ar != "" ) {
    $pdoQuery = "INSERT INTO `noticias` (`nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `id_inmobiliaria2`) VALUES (:nombre, :descripcion, :imagen, :archivo, :noticia, :fecha,:id_inmobiliaria2)";
    $pdoResult = $con->prepare( $pdoQuery );
    $pdoExec = $pdoResult->execute( array( ':nombre'=>$nombre, ':descripcion'=>$descripcion, ':imagen'=>$destino, ':archivo'=>$destinos, ':noticia'=>$noticia, ':fecha'=>$fecha, ':id_inmobiliaria2'=>$id_inmo, ) );

    echo  "<script language='javascript'>
        alert('Publicación Agregada Con Éxito1');
        window.location.href='index.php'
        </script>";

} else {
    $pdoQuery = "INSERT INTO `noticias` (`nombre`, `descripcion`, `imagen`, `noticia`, `fecha`, `id_inmobiliaria2`) VALUES (:nombre, :descripcion, :imagen, :noticia, :fecha,:id_inmobiliaria2)";
    $pdoResult = $con->prepare( $pdoQuery );
    $pdoExec = $pdoResult->execute( array( ':nombre'=>$nombre, ':descripcion'=>$descripcion, ':imagen'=>$destino, ':noticia'=>$noticia, ':fecha'=>$fecha, ':id_inmobiliaria2'=>$id_inmo, ) );

    echo  "<script language='javascript'>
        alert('Publicación Agregada Con Éxito2');
        window.location.href='index.php'
        </script>";
}
