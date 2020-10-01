//Crear una contraseña
//Mayus, minus, dig, c.esp, no espacio, long 4-12 y no repetir cadena del login (3)
var login = "valladolid";
var aux = "";
var password = "Dol3&2";
var validar = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&](^\s))[A-Za-z\d$@$!%*?&^\s]{4,12}/;

for (var i = 0; i < login.length - 2; i++) {
    aux = login.slice(i,i+3);
    if(password.match(aux)){
        console.log("Error. La contraseña tiene un conjunto de caracteres repetidos respecto al login");
        break;
    }
}

if(validar.test(password)){
    console.log("Contraseña válida.");
}else{
    console.log("Contraseña no válida");
}