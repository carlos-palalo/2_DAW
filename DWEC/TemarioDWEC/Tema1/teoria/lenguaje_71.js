//lenguaje_71.js - Ejercicio de expresiones regulares: Crear una expresión regular para una contraseña con condiciones prefijadas
//La clave debe contener mayúsculas. minúsculas, dígitos, caracteres especiales, no tener espacios en blanco, una longitud entre 4 y 12 y parte no debe contener partes del login en un mínimo de longitud 3

var login = "valladolid";
var password = "As4dodffA?";

var expMayusculas = /[A-Z]/;
var expMinusculas = /[a-z]/;
var expNumero = /\d/;
var expEspecial = /\W|_/;
var expBlancos = /\s/;
			
var errores = "";
var prohibidos = [];

for(let i=0;i<login.length;i++) {
	if(login.slice(i,i+3).length>=3)
		prohibidos.push(login.slice(i,i+3));
}

//console.log(prohibidos.some(x => password.indexOf(x)!=-1));
if (prohibidos.some(x => password.indexOf(x)!=-1)) {
	errores += "Parte de la clave está contenida en el login\n"
}

if(!expMayusculas.test(password)) {
	errores += "No contiene mayúsculas\n";
}

if(!expMinusculas.test(password)) {
	errores += "No contiene minúsculas\n";
}

if(!expNumero.test(password)) {
	errores += "No contiene números\n";
}

if(!expEspecial.test(password)) {
	errores += "No contiene caracteres especiales\n";
}

if(expBlancos.test(password)) {
	errores += "Contiene espacios en blanco\n";
}

if(errores.length!=0)
	console.log(errores);
else
	console.log("Clave correcta");