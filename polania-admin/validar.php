<?php
require './admin/conexion.php';
$con = conect();

$id_inmobiliaria = 16 ;
sleep( 2 );

$usuarios = ( "SELECT id_user
FROM usuarios WHERE id_user = '$id_inmobiliaria' AND usuario = '".$_POST['usuariolg']."' 
AND password = '".$_POST['passlg']."'" );
$result = $con->prepare( $usuarios );
$result->execute();
$rowcount = $result->rowCount();

if ( $rowcount == 1 ):
$datos = $result->fetch();
echo json_encode( array( 'error' => false, 'tipo' => $datos['id_user'] ) );
else:
echo json_encode( array( 'error' => true ) );
endif;
?>
