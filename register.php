<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/registro.css">
    <title>Registro de usuario</title>
</head>
<body>
    <section class="home-r">
        <div class="top">
            <img src="assets/imgs/logo top.png" alt="imagen2" class="top-caption">
        </div>
        
        <div class="captions">
            <h1>Registro De Usuario</h1>
            <p class="text-caption">Por favor ingrese los datos solicitados</p>
        </div>
        <!-- FORMULARIO DE REGISTRO
        USO DE METODO POST PARA QUE LA INGRESAR LOS DATOS NO SE MUESTREN EN EL NAVEGADOR (URL) -->
        <form action="php/save.php" method="POST" id="form">
            <div class="form">
                
                <label class="dato1" for="nombre_usuario">Nombre de usuario</label> <br> 
                <input type="text" id="nombre_usuario" name="nombre_u"> <br> 

                <label class="dato2" for="area">Área</label>  <br>
                <input type="text" id="area" name="area"  placeholder=" Area a la que pertenece"> <br> 

                <label class="dato3" for="correo">Correo electrónico</label>  <br>
                <input type="email" id="correo" name="email"  placeholder=" Alguien@vitelsa.com.co"> <br> 

                <label class="dato4" for="contrasena">Contraseña</label>  <br>
                <input type="password" id="contrasena" name="contrasena"> <br> 

                <label class="dato5" for="re_password">Confirme su contraseña</label>  <br>
                <input type="password" id="re_password" name="c_contrasena" > <br> 
            
        </div>
        
        <div class="content2">
            <button type="submit" id="completar-registro">Registrarse</button>
        </div>
            <p class="warnings" id="warnings"></p>
            <a class="volver" href="index.php" target=".blank">Volver</a>
    
        </form>
        
</body>
</html>
