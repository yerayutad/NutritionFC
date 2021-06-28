<?php
//Recibimos los campos del formulario
$nombre=$_POST[name];
$correo=$_POST[email];
$asunto=$_POST[subject];
$mensaje=$_POST[message];
//Acomodamos todo para darle orden al cuerpo del mensaje
$texto_mensaje="El usuario ".$nombre." dijo: \n".$mensaje." \n
Puedes contactarlo a su correo: ".$correo;
if(mail('infonutritionfc@gmail.com',$asunto,$texto_mensaje)){
echo "Su mensaje se ha enviado! Nos pondremos en contacto con usted.";
}else{
echo "No se ha podido enviar el mensaje";
}
?>
