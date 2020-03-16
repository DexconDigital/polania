<?php
require_once 'conexion.php';

$nombre=$_REQUEST["titulo"];
$descripcion=$_REQUEST["descripcion"];
$fecha=$_REQUEST["fecha"];
$noticia= $_POST["noticia"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$fecha = date("Y-m-d");
$id_inmo = 16;
$nombre_ar = $_FILES['archivo']['name'];

//  echo $nombre, ' ', $descripcion, '  ',$noticia,'  ', $foto ,'  ',$ruta ,'   ', $ruta ,'', $nombre_foto,'    ',$fecha, '  ',$destino, '',$id_inmo, ' ', $nombre_ar,  
//   die();

$limite_kb = 2;
if($nombre_ar != ""){
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $rutas = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = str_replace(" ","",$nombre_ar);
    $destinos="archivo/".$nombre_archivo; 
    if($tamanio <= $limite_kb * 1024){
        $nombre_archivo = str_replace(" ","",$nombre_ar);
        $destinos="archivo/".$nombre_archivo; 
    }else{
        echo "";
    }
    $con = Conect();
        copy($rutas,$destinos);
}




$con = Conect();
    copy($ruta,$destino);

    if($nombre_ar!=""){
        mysqli_query($con, "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `video_url`, `instagram_url`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$destino', '$destinos', '$noticia', '$fecha', '', '', $id_inmo)");
                            
        echo  "<script language='javascript'>
        alert('Publicación Agregada Con Éxito1');
        window.location.href='index.php'
        </script>";
            
    }else{
        mysqli_query($con, "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `video_url`, `instagram_url`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$destino', '', '$noticia', '$fecha', '', '', $id_inmo)");
        echo  "<script language='javascript'>
        alert('Publicación Agregada Con Éxito2');
        window.location.href='index.php'
        </script>";
    }
