<?php 


$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$user = $_POST['user'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO user(nombre_completo, email , user , contrasena)
        VALUES ('$nombre_completo' , '$email' , '$user' , '$contrasena')";
?>