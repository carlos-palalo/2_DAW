//json_08.js - Cadenas como arrays son JSON

var text = '[ "john", "mary", "peter" ]';
var list = JSON.parse(text);
console.log(list[0] + " - " + list[1] + " - " + list[2]);