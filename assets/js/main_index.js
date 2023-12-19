//GUARDAR LA SELECION DE ELEMENTOS PARA INGRESAR LOS DATOS PRINCIPALES
const email = document.getElementById('correo1');
const contraseña = document.getElementById('contrasena_p');
const button = document.getElementById('boton-entrar');

button.addEventListener('click', (e) => {
    e.preventDefault();
    const data ={
        email: email.value,
        contraseña: contraseña.value 
    }
    console.log(data);
    alert("Ha iniciado sesión correctamente");
})
