<?php 

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$user = $_POST['user'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO user (nombre_completo, email, user, contrasena)
        VALUES ('$nombre_completo' , '$email' , '$user' , '$contrasena')";

$ejecutar = mysqli_query($conexion , $query);

if ($ejecutar){
    echo'
    <script>
    alert("Registro exitoso");
    window.location = "../login.php";
    </script>';
}else{
    echo'
    <script>
    alert("Intentalo nuevamente , usuario no registro exitoso");
    window.location = "../login.php";
    </script>';
}

mysqli_close($conexion);
?>