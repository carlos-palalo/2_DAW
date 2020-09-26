//lenguaje_16.js - Función isFinite

console.log("1 --> " + isFinite(123)); //True
console.log("2 --> " + isFinite(-1.23)); //True
console.log("3 --> " + isFinite(5-2)); //True
console.log("4 --> " + isFinite(0)); //True
console.log("5 --> " + isFinite('123')); //True
console.log("6 --> " + isFinite('Hello')); //False
console.log("7 --> " + isFinite('2005/12/12')); //False
console.log("8 --> " + isFinite('')); //True
console.log("9 --> " + isFinite(true)); //True
console.log("10 --> " + isFinite(undefined)); //False
console.log("11 --> " + isFinite('NaN')); //False
console.log("12 --> " + isFinite(NaN)); //False
console.log("13 --> " + isFinite(0 / 0)); //False
console.log("14 --> " + isFinite(null)); //true