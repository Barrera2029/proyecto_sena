//DECLARANDO VARIABLES Y LLAMANDO LOS ID
const nombre = document.getElementById("nombre_u");
const area = document.getElementById("area");
const email = document.getElementById("email");
const contraseña = document.getElementById("contrasena");
const conf_contraseña = document.getElementById("c_contrasena");
const form = document.getElementById("form");
const parrafo = document.getElementById("warnings");

//VALIDACIÓN DE ENTRADAS DE USUARIO (NOMBRE,AREA, CORREO, CONTRASEÑA)
form.addEventListener("submit", e => {
    e.preventDefault();
    let warnings = "";
    let entrar = false;
    let valEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    parrafo.innerHTML = "";
    if(nombre.value.length <5){
        warnings += `*El nombre debe tener más de 5 caracteres <br> `;
        entrar = true;    
    }
    if(area.value.length < 2){
        warnings += `*El nombre del área debe tener más de 2 caracteres <br> `;
        entrar = true;    
    }
    if(!valEmail.test(email.value)){
        warnings += `*El email no es válido <br> `;
        entrar = true;
    };
    if(contraseña.value.length <10){
        warnings += `*La contraseña debe tener más de 10 caracteres <br> `;
        entrar = true;
    }
    if(!(conf_contraseña.value === contraseña.value)){
        warnings += `*Las contraseñas no coinciden <br> `;
        entrar = true;
    }

    if(entrar){
        parrafo.innerHTML = warnings;
    } else{
        parrafo.innerHTML = "Cuenta registrada";
    }
});

