//crear una cadena, pasarlo a json y eliminar un campo
var texto = '{"name":"juan","edad":24,"sexo":"hombre"}';
var obj = JSON.parse(texto);
delete obj["name"];
console.log(obj);