<?php 

    $aves = "franciscasalinascastillo@gmail.com"; // this is your Email address
    $cliente = $_POST['email']; // this is the sender's Email address
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $asunto_respuesta = "Copia de tu mensaje a Aves Santa Teresa";
    $mensaje = $nombre . " envió el siguiente mensaje:" . "\n\n" . $_POST['mensaje'];
    $mensaje_respuesta = $nombre . ", te hemos enviado una copia de tu mensaje:" . "\n\n" . $_POST['mensaje'];

    echo $cliente.$nombre;
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: ' . $cliente . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    //$headers = "Desde:" . $cliente;
    $headers_respuesta =  'MIME-Version: 1.0' . "\r\n"; 
    $headers_respuesta .= 'From: ' . $aves . "\r\n";
    $headers_respuesta .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$headers_respuesta = "Desde:" . $aves;
    mail($aves,$asunto,$mensaje,$headers);
    mail($cliente,$asunto_respuesta,$mensaje_respuesta,$headers_respuesta); // sends a copy of the message to the sender
    echo "Correo enviado. Muchas gracias " . $nombre . ", te responderemos a la brevedad.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    
?>