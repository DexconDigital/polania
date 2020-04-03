<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('PolaniaInmobiliaria@PolaniaInmobiliaria.com', 'PolaniaInmobiliaria@PolaniaInmobiliaria.com');
    //destinos
    /* $mail->addAddress('info@prosegura.com.co'); */
     $mail->addAddress('wdsp9898@gmail.com');
    $mail->addAddress('gestion@dexcondigital.com');
    $mail->addAddress('alexthunder7@gmail.com');
    $mail->addAddress('ceo@dexcondigital.com');
    

    $mail->Subject='Mensaje desde la página web Polania Inmobiliaria';
    $mail->Body = '<span>Hola, '.$nombre.' quiere contactarse con ustedes.</span>
                   <h4> Sus datos de contacto son: </h4>
                    <ul>
                        <li>Nombres Completos: '.$nombre.' '.$apellido.'</li>
                        <li>Correo: '.$email.'</li>
                        <li>Teléfono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "
    <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../contacto.php'</script>";
          
}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
