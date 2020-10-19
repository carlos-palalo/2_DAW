//json_01.js - Método parse: convertir JSON en objeto

var text = '{"name":"John Johnson","street":"Oslo West 16","phone":"555 1234567"}';

var objeto = JSON.parse(text);

console.log("SE IMPRIME EL OBJETO ENTERO");
console.table(objeto);
console.log(objeto);

console.log("\n\nSE IMPRIME PROPIEDAD POR PROPIEDAD");
for(let propiedad in objeto) {
    console.log(propiedad + "--> " + objeto[propiedad]);
}