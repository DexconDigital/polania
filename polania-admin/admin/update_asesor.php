<?php
require_once ( 'conexion.php' );

$id = $_REQUEST["id"];
$nom_asesor = $_REQUEST["nom_asesor"];
$cel_asesor = $_REQUEST["cel_asesor"];
$cor_asesor = $_POST["cor_asesor"];
$image = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $image );
$destino = "asesores/".$nombre_foto;
$comparador_fotos = "asesores/";
$cargo = $_REQUEST["cargo"];
$wapp_asesor = $_REQUEST["wapp_asesor"];
// $descrip = $_REQUEST ["descrip"];

// No actualizar ni archivos ni noticias
if ( $destino == $comparador_fotos ) {
    $con1 = Conect();
    $qry1 = "SELECT * FROM asesores where id ='$id'";
    $result = $con1->prepare( $qry1 );
    $result->execute();
    $res = $result->fetch( PDO::FETCH_OBJ );

    $destino = $res->imagen;
    $con = Conect();
    $qry = ( "update asesores set nombre='$nom_asesor', telefono='$cel_asesor', correo='$cor_asesor', cargo='$cargo', celular='$wapp_asesor' where id='$id '" );
    $result = $con->prepare( $qry );
    $result->execute();

    if ( !$result ) {
        echo 'No se logro actualizar';
    } else {
        echo  "<script language='javascript'>
                alert('Asesor Modificado con Éxito');
                 window.location.href='index.php'
              </script>";
    }
    // actualizar fotos pero no archivo
}
if ( $destino != $comparador_fotos ) {
    copy( $ruta, $destino );
    $con = Conect();
    $qry = ( "update asesores set nombre='$nom_asesor', telefono='$cel_asesor', correo='$cor_asesor', imagen='$destino', cargo='$cargo', celular='$wapp_asesor' where id='$id '" );
    $result = $con->prepare( $qry );
    $result->execute();

    if ( !$result ) {
        echo 'No se logro actualizar';
    } else {
        echo  "<script language='javascript'>
                alert('Asesor Modificado con Éxito');
                 window.location.href='index.php'
              </script>";
    }
}

?>