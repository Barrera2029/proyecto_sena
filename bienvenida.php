<?php //CÓDIGO PARA EVITAR QUE EL USUARIO ENTRE SIN INICIAR SESIÓN 

    session_start();

    if(!isset($_SESSION['nombre_u'])){
        echo'
        <script>
        alert("Debe iniciar sesión para acceder");
        window.location = "index.php";
        </script>
        ';
        session_destroy();
        die();
    }

    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>MANEJO HDS</title>
</head>
    <body>
        <div class="imagen-container">
            <img src="assets/imgs/logo.png" alt="Logo_vitelsa">
        </div>
<!-- Aquí irá el contenido de la página -->

        <div class="container">
            <h1 class="titulo">USUARIO ADMINISTRADOR</h1>
        </div>

        <button class="boton-esq">OPCIONES</button>

        <div class="contenedor-title">
            <h2 class="subtitulo">BUSCAR DOCUMENTOS</h2>
            <div class="barra-busqueda">
                <input type="text" placeholder="Nombre del producto">
                <button class="buscar-button">Buscar</button>
        </div>

        <div class="agregar-docs">
            <button class="agregar-doc">AGREGAR DOCUMENTOS</button>
        </div>

<!-- Otro contenido de la página -->
</body>
</html>