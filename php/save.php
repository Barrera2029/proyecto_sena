<?php
require 'conexion_db.php';

$nombre = $_POST['nombre_u'];
$area = $_POST['area'];
$correo = $_POST['email'];
$contrasena = $_POST['contrasena'];
$re_password = $_POST['c_contrasena'];

$query = "INSERT INTO nuevos_usuarios(nombre_u, area, email, contrasena, c_contrasena)
 VALUES ('$nombre','$area','$correo','$contrasena','$re_password') ";

$ejecutar = mysqli_query($conection, $query);

if($ejecutar){
    echo '
        <script>
        alert("Usuario almacenado correctamente");
        window.location = "../index.php";
        </script>
    ';
    } else {
        echo '
        <script>
        alert("Inténtelo de nuevo. Usuario no almacenado.");
        window.location = "../index.php";
        </script>
    ';
    }

    mysqli_close($conection);
?>