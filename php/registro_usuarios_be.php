<?php 

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$user = $_POST['user'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO user (nombre_completo, email, user, contrasena)
        VALUES ('$nombre_completo' , '$email' , '$user' , '$contrasena')";

//verificar que el correo no se repita en la base de datos

$verificar_correo = mysqli_query ($conexion , "SELECT * FROM user WHERE email = '$email'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
    alert("El correo electrónico ya está registrado. Por favor, utiliza otro.");
    window.location = "../login.php"; // Redirige a la página de registro nuevamente
    </script>';
    exit();
}

$verificar_user = mysqli_query ($conexion , "SELECT * FROM user WHERE email = '$user'");

if (mysqli_num_rows($verificar_user) > 0) {
    echo '
    <script>
    alert("El nombre de usuario no disponible. Por favor, utiliza otro.");
    window.location = "../login.php"; // Redirige a la página de registro nuevamente
    </script>';
    exit();
}

 // Utiliza una consulta preparada para evitar la inyección SQL
if ($stmt = mysqli_prepare($conexion, $query)) {
    mysqli_stmt_bind_param($stmt, "ssss", $nombre_completo, $email, $user, $contrasena);
    $ejecutar = mysqli_stmt_execute($stmt);

    if ($ejecutar) {
        echo '
        <script>
        alert("Registro exitoso");
        window.location = "../login.php";
        </script>';
    } else {
        echo '
        <script>
        alert("Inténtalo nuevamente, registro no exitoso");
        window.location = "../login.php"; // Redirige a la página de registro nuevamente
        </script>';
    }

    mysqli_stmt_close($stmt);
} else {
    echo '
    <script>
    alert("Error en la consulta preparada");
    window.location = "../login.php"; // Redirige a la página de registro nuevamente
    </script>';
}

mysqli_close($conexion);
?>