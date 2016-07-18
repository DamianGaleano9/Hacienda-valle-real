<?php
  $mail="brcreativo@gmail.com, nicolasparraacevedo@gmail.com, andresae@une.net.co, apaez@aia.com.co, agustinj@infraestructurayvivienda.com";
  $name = $_POST["name"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];
    $thank="thanks.html";
  $message = "
  Nombre:   ".$name."
  
  Apellido:   ".$lastname."
  
  Email:   ".$email."
  
  Comentario:   ".$comment."
   
  ";
  if (mail ($mail,"Alerta USA Hacienda Valle Real",$message)) Header ("location: $thank" );
  ?>