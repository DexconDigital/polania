<?php
$mysqli = new mysqli('localhost','root','','2018noticias');
if($mysqli->connect_errno):
    echo "Error al conectarse con Mysql debiado al error" , $mysqli->connect_errno;
endif;
?>