<?php
require 'conexion_db.php';

//CASILLAS EN LAS QUE SE GUARDARÁ LA INFORMACIÓN DENTRO DE LA BD
$nombre = $_POST['nombre_u'];
$area = $_POST['area'];
$correo = $_POST['email'];
$contrasena = $_POST['contrasena'];
$re_password = $_POST['c_contrasena'];

//ENCRIPTAMIENTO DE CONTRASEÑAS
$contrasena = hash('sha512', $contrasena); 
$re_password = hash('sha512', $re_password);

//INSERCIÓN DE DATOS EN CADA CASILLA SEGÚN EL VALOR
$query = "INSERT INTO nuevos_usuarios(nombre_u, area, email, contrasena, c_contrasena)
VALUES ('$nombre','$area','$correo','$contrasena','$re_password') ";

//VERIFICAR QUE EL NOMBRE DE USUARIO NO SE REPITA EN BD
$validar_usuario = mysqli_query($conection, "SELECT * FROM nuevos_usuarios WHERE nombre_u='$nombre' ");

if(mysqli_num_rows($validar_usuario) > 0){
    echo '
        <script>
            alert("Este nombre de usuario ya se encuentra registrado");
            window.location = "../register.php";
        </script>
    ';
    exit();
}

//VERIFICAR QUE EL CORREO NO SE REPITA EN BD
$validar_correo = mysqli_query($conection, "SELECT * FROM nuevos_usuarios WHERE email='$correo' ");

if(mysqli_num_rows($validar_correo) > 0){
    echo '
        <script>
            alert("Este correo ya se encuentra registrado");
            window.location = "../register.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conection, $query);


//SCRIPT PARA QUE EL USUARIO VUELVA AL INICIO DE LA PÁGINA AL COMPLETAR EL REGISTRO
if($ejecutar){
    echo '
        <script>
        alert("Usuario registrado correctamente");
        window.location = "../index.php";
        </script>
    ';
    } else {
        echo '
        <script>
        alert("Inténtelo de nuevo. Usuario no registrado.");
        window.location = "../index.php";
        </script>
    ';
    }

    mysqli_close($conection);
?>