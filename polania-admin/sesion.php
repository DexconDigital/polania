<?php 

require("admin/conexion.php");

$con=conect();

$id_inmobiliaria = 16;

$qry="SELECT * FROM usuarios WHERE  id_inmobiliaria1 = '$id_inmobiliaria'";
$sql=mysqli_query($con,$qry);

$row = mysqli_fetch_row($sql);

if (mysqli_num_rows($sql) > 0) {
    // output data of each row
    session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION["usuarioactual"] =  $row[0]; 
     
      //nombre del usuario logueado. 
      //Direccionamos a nuestra página principal del sistema. 

} 

?>