<?php


$tittle = $_POST["tittle"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$celular = $_POST["celular"];

$mensaje = "este mensaje fue enviado por" . $tittle . ",\r\n";
$mensaje .= "su nombre es: " . $nombre . ",\r\n";
$mensaje .= "su email es: " . $email . ",\r\n";
$mensaje .= "su numero celular es: " . $celular . ",\r\n";


?>