<?php



$nombre =   isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
$asunto =   isset( $_POST['asunto'] ) ? $_POST['asunto'] : '';
$email  =   isset( $_POST['email'] ) ? $_POST['email'] : '';
$mensaje =  isset( $_POST['mensaje'] ) ? $_POST['mensaje'] : '';
$contenido = '
						<html>
						<head>
							<title></title>
						</head>
						<body>
							 <h2>Haz recibido un mensaje através de la página</h2>
							 <p>'.$nombre. ' te ha enviado el siguiente mensaje:</p>
							 <p>'.$asunto. ' Mensaje: </p>
							 <p>'.$mensaje. ' <br><br> Puedes ponerte en contacto con la persona al email: '.$email.'</p>
							 <hr>
							 
						</body>
						</html>';


// Configuración de los encabezados

// Ahora se envía el e-mail usando la función mail() de PHP

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";


'X-Mailer: PHP/' . phpversion();

// Enviar correo
$envio = mail('arevelo86@gmail.com , aneykahurtado@hotmail.com',$asunto, $contenido, $headers);

if($envio) {
$miresultado = '<h4>El correo ha sido enviado! Gracias por ponerse en contacto con nosotros.</h4>';
} else{

$miresultado = '<h4>No se envío el correo.</h4>';

}

echo $miresultado;




