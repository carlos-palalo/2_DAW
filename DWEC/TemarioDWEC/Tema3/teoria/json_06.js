//json_06.js - Evaluar funciones con JSON

//EJEMPLO CON FUNCIÓN BÁSICA
console.log("EJEMPLO1");
var personaTexto = '{"edad":20,"adulto":"function (){return true;}"}';
var personaObjeto = JSON.parse(personaTexto);
personaObjeto.adulto = eval("(" + personaObjeto.adulto + ")");
console.log( personaObjeto.edad );
console.log( personaObjeto.adulto );
console.log( personaObjeto.adulto() );



//EJEMPLO CON FUNCIÓN QUE INCLUYE REFERENCIA A LA PROPIA CADENA JSON MEDIANTE EL USO DE THIS
var personaTexto1 = '{"edad":14,"adulto":"function (){if(this.edad>=18) return true; else return false;}"}';
var personaTexto2 = '{"edad":25,"adulto":"function (){if(this.edad>=18) return true; else return false;}"}';

console.log("\n\nEJEMPLO2");
personaObjeto = JSON.parse(personaTexto1);
personaObjeto.adulto = eval("(" + personaObjeto.adulto + ")");
console.log( personaObjeto.edad );
console.log( personaObjeto.adulto );
console.log( personaObjeto.adulto() );

console.log("\n\nEJEMPLO3");
personaObjeto = JSON.parse(personaTexto2);
personaObjeto.adulto = eval("(" + personaObjeto.adulto + ")");
console.log( personaObjeto.edad );
console.log( personaObjeto.adulto );
console.log( personaObjeto.adulto() );