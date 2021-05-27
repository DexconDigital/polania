
<?php
require_once 'conexion.php';

$nom_asesor = $_REQUEST["nom_asesor"];
$cel_asesor = $_REQUEST["cel_asesor"];
$cor_asesor = $_POST["cor_asesor"];
$image = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ", "", $image);
$destino = "asesores/" . $nombre_foto;
$fecha = $_REQUEST["fecha"];
$fecha = date("Y-m-d");
$cargo = $_REQUEST["cargo"];
// $descrip = $_REQUEST["descrip"];
$tel_asesor = $_REQUEST["tel_asesor"];
$id_inmo = 15;
//  echo $nom_asesor, '', $cel_asesor, '',$tel_asesor,'', $cor_asesor ,'',$image ,'',$ruta ,'', $nombre_foto ,'', $destino ,'',$fecha, '',$cargo, '',$id_inmo;
//  die();
$con = Conect();
if (isset($destino)) {
    $sql = ("INSERT INTO `asesores` (`id`, `nombre`, `telefono`, `correo`, `imagen`, `id_inmobiliaria`, `fecha`, `cargo`, `descripcion`, `celular`) VALUES (NULL, '$nom_asesor', '$tel_asesor', '$cor_asesor', '$destino', '$id_inmo', '$fecha', '$cargo', '', '$cel_asesor');");
    $result = $con->prepare( $sql );
    $result->execute();
    
    echo  "<script language='javascript'>
            alert('Asesor Agregado Con Éxito');
            window.location.href='index.php'
            </script>";
    
}
copy($ruta, $destino);
$sql = ("INSERT INTO `asesores` (`id`, `nombre`,`telefono`,`correo`,`imagen`,`id_inmobiliaria`,`fecha`,`cargo`,`celular`) VALUES (NULL, '$nom_asesor','$tel_asesor','$cor_asesor','$destino','$id_inmo','$fecha','$cargo','$cel_asesor'')");
$result = $con->prepare( $sql );
$result->execute();

echo  "<script language='javascript'>
        alert('Asesor Agregado Con Éxito');
        window.location.href='index.php'
        </script>";
?>