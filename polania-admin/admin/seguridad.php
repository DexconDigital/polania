<?php
require_once('../sesion.php');

//Reanudamos la sesión 
@session_start(); 
//Validamos si existe realmente una sesión activa o no 
if($_SESSION["autentica"] != "SIP") 
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: ../index.php"); 
  // echo implode( $_SESSION) ; 
  // die();
  
  exit(); 
} 
?>