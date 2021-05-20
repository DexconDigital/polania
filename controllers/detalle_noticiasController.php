<?php
require_once( 'controllers/conexion.php' );
$codigo = 0;
$codigo = $_GET['co'];

$con = Conect();

$sql = "SELECT * FROM noticias WHERE id = $codigo";
$result = $con->prepare( $sql );
$result->execute();
$field = $result->fetch( PDO::FETCH_OBJ );

$id = $field->id;
$nombre = $field->nombre;
$descripcion = $field->descripcion;
$imagen = $field->imagen;
$archivo = $field->archivo;
$noticia = $field->noticia;
$fecha_complete = $field->fecha;

$comparador = './polania-admin/admin/';
$ruta_imagen = './polania-admin/admin/'.$imagen;
$ruta_archivo = $comparador.$archivo;

?>