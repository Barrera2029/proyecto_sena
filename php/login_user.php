<?php
    session_start();

    include 'conexion_db.php';
    //CREAMOS VARIABLES PARA CAPTURAR DATOS DEL INICIO DE SESIÓN
    $correo = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena); //PERMITIR INGRESO CON CONTRASEÑAS ENCRIPTADAS

    //LA BD VALIDA LOS DATOS QUE NECESITAMOS Y ADQUIERE SUS VALORES
    $validar_login = mysqli_query($conection, "SELECT * FROM nuevos_usuarios WHERE email='$correo' 
    and contrasena='$contrasena' ");

    //REDIRECCIONAMIENTO A LA PAGINA DE BIENVENIDA EN CASO DE QUE LOS DATOS VALIDADOS SEAN CORRECTOS
    // Y ESTEN EN LA BD REGISTRADOS 
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['nombre_u'] = $correo;
        header("location: ../bienvenida.php");
        exit();
    } else{
        echo'
        <script>
        alert("El usuario no se encuentra registrado, verifique los datos introducidos");
        window.location = "../index.php";
        </script>
        ';
        exit();
    }
?>