//lenguaje_46.js - Funciones anónimas y autoejecución

//FUNCIÓN ANÓNIMA SIN EJECUCIÓN
(function () {
	console.log("Texto1");
});
//Sin los paréntesis externos daría un error sintáctico



//FUNCIÓN ANÓNIMA CON EJECUCIÓN
(function () {
	console.log("Texto2");
})();
//Al usar el operador () se ejecuta el código



//FUNCIÓN ANÓNIMA CON EJECUCIÓN Y PARÁMETROS
(function (c1,c2) {
	console.log(c1 + " - " + c2);
})("Texto3","Texto4");




//USO MUY TÍPICO --> Pasar como parámetro una función anónima
function miConcatenar(a,b,c) {
	console.log(a + " - " + b("texto6") + " - " + c);
}
miConcatenar("texto5",function (v){return v.toUpperCase();},"texto7");



//FUNCIÓN ANÓNIMA ASIGNADA A UNA VARIABLE (EXPRESIÓN COMO FUNCIÓN YA VISTA)
var mifuncion = function (a) {
	console.log(a);
};
mifuncion("texto8");