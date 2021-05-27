<?php

require( "admin/conexion.php" );

$con = conect();

$qry = "SELECT * FROM usuarios WHERE  id_inmobiliaria1 = ?";
$resultado = $con->prepare( $qry );
$resultado->execute( array( '16' ) );

$row = $resultado->fetch( PDO::FETCH_ASSOC );

if ( $resultado->rowCount() > 0 ) {
    // output data of each row
    session_start();
    //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
    $_SESSION["autentica"] = "SIP";
    $_SESSION["usuarioactual"] =  $row['id_user']; 
    //nombre del usuario logueado.
    //Direccionamos a nuestra página principal del sistema.

}

?>