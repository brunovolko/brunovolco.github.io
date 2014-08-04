<?php 

$cuerpo = "<br>Meddelande fr&#229;n <br><br> n"; 
$cuerpo .= "Nombre: " . $HTTP_POST_VARS["nombre"] . " <br> n"; 
$cuerpo .= "Email: " . $HTTP_POST_VARS["email"] . " <br> n"; 
$cuerpo .= "Asunto:: " . $HTTP_POST_VARS["asunto"] . "<br> n"; 
$cuerpo .= "Mensaje: " . $HTTP_POST_VARS["mensaje"] . "<br><br> n"; 

//Nota. Cabeceras para el env√≠o en formato HTML. 
$headers = "MIME-Version: 1.0rn"; 
$headers .= "Content-type: text/html; charset=iso-8859-1rn"; 

//Nota. Direcci√≥n del remitente. 
$headers .= "From: " . $HTTP_POST_VARS["email"] . "n"; 

//Nota. Direcci√≥n de respuesta. 
$headers .= "Reply-To: " . $HTTP_POST_VARS["email"] . "n"; 

//Nota. Ruta del mensaje desde origen a destino. 
$headers .= "Return-path: " . $HTTP_POST_VARS["email"] . "n"; 

//Nota. Funcion Mail de PHP: 
// mail( $correoreceptor, $asunto, $mensaje, $cabeceras ); 


mail("bru-carta@hotmail.com","Contacto de:",$cuerpo,$headers); 


//Confirmaci√≥n de envio del mensaje. 
echo "El comentario se ha enviado con exito, te contactaremos en la brevedad!":
}
 ?>