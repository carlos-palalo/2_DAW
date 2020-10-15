//objetos_22.js - Varias expresiones yield en una función generadora

//Ejemplo1
function* ejemploGenerador1(i) {
    yield i + 1;
    yield i + 2;
    yield i + 3;
}

console.log("EJEMPLO1");
var gen = ejemploGenerador1(10);
console.log(gen.next().value); // 11
console.log(gen.next().value); // 12
console.log(gen.next().value); // 13
console.log(gen.next().value); //undefined
console.log(gen.next().value); //undefined
console.log(gen.next().value); //undefined


//Ejemplo2
function* ejemploGenerador2(i) {
  yield i += 1;
  yield i += 2;
  yield i += 3;
}

console.log("\n\nEJEMPLO2");
var gen = ejemploGenerador2(10);
console.log(gen.next().value); // 11
console.log(gen.next().value); // 13
console.log(gen.next().value); // 16
console.log(gen.next().value); //undefined
console.log(gen.next().value); //undefined
console.log(gen.next().value); //undefined