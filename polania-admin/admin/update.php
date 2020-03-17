<?php
require_once('conexion.php');
$id = $_REQUEST["id"];
$nombre = $_REQUEST["nom_edit"];
$descripcion = $_REQUEST["descrip_edit"];
$noticia = $_REQUEST["noticia_edit"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ", "", $foto);
$destino = "fotos/" . $nombre_foto;
$comparador_fotos = "fotos/";


$nombre_ar = $_FILES['archivo_edit']['name'];
$limite_kb = 850;
$tipo = $_FILES['archivo_edit']['type'];
$tamanio = $_FILES['archivo_edit']['size'];
$rutas = $_FILES['archivo_edit']['tmp_name'];
$nombre_archivo = str_replace(" ", "-", $nombre_ar);
$destinos = "archivo/" . $nombre_archivo;
$comparador_archivo = "archivo/";
if ($tamanio <= $limite_kb * 1024) {
    $nombre_archivo = str_replace(" ", "", $nombre_ar);
    $destinos = "archivo/" . $nombre_archivo;
} else {
    echo "Archivo demaciado Grande";
}


// No actualizar ni archivos ni imagenes
if ($destino == $comparador_fotos && $destinos == $comparador_archivo) {
    $con1 = Conect();
    $qry1 = "SELECT * FROM noticias where id ='$id'";
    $sql1 = mysqli_query($con1, $qry1);
    $res =  mysqli_fetch_array($sql1);

    $destino = $res[3];
    $con = Conect();
    $qry = ("update noticias set nombre='$nombre', descripcion='$descripcion', video_url='', instagram_url='' , noticia='$noticia' where id='$id'");
    $sql = mysqli_query($con, $qry);
    if (!$sql) {
    } else {
        echo  "<script language='javascript'>
            alert('Se inserto con exito');
            window.location.href='index.php'
        </script>";
    }

    // actualizar fotos pero no archivo
}
if ($destino != $comparador_fotos && $destinos == $comparador_archivo) {
    copy($ruta, $destino);
    $con = Conect();
    $qry = ("update noticias set nombre='$nombre', descripcion='$descripcion', video_url='', instagram_url='',  imagen='$destino',noticia='$noticia' where id='$id '");
    $sql = mysqli_query($con, $qry);

    if (!$sql) {
        
        echo  "<script language='javascript'>
                    alert('No se logro insertar');
                window.location.href='index.php'
              </script>";
    } else {
        
        echo  "<script language='javascript'>
                    alert('Se inserto con exito');
                window.location.href='index.php'
              </script>";
    }
}

// actualizar archivo pero no imagen
if ($destino == $comparador_fotos && $destinos != $comparador_archivo) {
    copy($rutas, $destinos);

    $con = Conect();
    $qry = ("update noticias set nombre='$nombre', descripcion='$descripcion', archivo='$destinos',noticia='$noticia' where id='$id '");
    $sql = mysqli_query($con, $qry);

    if (!$sql) {
        
        echo  "<script language='javascript'>
                alert('No se logro insertar');
                window.location.href='index.php'
            </script>";
    } else {
        echo  "<script language='javascript'>
                    alert('Se inserto con exito');
                window.location.href='index.php'
              </script>";
    }
}
// actualizar  ambas cosas
if ($destino != $comparador_fotos && $destinos != $comparador_archivo) {
    copy($rutas, $destinos);
    copy($ruta, $destino);
    $con = Conect();
    $qry = ("UPDATE `noticias` SET nombre='$nombre', descripcion='$descripcion', video_url='', instagram_url='',noticia='$noticia', imagen = '$destino', archivo = '$destinos' WHERE id = '$id'");

    $sql = mysqli_query($con, $qry);
    if (!$sql) {
        echo  "<script language='javascript'>
                alert('No se logro insertar');
                window.location.href='index.php'
            </script>";
    } else {
        // echo 'se actualiza todo';
        echo  "<script language='javascript'>
            alert('Se inserto con exito');
            window.location.href='index.php'
            </script>";
        // die();

    }
}
