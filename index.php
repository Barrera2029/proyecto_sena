<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/inicio.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <!-- CONTENEDOR PADRE-->
    <section class="home">

        <div class="top"> <!--TITULO Y LOGO DE EMPRESA-->
            <img src="assets/imgs/logo top.png" alt="Imagen2" class="top-caption"></img>
            <p class="top-caption">  <b> Administración y manejo de HDS</b></p>
        </div>

        <div class="container"> <!--IMAGEN GRANDE-->
            <img src="assets/imgs/Frame 1.png" alt="Imagen" class="flex-item">
        </div>

        <div class="content"> <!--TITULO DEL INICIO DE SESION-->
            <div class="content1">
                <h1><b>Ingreso</b></h1>
                <p class="texto1">Por favor ingrese los datos solicitados</p>
            </div>

            <form> <!--ESPACIOS PARA INGRESAR EL EMAIL Y LA CONSTRASEÑA-->
                <div class="content2">
                    <label class="datos1" for="correo1">Email</label> <br> <br>
                    <input type="email" id="correo1" name="correo1" required placeholder=" alguien@vitelsa.com.co"> <br> <br>

                    <label class="datos2" for="contrasena_p">Contraseña</label> <br> 
                    <input type="password" id="contrasena_p" name="contrasena_p" required placeholder=" contraseña"> <br>
                    
                    <!--OPCIONES ADICIONALES-->
                    <input class="recordar" type="checkbox" name="recordar" value="recordar"> Recordarme</input> 
                    <span class="link">Olvidó su contraseña?</span> <br> 
                </div>

                <div class="content3"> <!--VALIDACIÓN DE USUARIO Y REGISTRO-->
                    <button id="boton-entrar"><b>Entrar</b></button> <br><br>
                    <span>No tienes cuenta?</span> 
                    <a class="content3-1" href="register.php" target=".blank">Regístrate</a>
                </div>
            </form>
        </div> 
    </section>
</body>
</html>
