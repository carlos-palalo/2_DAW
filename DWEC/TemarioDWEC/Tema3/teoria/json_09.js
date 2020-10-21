//json_09.js - Eliminar de un JSON


var text = '{"name":"John Johnson","street":"Oslo West 16","phone":"555 1234567"}';
var obj = JSON.parse(text);

delete obj.street;

text = JSON.stringify(obj);
console.log(text);
